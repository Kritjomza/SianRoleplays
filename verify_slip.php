<?php
session_start();
require 'db.php';
require_once 'csrf.php'; // ตรวจสอบ CSRF token

header('Content-Type: application/json');

$debug = true;

// ตรวจสอบ session
if (!isset($_SESSION['user_id'])) {
  echo json_encode(['status' => 'error', 'message' => 'กรุณาเข้าสู่ระบบ']);
  exit;
}

// ตรวจสอบ method และ token
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['status' => 'error', 'message' => 'Method ไม่ถูกต้อง']);
  exit;
}

if (!validate_csrf_token($_POST['csrf_token'] ?? '')) {
  echo json_encode(['status' => 'error', 'message' => 'CSRF Token ไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบไฟล์
if (!isset($_FILES['slip']) || $_FILES['slip']['error'] !== UPLOAD_ERR_OK) {
  echo json_encode(['status' => 'error', 'message' => 'อัปโหลดสลิปล้มเหลว']);
  exit;
}

// ตรวจสอบจำนวนเงิน
$user_id = $_SESSION['user_id'];
$inputAmount = floatval($_POST['amount'] ?? 0);
if ($inputAmount <= 0) {
  echo json_encode(['status' => 'error', 'message' => 'จำนวนเงินไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบประเภทไฟล์
$allowedTypes = ['image/jpeg', 'image/png'];
$maxSize = 2 * 1024 * 1024;
$fileType = mime_content_type($_FILES['slip']['tmp_name']);
$fileSize = $_FILES['slip']['size'];

if (!in_array($fileType, $allowedTypes) || $fileSize > $maxSize) {
  echo json_encode(['status' => 'error', 'message' => 'อนุญาตเฉพาะ JPG/PNG และขนาดไม่เกิน 2MB']);
  exit;
}

// ส่งไปยัง RDCW
$clientId = "jt96ryewmmwbswym";
$clientSecret = "nd8wanx8x7wggp9unab02mjrrgmrn1sf";
$authHeader = base64_encode("$clientId:$clientSecret");

$tmpFile = $_FILES['slip']['tmp_name'];
$curlFile = new CURLFile($tmpFile, $fileType, $_FILES['slip']['name']);

$ch = curl_init();
curl_setopt_array($ch, [
  CURLOPT_URL => "https://suba.rdcw.co.th/v2/inquiry",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => ["Authorization: Basic $authHeader"],
  CURLOPT_POSTFIELDS => ['file' => $curlFile]
]);

$response = curl_exec($ch);
$error = curl_error($ch);
$info = curl_getinfo($ch);
curl_close($ch);

// Debug log (สำหรับ dev)
if ($debug) {
  file_put_contents('rdcw_debug.json', json_encode([
    'curl_error' => $error,
    'response' => $response,
    'info' => $info
  ], JSON_PRETTY_PRINT));
}

if ($error || !$response) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ RDCW']);
  exit;
}

// วิเคราะห์ผล RDCW
$result = json_decode($response, true);
if (!is_array($result)) {
  echo json_encode(['status' => 'error', 'message' => 'การตอบกลับจาก RDCW ไม่ถูกต้อง']);
  exit;
}

$isFake = !$result['valid'] || ($result['data']['is_fake'] ?? false);
$rdcwAmount = floatval($result['data']['amount'] ?? 0);
$refCode = $result['data']['transRef'] ?? '';
$bankAccountTH = trim($result['data']['receiver']['displayName'] ?? '');
$bankAccountTH2 = trim($result['data']['ref3'] ?? '');
$transferTime = $result['data']['datetime'] ?? null;
$transferTime = $transferTime ? date('Y-m-d H:i:s', strtotime($transferTime)) : null;

// อัปโหลดสลิป
$ext = strtolower(pathinfo($_FILES['slip']['name'], PATHINFO_EXTENSION));
$uploadDir = 'slips/';
if (!is_dir($uploadDir)) mkdir($uploadDir, 0755, true);
$filename = uniqid('slip_', true) . '.' . $ext;
$targetPath = $uploadDir . $filename;
move_uploaded_file($tmpFile, $targetPath);

// ตรวจ ref ซ้ำ
$stmt = $pdo->prepare("SELECT COUNT(*) FROM topups WHERE ref_code = ? AND status = 'approved'");
$stmt->execute([$refCode]);
$isDuplicate = $stmt->fetchColumn() > 0;

// ตรวจเงื่อนไข reject
$rejectionReason = null;
if (!$result['valid']) {
  $rejectionReason = 'ใบเสร็จไม่สามารถตรวจสอบได้';
} elseif ($isFake) {
  $rejectionReason = 'ใบเสร็จถูกระบุว่าเป็นของปลอม';
} elseif (abs($rdcwAmount - $inputAmount) > 1.00) {
  $rejectionReason = 'ยอดเงินในสลิปไม่ตรงกับที่กรอก';
} elseif (empty($refCode)) {
  $rejectionReason = 'ไม่พบเลขอ้างอิงในสลิป';
} elseif ($isDuplicate) {
  $rejectionReason = 'ใบเสร็จนี้ถูกใช้ไปแล้ว';
} elseif (stripos($bankAccountTH, 'ธนกฤต') === false && stripos($bankAccountTH2, '') === false) {
  $rejectionReason = 'บัญชีปลายทางไม่ตรงกับชื่อที่กำหนด';
}

// กรณีไม่ผ่าน
if ($rejectionReason) {
  $stmt = $pdo->prepare("INSERT INTO topups 
    (user_id, slip_image, amount, status, ref_code, bank_account, transferred_at, verified_at) 
    VALUES (?, ?, ?, 'rejected', ?, ?, ?, NOW())");
  $stmt->execute([$user_id, $filename, $rdcwAmount, $refCode, $bankAccountTH, $transferTime]);

  echo json_encode([
    'status' => 'rejected',
    'message' => '❌ ไม่ผ่านการตรวจสอบสลิป',
    'reason' => $rejectionReason
  ]);
  exit;
}

// เติมเงิน
$pdo->beginTransaction();

$stmt = $pdo->prepare("UPDATE wallets SET balance = balance + ? WHERE user_id = ?");
$stmt->execute([$rdcwAmount, $user_id]);

$stmt = $pdo->prepare("INSERT INTO topups 
  (user_id, slip_image, amount, status, ref_code, bank_account, transferred_at, verified_at)
  VALUES (?, ?, ?, 'approved', ?, ?, ?, NOW())");
$stmt->execute([$user_id, $filename, $rdcwAmount, $refCode, $bankAccountTH, $transferTime]);

$pdo->commit();

echo json_encode([
  'status' => 'approved',
  'amount' => $rdcwAmount
]);

file_put_contents('rdcw_debug.json', $response); 
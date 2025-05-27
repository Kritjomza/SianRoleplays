<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';
require_once 'csrf.php'; // เรียกใช้ฟังก์ชัน get_csrf_token และ validate_csrf_token

header('Content-Type: application/json');

// ตรวจสอบ method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['status' => 'error', 'message' => 'Method ไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบ CSRF Token
if (!validate_csrf_token($_POST['csrf_token'] ?? '')) {
  echo json_encode(['status' => 'error', 'message' => 'CSRF Token ไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบ input
$user_id = intval($_POST['user_id'] ?? 0);
$amount = floatval($_POST['amount'] ?? 0);
$type = $_POST['type'] ?? ''; // add, subtract, set

if (!$user_id || $amount < 0 || !in_array($type, ['add', 'subtract', 'set'])) {
  echo json_encode(['status' => 'error', 'message' => 'ข้อมูลไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบว่าผู้ใช้งานมีอยู่จริง
$stmt = $pdo->prepare("SELECT * FROM wallets WHERE user_id = ?");
$stmt->execute([$user_id]);
$wallet = $stmt->fetch();

if (!$wallet) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่พบกระเป๋าของผู้ใช้']);
  exit;
}

$currentBalance = floatval($wallet['balance']);
$newBalance = $currentBalance;

if ($type === 'set') {
  $newBalance = $amount;
} elseif ($type === 'add') {
  $newBalance = $currentBalance + $amount;
} elseif ($type === 'subtract') {
  $newBalance = $currentBalance - $amount;
  if ($newBalance < 0) {
    echo json_encode(['status' => 'error', 'message' => 'ไม่สามารถลดยอดต่ำกว่า 0 ได้']);
    exit;
  }
}

// อัปเดต balance
$stmt = $pdo->prepare("UPDATE wallets SET balance = ? WHERE user_id = ?");
$stmt->execute([$newBalance, $user_id]);

echo json_encode([
  'status' => 'success',
  'message' => 'อัปเดต SP สำเร็จ',
  'new_balance' => $newBalance
]);

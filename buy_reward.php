<?php
session_start();
require 'db.php';
require_once 'csrf.php';

header('Content-Type: application/json');

// ตรวจสอบว่าเข้าสู่ระบบ
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

$user_id = $_SESSION['user_id'];
$reward_id = intval($_POST['reward_id'] ?? 0);
$quantity = max(1, intval($_POST['quantity'] ?? 1));

// ตรวจสอบ reward
$stmt = $pdo->prepare("SELECT * FROM rewards WHERE id = ?");
$stmt->execute([$reward_id]);
$reward = $stmt->fetch();

if (!$reward) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่พบรางวัลที่เลือก']);
  exit;
}

$price = $reward['price'];
$totalPrice = $price * $quantity;

// ตรวจสอบ SP
$stmt = $pdo->prepare("SELECT balance FROM wallets WHERE user_id = ?");
$stmt->execute([$user_id]);
$wallet = $stmt->fetch();

if (!$wallet || $wallet['balance'] < $totalPrice) {
  echo json_encode([
    'status' => 'error',
    'message' => 'SP ของคุณไม่เพียงพอ',
    'balance' => $wallet['balance'],
    'required' => $totalPrice
  ]);
  exit;
}

// ตรวจสอบว่าโค้ดเพียงพอ
$stmt = $pdo->prepare("SELECT id, code FROM redeem_codes WHERE reward_id = ? AND is_claimed = 0 LIMIT $quantity");
$stmt->execute([$reward_id]);
$codes = $stmt->fetchAll();

if (count($codes) < $quantity) {
  echo json_encode(['status' => 'error', 'message' => 'โค้ดสำหรับรางวัลนี้ไม่เพียงพอ']);
  exit;
}

$redeemedCodes = [];

try {
  $pdo->beginTransaction();

  // หัก SP
  $stmt = $pdo->prepare("UPDATE wallets SET balance = balance - ? WHERE user_id = ?");
  $stmt->execute([$totalPrice, $user_id]);

  foreach ($codes as $code) {
    // อัปเดตสถานะโค้ด
    $stmt = $pdo->prepare("UPDATE redeem_codes SET is_claimed = 1, claimed_by = ?, claimed_at = NOW() WHERE id = ?");
    $stmt->execute([$user_id, $code['id']]);

    // บันทึกประวัติ
    $stmt = $pdo->prepare("INSERT INTO purchases (user_id, reward_id, code_id, amount) VALUES (?, ?, ?, ?)");
    $stmt->execute([$user_id, $reward_id, $code['id'], $price]);

    $redeemedCodes[] = $code['code'];
  }

  $pdo->commit();
  echo json_encode(['status' => 'success', 'codes' => $redeemedCodes]);

} catch (Exception $e) {
  $pdo->rollBack();
  echo json_encode(['status' => 'error', 'message' => 'เกิดข้อผิดพลาดในการซื้อ: ' . $e->getMessage()]);
}

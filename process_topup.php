<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';
require_once 'csrf.php';

header('Content-Type: application/json');

// รับเฉพาะ POST
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
$topupId = intval($_POST['id'] ?? 0);
$action = $_POST['action'] ?? '';

if (!$topupId || !in_array($action, ['approve', 'reject'], true)) {
  echo json_encode(['status' => 'error', 'message' => 'ข้อมูลไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบรายการ topup
$stmt = $pdo->prepare("SELECT * FROM topups WHERE id = ?");
$stmt->execute([$topupId]);
$topup = $stmt->fetch();

if (!$topup) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่พบรายการเติมเงินนี้']);
  exit;
}

if ($topup['status'] !== 'pending') {
  echo json_encode(['status' => 'error', 'message' => 'รายการนี้ได้รับการตรวจสอบแล้ว']);
  exit;
}

$userId = $topup['user_id'];
$amount = floatval($topup['amount']);

try {
  $pdo->beginTransaction();

  if ($action === 'approve') {
    // เพิ่มยอด SP
    $stmt = $pdo->prepare("UPDATE wallets SET balance = balance + ? WHERE user_id = ?");
    $stmt->execute([$amount, $userId]);

    $stmt = $pdo->prepare("UPDATE topups SET status = 'approved', verified_at = NOW() WHERE id = ?");
    $stmt->execute([$topupId]);

    $pdo->commit();
    echo json_encode(['status' => 'success', 'message' => 'อนุมัติเรียบร้อย']);
    exit;
  }

  if ($action === 'reject') {
    $stmt = $pdo->prepare("UPDATE topups SET status = 'rejected', verified_at = NOW() WHERE id = ?");
    $stmt->execute([$topupId]);

    $pdo->commit();
    echo json_encode(['status' => 'success', 'message' => 'ปฏิเสธเรียบร้อย']);
    exit;
  }

} catch (Exception $e) {
  $pdo->rollBack();
  echo json_encode(['status' => 'error', 'message' => 'เกิดข้อผิดพลาด: ' . $e->getMessage()]);
}

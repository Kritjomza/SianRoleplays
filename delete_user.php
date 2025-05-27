<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';
require_once 'csrf.php'; // เพิ่มสำหรับตรวจ CSRF

header('Content-Type: application/json');

//รับเฉพาะ POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo json_encode(['status' => 'error', 'message' => 'Method ไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบ CSRF Token
if (!validate_csrf_token($_POST['csrf_token'] ?? '')) {
  echo json_encode(['status' => 'error', 'message' => 'CSRF Token ไม่ถูกต้อง']);
  exit;
}

// รับและตรวจสอบ user_id
$user_id = intval($_POST['id'] ?? 0);
if ($user_id <= 0) {
  echo json_encode(['status' => 'error', 'message' => 'รหัสผู้ใช้ไม่ถูกต้อง']);
  exit;
}

// ตรวจสอบว่ามีผู้ใช้นี้อยู่จริง
$stmt = $pdo->prepare("SELECT id FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$userExists = $stmt->fetchColumn();

if (!$userExists) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่พบผู้ใช้นี้ในระบบ']);
  exit;
}

// ลบผู้ใช้งาน (จะลบ wallets, topups, purchases ตาม FK cascade)
try {
  $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
  $stmt->execute([$user_id]);

  echo json_encode(['status' => 'success']);
} catch (Exception $e) {
  echo json_encode(['status' => 'error', 'message' => 'เกิดข้อผิดพลาดในการลบ: ' . $e->getMessage()]);
}

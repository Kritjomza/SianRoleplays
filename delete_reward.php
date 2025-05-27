<?php
require_once 'db.php';
session_start();
require_once 'admin_auth.php';

header('Content-Type: application/json');

$id = $_GET['id'] ?? null;

if (!$id) {
  echo json_encode(['status' => 'error', 'message' => 'ไม่พบรหัสสินค้า']);
  exit;
}

try {
  $stmt = $pdo->prepare("DELETE FROM rewards WHERE id = ?");
  $stmt->execute([$id]);

  echo json_encode(['status' => 'success']);
} catch (Exception $e) {
  echo json_encode(['status' => 'error', 'message' => 'ลบไม่สำเร็จ']);
}

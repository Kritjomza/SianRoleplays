<?php
require_once 'db.php';
session_start();
require_once 'admin_auth.php';

header('Content-Type: application/json');

$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$price = $_POST['price'] ?? 0;
$total_sp = $_POST['total_sp'] ?? 0;
$imageName = null;

if (!$title || !$price || !$total_sp) {
  echo json_encode(['status' => 'error', 'message' => 'กรุณากรอกข้อมูลให้ครบถ้วน']);
  exit;
}

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
  $tmpName = $_FILES['image']['tmp_name'];
  $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
  $allowed = ['jpg', 'jpeg', 'png', 'webp'];
  if (!in_array($ext, $allowed)) {
    echo json_encode(['status' => 'error', 'message' => 'ประเภทไฟล์ไม่รองรับ']);
    exit;
  }
  $imageName = uniqid('reward_', true) . ".{$ext}";
  move_uploaded_file($tmpName, "uploads/{$imageName}");
}

try {
  if ($id) {
    $query = "UPDATE rewards SET title = ?, description = ?, total_sp = ?, price = ?" .
             ($imageName ? ", image = ?" : '') .
             " WHERE id = ?";

    $params = [$title, $description, $total_sp, $price];
    if ($imageName) $params[] = $imageName;
    $params[] = $id;

    $stmt = $pdo->prepare($query);
    $stmt->execute($params);

    echo json_encode(['status' => 'success', 'message' => 'อัปเดตสินค้าสำเร็จ']);
  } else {
    $stmt = $pdo->prepare("INSERT INTO rewards (title, description, total_sp, price, image) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$title, $description, $total_sp, $price, $imageName]);

    echo json_encode(['status' => 'success', 'message' => 'เพิ่มสินค้าสำเร็จ']);
  }
} catch (Exception $e) {
  echo json_encode(['status' => 'error', 'message' => 'เกิดข้อผิดพลาดในการบันทึกข้อมูล']);
}
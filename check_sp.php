<?php
session_start();
require 'db.php';

header('Content-Type: application/json');

// ตรวจสอบผู้ใช้ล็อกอิน
$user_id = $_SESSION['user_id'] ?? 0;
$reward_id = isset($_GET['reward_id']) ? intval($_GET['reward_id']) : 0;
$quantity = max(1, intval($_GET['quantity'] ?? 1));

$response = [
    'required' => 0,
    'balance' => 0,
    'enough' => false
];

// ดึง SP ปัจจุบัน
$stmt = $pdo->prepare("SELECT balance FROM wallets WHERE user_id = ?");
$stmt->execute([$user_id]);
$wallet = $stmt->fetch();
$response['balance'] = $wallet ? floatval($wallet['balance']) : 0;

// ดึงข้อมูลรางวัล
$stmt = $pdo->prepare("SELECT total_sp FROM rewards WHERE id = ?");
$stmt->execute([$reward_id]);
$reward = $stmt->fetch();

if ($reward) {
    $total_required = $reward['total_sp'] * $quantity;
    $response['required'] = $total_required;
    $response['enough'] = $response['balance'] >= $total_required;
}

echo json_encode($response);

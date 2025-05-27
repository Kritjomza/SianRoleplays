<?php
session_start();
require 'db.php';

$client_id = '1373343504373387295';
$client_secret = 'vIvszbvgImrK1hBiQfX52ha9TKT8236P';
$redirect_uri = 'http://localhost/SianRoleplay/discord_callback.php';

if (!isset($_GET['code'])) {
    die('ไม่มีโค้ดจาก Discord ส่งมา');
}

$code = $_GET['code'];

// Step 1: ขอ access_token
$data = [
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'authorization_code',
    'code' => $code,
    'redirect_uri' => $redirect_uri,
    'scope' => 'identify'
];

$curl = curl_init('https://discord.com/api/oauth2/token');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
$response = json_decode(curl_exec($curl), true);
curl_close($curl);

if (!isset($response['access_token'])) {
    echo "<h3>⚠️ ไม่สามารถแลก access_token ได้</h3><pre>";
    print_r($response);
    echo "</pre>";
    exit;
}

$access_token = $response['access_token'];

// Step 2: ดึงข้อมูลผู้ใช้
$curl = curl_init('https://discord.com/api/users/@me');
curl_setopt($curl, CURLOPT_HTTPHEADER, ["Authorization: Bearer $access_token"]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$user = json_decode(curl_exec($curl), true);
curl_close($curl);

if (!isset($user['id'])) {
    echo "<h3>⚠️ ไม่สามารถดึงข้อมูลผู้ใช้</h3><pre>";
    print_r($user);
    echo "</pre>";
    exit;
}

// แยกข้อมูล
$discord_id = $user['id'];
$discord_username = $user['username'];
$discord_discriminator = $user['discriminator'];
$discord_avatar = $user['avatar'];

// Step 3: บันทึก/เช็คในฐานข้อมูล
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$discord_id]);
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user_data) {
    // ยังไม่มีผู้ใช้ → สมัครใหม่
    $stmt = $pdo->prepare("INSERT INTO users (username, discord_tag, avatar) VALUES (?, ?, ?)");
    $stmt->execute([$discord_id, $discord_username . '#' . $discord_discriminator, $discord_avatar]);

    $user_id = $pdo->lastInsertId();

    // เพิ่ม wallet ด้วย
    $stmt = $pdo->prepare("INSERT INTO wallets (user_id, balance) VALUES (?, 0.00)");
    $stmt->execute([$user_id]);
} else {
    $user_id = $user_data['id'];
}

// Step 4: Login สำเร็จ
$_SESSION['user_logged_in'] = true;
$_SESSION['user_id'] = $user_id;
$_SESSION['discord_id'] = $discord_id;
$_SESSION['discord_username'] = $discord_username . '#' . $discord_discriminator;
$_SESSION['discord_avatar'] = $discord_avatar;

// Redirect
header("Location: shop.php");
exit();
?>

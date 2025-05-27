<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';

$reward_id = $_GET['id'] ?? null;
if (!$reward_id) {
  echo "ไม่พบรางวัล";
  exit;
}

$stmt = $pdo->prepare("SELECT * FROM rewards WHERE id = ?");
$stmt->execute([$reward_id]);
$reward = $stmt->fetch();
if (!$reward) {
  echo "ไม่พบรางวัลนี้";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $codesText = trim($_POST['codes'] ?? '');
  $lines = array_filter(array_map('trim', explode("\n", $codesText)));

  $inserted = 0;
  foreach ($lines as $code) {
    try {
      $stmt = $pdo->prepare("INSERT INTO redeem_codes (reward_id, code) VALUES (?, ?)");
      $stmt->execute([$reward_id, $code]);
      $inserted++;
    } catch (Exception $e) {
      // duplicate or error
    }
  }
  $success = "เพิ่มโค้ดสำเร็จทั้งหมด {$inserted} รายการ";
}

$count = $pdo->prepare("SELECT COUNT(*) FROM redeem_codes WHERE reward_id = ? AND is_claimed = 0");
$count->execute([$reward_id]);
$remaining = $count->fetchColumn();
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มโค้ด - <?= htmlspecialchars($reward['title']) ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <style> body { font-family: 'Prompt', sans-serif; } </style>
</head>
<body class="bg-[#0f1524] text-white min-h-screen flex items-center justify-center p-4">
  <div class="bg-[#1e293b] rounded-xl max-w-xl w-full p-6 shadow-lg">
    <h1 class="text-xl font-bold text-orange-400 mb-4">เพิ่มโค้ดสำหรับ: <?= htmlspecialchars($reward['title']) ?></h1>
    <p class="text-sm text-white/80 mb-4">โค้ดคงเหลือปัจจุบัน: <span class="text-green-400 font-bold"><?= $remaining ?></span></p>
    <?php if (!empty($success)): ?>
      <div class="bg-green-600/20 text-green-300 px-4 py-2 mb-4 rounded">✅ <?= $success ?></div>
    <?php endif; ?>
    <form method="post">
      <label class="block mb-2 text-sm">กรอกโค้ด (บรรทัดละ 1 โค้ด):</label>
      <textarea name="codes" rows="6" class="w-full p-3 bg-white/10 rounded text-white mb-4" required></textarea>
      <div class="flex justify-end gap-2">
        <a href="admin_rewards.php" class="px-4 py-2 bg-gray-600 hover:bg-gray-700 rounded">กลับ</a>
        <button type="submit" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded">บันทึก</button>
      </div>
    </form>
  </div>
</body>
</html>

<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_logged_in'])) {
    header("Location: discord_login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$discordUsername = $_SESSION['discord_username'] ?? 'ไม่ทราบชื่อ';
$discordId = $_SESSION['discord_id'] ?? 'N/A';
$discordAvatar = $_SESSION['discord_avatar'] ?? null;

$avatarUrl = $discordAvatar
    ? "https://cdn.discordapp.com/avatars/$discordId/$discordAvatar.png"
    : "https://cdn.discordapp.com/embed/avatars/" . ((int)substr($discordId, -1) % 5) . ".png";

$role = 'ผู้ใช้ทั่วไป';

// ดึง SP
$stmt = $pdo->prepare("SELECT balance FROM wallets WHERE user_id = ?");
$stmt->execute([$user_id]);
$wallet = $stmt->fetch();
$sp = $wallet ? $wallet['balance'] : 0;

// รางวัลที่ได้รับ (redeem code ที่เคลมแล้ว)
$stmt = $pdo->prepare("
  SELECT r.title, c.code
  FROM redeem_codes c
  JOIN rewards r ON c.reward_id = r.id
  WHERE c.claimed_by = ?
  ORDER BY c.claimed_at DESC
");
$stmt->execute([$user_id]);
$rewards = $stmt->fetchAll();

// ประวัติการซื้อ (จาก purchases)
$stmt = $pdo->prepare("
  SELECT r.title, p.purchased_at
  FROM purchases p
  JOIN rewards r ON p.reward_id = r.id
  WHERE p.user_id = ?
  ORDER BY p.purchased_at DESC
");
$stmt->execute([$user_id]);
$purchases = $stmt->fetchAll();

// ประวัติการเติมเงิน
$stmt = $pdo->prepare("
  SELECT amount, status, created_at
  FROM topups
  WHERE user_id = ?
  ORDER BY created_at DESC
");
$stmt->execute([$user_id]);
$topups = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>โปรไฟล์ผู้ใช้ - SIAN ROLEPLAY</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #1a1a1a;
    }

    ::-webkit-scrollbar-thumb {
      background: #fd7e14;
      border-radius: 8px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #ffa94d;
    }
  </style>
</head>
<body class="bg-dark text-white font-sans min-h-screen">

<?php include 'header.php'; ?>

<main class="max-w-4xl mx-auto px-4 py-20 space-y-10">

  <!-- ข้อมูลผู้ใช้ -->
  <div class="bg-dark-light p-6 rounded-xl shadow-lg border-glow">
    <div class="flex items-center gap-4">
      <img src="<?= $avatarUrl ?>" alt="Avatar" class="w-16 h-16 rounded-full border border-primary shadow">
      <div class="text-lg">
        <div class="font-bold text-xl text-primary">ข้อมูลบัญชีผู้ใช้</div>
        <p>ชื่อผู้ใช้: <span class="font-medium"><?= htmlspecialchars($discordUsername) ?></span></p>
        <p>สถานะ: <span class="text-green-400 font-semibold"><?= $role ?></span></p>
      </div>
      <div class="ml-auto text-right">
        <p class="text-lg font-bold text-yellow-400">ยอดคงเหลือ: <?= number_format($sp) ?> SP</p>
        <a href="logout.php" class="mt-2 inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full font-semibold transition">ออกจากระบบ</a>
      </div>
    </div>
  </div>

  <!-- Code ที่ได้รับ -->
  <div class="bg-dark-light p-6 rounded-xl shadow-md border border-primary/20">
    <h2 class="text-xl font-bold text-primary mb-3">รหัสที่คุณได้รับ</h2>
    <?php if (count($rewards) === 0): ?>
      <p class="text-gray-400">ยังไม่มีรหัสที่คุณได้รับ</p>
    <?php else: ?>
      <ul class="list-disc pl-5 text-gray-200 space-y-1 text-sm">
        <?php foreach ($rewards as $r): ?>
          <li><?= htmlspecialchars($r['title']) ?> - <span class="text-primary">โค้ด:</span> <code class="text-yellow-400"><?= htmlspecialchars($r['code']) ?></code></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <!-- ประวัติการสั่งซื้อสินค้า -->
  <div class="bg-dark-light p-6 rounded-xl shadow-md border border-primary/20">
    <h2 class="text-xl font-bold text-primary mb-3">ประวัติการสั่งซื้อสินค้า</h2>
    <?php if (count($purchases) === 0): ?>
      <p class="text-gray-400">ยังไม่มีประวัติการสั่งซื้อ</p>
    <?php else: ?>
      <ul class="list-decimal pl-5 text-gray-200 space-y-1 text-sm">
        <?php foreach ($purchases as $p): ?>
          <li><?= htmlspecialchars($p['title']) ?> - วันที่ <?= date('d/m/Y H:i', strtotime($p['purchased_at'])) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>

  <!-- ประวัติการเติมเงิน -->
  <div class="bg-dark-light p-6 rounded-xl shadow-md border border-primary/20">
    <h2 class="text-xl font-bold text-primary mb-3">ประวัติการเติมเงิน</h2>
    <?php if (count($topups) === 0): ?>
      <p class="text-gray-400">ยังไม่มีประวัติการเติมเงิน</p>
    <?php else: ?>
      <table class="w-full text-sm text-left text-gray-300">
        <thead>
          <tr class="text-primary border-b border-primary/30">
            <th class="py-2">จำนวนเงิน</th>
            <th class="py-2">สถานะ</th>
            <th class="py-2">วันที่</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($topups as $t): ?>
            <tr class="border-b border-dark-light/50">
              <td class="py-2"><?= number_format($t['amount'], 2) ?> บาท</td>
              <td class="py-2">
                <?php
                $statusColor = [
                  'pending' => 'text-yellow-400',
                  'approved' => 'text-green-400',
                  'rejected' => 'text-red-500'
                ];
                ?>
                <span class="<?= $statusColor[$t['status']] ?? 'text-white' ?>">
                  <?= ucfirst($t['status']) ?>
                </span>
              </td>
              <td class="py-2"><?= date('d/m/Y H:i', strtotime($t['created_at'])) ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>

</main>

<?php include 'footer.php'; ?>
</body>
</html>

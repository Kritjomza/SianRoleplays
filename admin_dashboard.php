<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';

if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'superadmin') {
    header('Location: index.php');
    exit();
}

// สถิติต่าง ๆ
$userCount = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$rewardCount = $pdo->query("SELECT COUNT(*) FROM rewards")->fetchColumn();
$topupPending = $pdo->query("SELECT COUNT(*) FROM topups WHERE status = 'pending'")->fetchColumn();
$purchasesCount = $pdo->query("SELECT COUNT(*) FROM purchases")->fetchColumn();
$codeRemaining = $pdo->query("SELECT COUNT(*) FROM redeem_codes WHERE is_claimed = 0")->fetchColumn();
$totalTopup = $pdo->query("SELECT SUM(amount) FROM topups WHERE status = 'approved'")->fetchColumn();
$totalSP = $pdo->query("SELECT SUM(balance) FROM wallets")->fetchColumn();

// กราฟเติมเงินรายวัน
$topupData = $pdo->query("SELECT DATE(created_at) as date, SUM(amount) as total FROM topups WHERE status = 'approved' GROUP BY DATE(created_at) ORDER BY date DESC LIMIT 7")->fetchAll(PDO::FETCH_ASSOC);
$topupDates = array_reverse(array_column($topupData, 'date'));
$topupTotals = array_reverse(array_column($topupData, 'total'));

// กราฟการซื้อแยกตามรางวัล
$purchaseData = $pdo->query("SELECT rewards.title, COUNT(*) as total FROM purchases JOIN rewards ON purchases.reward_id = rewards.id GROUP BY rewards.title ORDER BY total DESC")->fetchAll(PDO::FETCH_ASSOC);
$purchaseLabels = array_column($purchaseData, 'title');
$purchaseTotals = array_column($purchaseData, 'total');

// รางวัลที่ใกล้หมดโค้ด (เช่น เหลือน้อยกว่า 5 โค้ด)
$lowCodeRewards = $pdo->query("SELECT rewards.title, COUNT(*) as remaining FROM redeem_codes JOIN rewards ON redeem_codes.reward_id = rewards.id WHERE redeem_codes.is_claimed = 0 GROUP BY rewards.id HAVING remaining < 3")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แดชบอร์ดแอดมิน - SIAN ROLEPLAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body { font-family: 'Prompt', sans-serif; }
  </style>
</head>
<body class="bg-[#0f1524] text-white min-h-screen flex">

  <?php include 'navbar_admin.php'; ?>

  <main class="flex-1 p-6">
    <h1 class="text-3xl font-bold text-orange-400 mb-6">แดชบอร์ดผู้ดูแลระบบ</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
      <div class="bg-gradient-to-br from-orange-500 to-yellow-400 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">จำนวนผู้ใช้</p>
        <p class="text-3xl font-bold mt-2"><?= $userCount ?></p>
      </div>
      <div class="bg-gradient-to-br from-purple-600 to-indigo-500 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">รางวัลที่มี</p>
        <p class="text-3xl font-bold mt-2"><?= $rewardCount ?></p>
      </div>
      <div class="bg-gradient-to-br from-pink-500 to-red-500 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">สลิปที่รอตรวจ</p>
        <p class="text-3xl font-bold mt-2"><?= $topupPending ?></p>
      </div>
      <div class="bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">ประวัติการซื้อ</p>
        <p class="text-3xl font-bold mt-2"><?= $purchasesCount ?></p>
      </div>
      <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">โค้ด Redeem ที่เหลือ</p>
        <p class="text-3xl font-bold mt-2"><?= $codeRemaining ?></p>
      </div>
      <div class="bg-gradient-to-br from-teal-500 to-lime-500 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">ยอดเติมรวม</p>
        <p class="text-3xl font-bold mt-2"><?= number_format($totalTopup, 2) ?> บาท</p>
      </div>
      <div class="bg-gradient-to-br from-gray-600 to-gray-800 rounded-2xl p-6 shadow-xl">
        <p class="text-lg font-semibold">SP หมุนเวียน</p>
        <p class="text-3xl font-bold mt-2"><?= number_format($totalSP, 2) ?> SP</p>
      </div>
    </div>

    <?php if (count($lowCodeRewards) > 0): ?>
    <div class="mt-10 bg-red-700/40 p-5 rounded-xl border border-red-500">
      <h2 class="text-xl font-bold text-red-400 mb-2">แจ้งเตือน: รางวัลใกล้หมดโค้ด</h2>
      <ul class="list-disc ml-6">
        <?php foreach ($lowCodeRewards as $item): ?>
        <li><?= htmlspecialchars($item['title']) ?> (เหลือ <?= $item['remaining'] ?> โค้ด)</li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
      <div class="bg-[#1e293b] p-5 rounded-xl shadow-lg">
        <h2 class="text-lg font-semibold mb-3">ยอดเติมเงิน 7 วันล่าสุด</h2>
        <canvas id="topupChart" height="200"></canvas>
      </div>
      <div class="bg-[#1e293b] p-5 rounded-xl shadow-lg">
        <h2 class="text-lg font-semibold mb-3">จำนวนการซื้อแยกรางวัล</h2>
        <canvas id="purchaseChart" height="200"></canvas>
      </div>
    </div>

    <script>
      const topupCtx = document.getElementById('topupChart').getContext('2d');
      new Chart(topupCtx, {
        type: 'bar',
        data: {
          labels: <?= json_encode($topupDates) ?>,
          datasets: [{
            label: 'ยอดเติมเงิน (บาท)',
            data: <?= json_encode($topupTotals) ?>,
            backgroundColor: '#38bdf8'
          }]
        },
        options: {
          scales: { y: { beginAtZero: true } }
        }
      });

      const purchaseCtx = document.getElementById('purchaseChart').getContext('2d');
      new Chart(purchaseCtx, {
        type: 'doughnut',
        data: {
          labels: <?= json_encode($purchaseLabels) ?>,
          datasets: [{
            label: 'จำนวนการซื้อ',
            data: <?= json_encode($purchaseTotals) ?>,
            backgroundColor: [
              '#f87171', '#facc15', '#4ade80', '#60a5fa', '#c084fc', '#f472b6'
            ]
          }]
        }
      });
    </script>

  </main>

</body>
</html>
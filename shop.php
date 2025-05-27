<?php
include('db.php');
session_start();
require_once 'csrf.php';

function startsWith($haystack, $needle) {
  return substr($haystack, 0, strlen($needle)) === $needle;
}

$searchQuery = trim($_GET['search'] ?? '');
$sortBy = $_GET['sort'] ?? 'newest';

$sql = "SELECT * FROM rewards WHERE is_done = 0";
$params = [];

if ($searchQuery !== '') {
  $sql .= " AND (title LIKE :search OR description LIKE :search)";
  $params[':search'] = "%$searchQuery%";
}

switch ($sortBy) {
  case 'price_asc': $sql .= " ORDER BY price ASC"; break;
  case 'price_desc': $sql .= " ORDER BY price DESC"; break;
  case 'sp_asc': $sql .= " ORDER BY total_sp ASC"; break;
  case 'sp_desc': $sql .= " ORDER BY total_sp DESC"; break;
  default: $sql .= " ORDER BY id DESC"; break;
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$rewards = $stmt->fetchAll();

$codeCounts = [];
$stmt = $pdo->query("SELECT reward_id, COUNT(*) as total FROM redeem_codes WHERE is_claimed = 0 GROUP BY reward_id");
foreach ($stmt as $row) {
  $codeCounts[$row['reward_id']] = $row['total'];
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ร้านค้า - SIAN ROLEPLAY</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body class="bg-[#0f1524] text-white">
<?php include('header.php'); ?>

<main class="container mx-auto px-4 py-20">
  <h1 class="text-4xl text-center font-bold text-orange-400 mb-10">ร้านค้า</h1>

  <form method="GET" class="flex flex-col md:flex-row items-center gap-4 mb-8">
    <input type="text" name="search" value="<?= htmlspecialchars($searchQuery) ?>" placeholder="ค้นหาไอเทม..."
      class="w-full md:w-1/3 px-4 py-2 bg-[#1e293b] border border-orange-500 text-white rounded-md" />

    <select name="sort" class="w-full md:w-60 px-4 py-2 bg-[#1e293b] border border-orange-500 text-white rounded-md">
      <option value="newest" <?= $sortBy === 'newest' ? 'selected' : '' ?>>ใหม่ล่าสุด</option>
      <option value="price_asc" <?= $sortBy === 'price_asc' ? 'selected' : '' ?>>ราคาน้อย → มาก</option>
      <option value="price_desc" <?= $sortBy === 'price_desc' ? 'selected' : '' ?>>ราคามาก → น้อย</option>
      <option value="sp_asc" <?= $sortBy === 'sp_asc' ? 'selected' : '' ?>>SP น้อย → มาก</option>
      <option value="sp_desc" <?= $sortBy === 'sp_desc' ? 'selected' : '' ?>>SP มาก → น้อย</option>
    </select>

    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md">
      🔍 ค้นหา
    </button>
  </form>

  <?php if (count($rewards) === 0): ?>
    <div class="text-center text-gray-300 text-lg">ขณะนี้ยังไม่มีสินค้าให้เลือกซื้อ</div>
  <?php else: ?>
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
      <?php foreach ($rewards as $reward): ?>
        <?php
          $imagePath = ($reward['image']) ? 'uploads/' . htmlspecialchars($reward['image'], ENT_QUOTES, 'UTF-8') : 'placeholder.jpg';
          $remaining = $codeCounts[$reward['id']] ?? 0;
          $safeTitle = htmlspecialchars($reward['title'], ENT_QUOTES, 'UTF-8');
          $safeDesc = htmlspecialchars($reward['description'], ENT_QUOTES, 'UTF-8');
        ?>
        <div class="bg-[#1e293b] p-5 rounded-xl shadow-lg border border-orange-500/20" data-aos="fade-up">
          <img src="<?= $imagePath ?>" alt="<?= $safeTitle ?>" class="w-full h-48 object-cover rounded-md mb-4">
          <h2 class="text-xl font-bold text-orange-400 mb-2"><?= $safeTitle ?></h2>
          <p class="text-sm text-white/80 mb-3 line-clamp-2"><?= $safeDesc ?></p>
          <div class="text-sm text-gray-300 mb-2">
            <span class="block">ราคา: <span class="text-white font-semibold"><?= number_format($reward['price'], 2) ?> บาท</span></span>
            <span class="block">ใช้แต้ม: <span class="text-yellow-300 font-bold"><?= $reward['total_sp'] ?> SP</span></span>
            <span class="block">คงเหลือ: <span class="text-lime-400 font-bold"><?= $remaining ?></span></span>
          </div>

          <div class="flex items-center justify-center gap-2 mb-3">
            <button type="button" onclick="changeQty(this, -1)" class="bg-[#0f172a] border border-orange-400 text-white w-8 h-8 rounded">−</button>
            <input type="number" value="1" min="1" class="qty-input text-center w-12 bg-[#1e293b] border border-orange-400 text-white rounded" readonly>
            <button type="button" onclick="changeQty(this, 1)" class="bg-[#0f172a] border border-orange-400 text-white w-8 h-8 rounded">+</button>
          </div>

          <button onclick="confirmPurchase(<?= $reward['id'] ?>, <?= $reward['total_sp'] ?>, <?= $reward['price'] ?>, '<?= $safeTitle ?>', this)" class="w-full text-center py-2 px-4 rounded-lg bg-orange-500 hover:bg-orange-600 text-white font-semibold transition">ซื้อเลย</button>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</main>

<?php include('footer.php'); ?>

<script>
AOS.init({ duration: 800, once: true });

function changeQty(button, delta) {
  const input = button.parentElement.querySelector('.qty-input');
  let current = parseInt(input.value);
  current = isNaN(current) ? 1 : current + delta;
  input.value = Math.max(1, current);
}

function confirmPurchase(rewardId, spPerUnit, pricePerUnit, title, buttonEl) {
  const qtyInput = buttonEl.parentElement.querySelector('.qty-input');
  const qty = parseInt(qtyInput.value);
  if (isNaN(qty) || qty < 1) {
    Swal.fire({ icon: 'warning', text: 'จำนวนสินค้าต้องมากกว่า 0' });
    return;
  }

  fetch(`check_sp.php?reward_id=${rewardId}&quantity=${qty}`)
    .then(res => res.json())
    .then(data => {
      if (!data.enough) {
        Swal.fire({
          icon: 'error',
          title: 'SP ไม่เพียงพอ',
          html: `คุณมี <b>${data.balance}</b> SP<br>ต้องใช้ <b>${data.required}</b> SP`
        });
        return;
      }

      Swal.fire({
        icon: 'info',
        title: 'ยืนยันการสั่งซื้อ',
        html: `<b>${title}</b><br>จำนวน: <b>${qty}</b><br>ใช้ SP: <b>${spPerUnit * qty}</b><br>ยอดรวม: <b>${(pricePerUnit * qty).toFixed(2)} บาท</b>`,
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก',
        preConfirm: () => {
          return fetch('buy_reward.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
              reward_id: rewardId,
              quantity: qty,
              csrf_token: '<?= get_csrf_token() ?>'
            })
          })
          .then(res => res.json())
          .catch(() => {
            Swal.showValidationMessage('เกิดข้อผิดพลาดในการเชื่อมต่อเซิร์ฟเวอร์');
          });
        }
      }).then(result => {
        if (result.isConfirmed && result.value?.status === 'success') {
          const codes = result.value.codes || [result.value.code];
          const codeList = codes.map(c => `<li><code style="font-size:1.2rem">${c}</code></li>`).join('');
          Swal.fire({
            icon: 'success',
            title: '🎉 ซื้อสำเร็จ!',
            html: `<ul style="list-style:none;padding-left:0">${codeList}</ul>`,
            confirmButtonText: 'คัดลอกโค้ด',
            didOpen: () => {
              navigator.clipboard.writeText(codes.join(', '));
            },
          });
        } else if (result.value?.message) {
          Swal.fire({ icon: 'error', title: 'ผิดพลาด', text: result.value.message });
        }
      });
    });
}
</script>

</body>
</html>
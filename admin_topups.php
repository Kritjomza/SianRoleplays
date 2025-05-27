<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';

// Pagination
$limit = 10;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Search & Filter
$search = trim($_GET['search'] ?? '');
$statusFilter = $_GET['status'] ?? '';
$where = [];
$params = [];

if ($search !== '') {
  $where[] = "(users.username LIKE :search OR users.discord_tag LIKE :search)";
  $params[':search'] = "%$search%";
}
if (in_array($statusFilter, ['pending', 'approved', 'rejected'])) {
  $where[] = "topups.status = :status";
  $params[':status'] = $statusFilter;
}

$where_sql = count($where) ? "WHERE " . implode(" AND ", $where) : '';

// Count total
$countStmt = $pdo->prepare("SELECT COUNT(*) FROM topups JOIN users ON topups.user_id = users.id $where_sql");
$countStmt->execute($params);
$totalTopups = $countStmt->fetchColumn();
$totalPages = ceil($totalTopups / $limit);

// Fetch topups
$stmt = $pdo->prepare("SELECT topups.*, users.username, users.discord_tag FROM topups 
  JOIN users ON topups.user_id = users.id 
  $where_sql 
  ORDER BY topups.created_at DESC LIMIT :limit OFFSET :offset");
foreach ($params as $key => $val) {
  $stmt->bindValue($key, $val, PDO::PARAM_STR);
}
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$topups = $stmt->fetchAll();
?>
<?php include 'csrf.php'; ?>
<input type="hidden" name="csrf_token" value="<?= get_csrf_token() ?>">


<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>จัดการรายการเติมเงิน - SIAN ROLEPLAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style> body { font-family: 'Prompt', sans-serif; } </style>
</head>
<body class="bg-[#0f1524] text-white min-h-screen flex">
  <?php include 'navbar_admin.php'; ?>

  <main class="flex-1 p-6">
    <h1 class="text-2xl font-bold text-orange-400 mb-6">รายการเติมเงิน</h1>

    <!-- Search & Filter -->
    <form method="get" class="mb-4 flex flex-wrap gap-3 items-center">
      <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="ค้นหา Username หรือ Discord tag..."
             class="px-4 py-2 w-full sm:w-1/3 rounded bg-white/10 text-white placeholder-white/60">
      <select name="status" class="px-4 py-2 bg-white/10 text-black rounded">
        <option value="">-- สถานะทั้งหมด --</option>
        <option value="pending" <?= $statusFilter === 'pending' ? 'selected' : '' ?>>รอตรวจสอบ</option>
        <option value="approved" <?= $statusFilter === 'approved' ? 'selected' : '' ?>>อนุมัติแล้ว</option>
        <option value="rejected" <?= $statusFilter === 'rejected' ? 'selected' : '' ?>>ถูกปฏิเสธ</option>
      </select>
      <button type="submit" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded">ค้นหา</button>
    </form>

    <div class="overflow-x-auto rounded-xl shadow border border-white/10">
      <table class="min-w-full table-auto">
        <thead class="bg-orange-500/20 text-left text-sm">
          <tr>
            <th class="p-3">#</th>
            <th class="p-3">Username</th>
            <th class="p-3">ยอดเงิน</th>
            <th class="p-3">สถานะ</th>
            <th class="p-3">วันที่</th>
            <th class="p-3">สลิป</th>
            <th class="p-3 text-center">การจัดการ</th>
          </tr>
        </thead>
        <tbody class="text-sm divide-y divide-white/10">
          <?php foreach ($topups as $topup): ?>
            <tr class="hover:bg-white/5">
              <td class="p-3">#<?= $topup['id'] ?></td>
              <td class="p-3"><?= htmlspecialchars($topup['username']) ?> <span class="text-xs text-white/60">(<?= htmlspecialchars($topup['discord_tag']) ?>)</span></td>
              <td class="p-3"><?= number_format($topup['amount'], 2) ?></td>
              <td class="p-3">
                <?php if ($topup['status'] == 'approved'): ?>
                  <span class="text-green-400">อนุมัติแล้ว</span>
                <?php elseif ($topup['status'] == 'rejected'): ?>
                  <span class="text-red-400">ถูกปฏิเสธ</span>
                <?php else: ?>
                  <span class="text-yellow-400">รอตรวจสอบ</span>
                <?php endif; ?>
              </td>
              <td class="p-3 text-sm"><?= date('d/m/Y H:i', strtotime($topup['created_at'])) ?></td>
              <td class="p-3">
                <?php if ($topup['slip_image']): ?>
                  <button onclick="viewSlip('slips/<?= rawurlencode($topup['slip_image']) ?>')" class="underline text-blue-400 hover:text-blue-300">
                    ดูสลิป
                  </button>
                <?php else: ?>
                  -
                <?php endif; ?>
              </td>
              <td class="p-3 text-center">
                <?php if ($topup['status'] === 'pending'): ?>
                  <button onclick="handleTopup(<?= $topup['id'] ?>, 'approve')" class="bg-green-500 hover:bg-green-600 px-3 py-1 rounded text-sm mr-2">อนุมัติ</button>
                  <button onclick="handleTopup(<?= $topup['id'] ?>, 'reject')" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">ปฏิเสธ</button>
                <?php else: ?>
                  -
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center gap-2">
      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i ?>&search=<?= urlencode($search) ?>&status=<?= urlencode($statusFilter) ?>"
           class="px-4 py-2 rounded-lg <?= $page == $i ? 'bg-orange-500' : 'bg-white/10 hover:bg-white/20' ?>">
          <?= $i ?>
        </a>
      <?php endfor; ?>
    </div>
  </main>

  <script>
    function handleTopup(id, action) {
      const confirmText = action === 'approve'
        ? 'คุณแน่ใจหรือไม่ว่าจะอนุมัติรายการนี้?'
        : 'คุณต้องการปฏิเสธรายการนี้ใช่หรือไม่?';
      const successText = action === 'approve'
        ? 'อนุมัติเรียบร้อยแล้ว'
        : 'ปฏิเสธเรียบร้อยแล้ว';

      Swal.fire({
        title: confirmText,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ยืนยัน',
        cancelButtonText: 'ยกเลิก'
      }).then((result) => {
        if (result.isConfirmed) {
          const csrfToken = '<?= get_csrf_token() ?>';

          fetch('process_topup.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
              id: topupId,
              action: 'approve',
              csrf_token: csrfToken
            })
          })
            .then(res => res.json())
            .then(data => {
              if (data.status === 'success') {
                Swal.fire('สำเร็จ', successText, 'success').then(() => location.reload());
              } else {
                Swal.fire('ผิดพลาด', data.message, 'error');
              }
            })
            .catch(() => {
              Swal.fire('ผิดพลาด', 'ไม่สามารถติดต่อเซิร์ฟเวอร์ได้', 'error');
            });
        }
      });
    }

    function viewSlip(imageUrl) {
      Swal.fire({
        title: '📄 สลิปเติมเงิน',
        html: `<img src="${imageUrl}" alt="slip" class="max-w-full rounded shadow mt-2">`,
        background: '#1a1a1a',
        color: '#fff',
        confirmButtonText: 'ปิด',
        confirmButtonColor: '#fd7e14',
        customClass: {
          popup: 'rounded-xl border border-orange-500/30'
        }
      });
    }

  </script>
</body>
</html>
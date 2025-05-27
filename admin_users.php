<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';

// Pagination
$limit = 10;
$page = max(1, intval($_GET['page'] ?? 1));
$offset = ($page - 1) * $limit;

// Search
$search = trim($_GET['search'] ?? '');
$searchWords = array_filter(explode(' ', $search));
$search_sql_parts = [];
$search_params = [];

foreach ($searchWords as $index => $word) {
    $param = ":search$index";
    $search_sql_parts[] = "(username LIKE $param OR discord_tag LIKE $param)";
    $search_params[$param] = "%$word%";
}

$search_sql = count($search_sql_parts) ? "WHERE " . implode(" AND ", $search_sql_parts) : '';

// Count users
$totalStmt = $pdo->prepare("SELECT COUNT(*) FROM users $search_sql");
foreach ($search_params as $key => $value) {
    $totalStmt->bindValue($key, $value, PDO::PARAM_STR);
}
$totalStmt->execute();
$totalUsers = $totalStmt->fetchColumn();
$totalPages = ceil($totalUsers / $limit);

// Fetch users
$query = "SELECT users.id, username, discord_tag, balance FROM users 
          LEFT JOIN wallets ON users.id = wallets.user_id 
          $search_sql 
          ORDER BY users.id DESC LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($query);
foreach ($search_params as $key => $value) {
    $stmt->bindValue($key, $value, PDO::PARAM_STR);
}
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$users = $stmt->fetchAll();
?>
<?php include 'csrf.php'; ?>
<input type="hidden" name="csrf_token" value="<?= get_csrf_token() ?>">


<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>จัดการผู้ใช้งาน - SIAN ROLEPLAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style> body { font-family: 'Prompt', sans-serif; } </style>
</head>
<body class="bg-[#0f1524] text-white min-h-screen flex">
  <?php include 'navbar_admin.php'; ?>

  <main class="flex-1 p-6">
    <h1 class="text-2xl font-bold text-orange-400 mb-6">จัดการผู้ใช้งาน</h1>

    <!-- Search -->
    <form method="get" class="mb-4 flex gap-3">
      <input type="text" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="ค้นหา username หรือ Discord tag..."
             class="px-4 py-2 w-full sm:w-1/3 rounded bg-white/10 text-white placeholder-white/60">
      <button type="submit" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded">ค้นหา</button>
    </form>

    <div class="overflow-x-auto rounded-xl shadow border border-white/10">
      <table class="min-w-full table-auto">
        <thead class="bg-orange-500/20 text-left text-sm">
          <tr>
            <th class="p-3">#</th>
            <th class="p-3">Username</th>
            <th class="p-3">Discord Tag</th>
            <th class="p-3">ยอดเงิน (SP)</th>
            <th class="p-3 text-center">การจัดการ</th>
          </tr>
        </thead>
        <tbody class="text-sm divide-y divide-white/10">
          <?php foreach ($users as $user): ?>
            <tr class="hover:bg-white/5">
              <td class="p-3">#<?= $user['id'] ?></td>
              <td class="p-3"><?= htmlspecialchars($user['username']) ?></td>
              <td class="p-3"><?= htmlspecialchars($user['discord_tag']) ?></td>
              <td class="p-3"><?= number_format($user['balance'], 2) ?></td>
              <td class="p-3 text-center">
                <button 
                  class="text-yellow-400 hover:underline mr-3 edit-user-btn"
                  data-user-id="<?= $user['id'] ?>"
                  data-username="<?= htmlspecialchars($user['username'], ENT_QUOTES, 'UTF-8') ?>"
                  data-balance="<?= $user['balance'] ?>">
                  <i class="fas fa-edit"></i> แก้ไข
                </button>

                <button onclick="confirmDelete(<?= $user['id'] ?>)" class="text-red-500 hover:underline">
                  <i class="fas fa-trash"></i> ลบ
                </button>
              </td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6 flex justify-center gap-2">
      <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?= $i ?>&search=<?= urlencode($search) ?>"
           class="px-4 py-2 rounded-lg <?= $page == $i ? 'bg-orange-500' : 'bg-white/10 hover:bg-white/20' ?>">
          <?= $i ?>
        </a>
      <?php endfor; ?>
    </div>
  </main>

  <!-- Modal แก้ไข SP -->
  <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-[#1e293b] rounded-xl w-full max-w-md p-6">
      <h2 class="text-xl font-bold mb-4 text-orange-400">แก้ไขยอด SP</h2>
      <form id="editForm">
        <input type="hidden" name="user_id" id="edit_user_id">
        <div class="mb-4">
          <label for="edit_username" class="block text-sm mb-1">Username</label>
          <input type="text" id="edit_username" class="w-full px-3 py-2 rounded bg-white/10 text-white" disabled>
        </div>
        <div class="mb-4">
          <label for="edit_balance" class="block text-sm mb-1">ยอด SP ใหม่</label>
          <input type="number" step="0.01" name="balance" id="edit_balance" class="w-full px-3 py-2 rounded bg-white/10 text-white" required>
        </div>
        <div class="flex justify-end gap-3">
          <button type="button" onclick="closeEditModal()" class="px-4 py-2 bg-gray-500 rounded hover:bg-gray-600">ยกเลิก</button>
          <button type="submit" class="px-4 py-2 bg-orange-500 rounded hover:bg-orange-600">บันทึก</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    const CSRF_TOKEN = '<?= get_csrf_token() ?>';

    function openEditModal(id, username, balance) {
      document.getElementById('edit_user_id').value = id;
      document.getElementById('edit_username').value = username;
      document.getElementById('edit_balance').value = parseFloat(balance).toFixed(2);
      document.getElementById('editModal').classList.remove('hidden');
      console.log(document.getElementById('editModal').classList);

    }

    function closeEditModal() {
      document.getElementById('editModal').classList.add('hidden');
    }

    document.getElementById('editForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const userId = parseInt(document.getElementById('edit_user_id').value);
      const balance = parseFloat(document.getElementById('edit_balance').value);
      const csrfToken = '<?= get_csrf_token() ?>';

      if (isNaN(userId) || userId <= 0 || isNaN(balance) || balance < 0) {
        Swal.fire('ผิดพลาด', 'ข้อมูลไม่ถูกต้อง', 'error');
        return;
      }

      const formData = new FormData();
      formData.append('user_id', userId);
      formData.append('amount', balance);
      formData.append('type', 'set');
      formData.append('csrf_token', csrfToken);

      fetch('update_user_sp.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire('สำเร็จ', 'อัปเดตยอด SP เรียบร้อยแล้ว', 'success').then(() => location.reload());
        } else {
          Swal.fire('ผิดพลาด', data.message, 'error');
        }
      })
      .catch(() => {
        Swal.fire('ผิดพลาด', 'ไม่สามารถติดต่อเซิร์ฟเวอร์ได้', 'error');
      });
    });

    function confirmDelete(userId) {
      Swal.fire({
        title: 'คุณแน่ใจหรือไม่?',
        text: 'การลบนี้จะลบข้อมูลทั้งหมดของผู้ใช้!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ใช่, ลบเลย',
        cancelButtonText: 'ยกเลิก'
      }).then((result) => {
        if (result.isConfirmed) {
          fetch('delete_user.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
              id: userId,
              csrf_token: CSRF_TOKEN
            })
          })
          .then(res => res.json())
          .then(data => {
            if (data.status === 'success') {
              Swal.fire('ลบสำเร็จ', '', 'success').then(() => location.reload());
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

    document.querySelectorAll('.edit-user-btn').forEach(button => {
      button.addEventListener('click', () => {
        const id = parseInt(button.dataset.userId);
        const username = button.dataset.username;
        const balance = parseFloat(button.dataset.balance);

        openEditModal(id, username, balance);
      });
    });


  </script>
</body>
</html>

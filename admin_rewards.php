<?php
session_start();
require_once 'db.php';
require_once 'admin_auth.php';


$rewards = $pdo->query("SELECT * FROM rewards ORDER BY created_at DESC")->fetchAll();

// นับโค้ดคงเหลือของแต่ละรางวัล
$codeCounts = [];
$stmt = $pdo->query("SELECT reward_id, COUNT(*) as total FROM redeem_codes WHERE is_claimed = 0 GROUP BY reward_id");
foreach ($stmt as $row) {
  $codeCounts[$row['reward_id']] = $row['total'];
}
?>
<?php include 'csrf.php'; ?>
<input type="hidden" name="csrf_token" value="<?= get_csrf_token() ?>">


<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>จัดการร้านค้า - SIAN ROLEPLAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style> body { font-family: 'Prompt', sans-serif; } </style>
</head>
<body class="bg-[#0f1524] text-white min-h-screen flex">
  <?php include 'navbar_admin.php'; ?>
  <main class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-bold text-orange-400">จัดการสินค้า / รางวัล</h1>
      <button onclick="openRewardModal()" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded text-white text-sm">
        <i class="fas fa-plus mr-1"></i> เพิ่มสินค้าใหม่
      </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($rewards as $reward): ?>
        <div class="bg-[#1e293b] rounded-xl p-4 shadow-lg">
          <?php if ($reward['image']): ?>
            <img src="uploads/<?= htmlspecialchars($reward['image']) ?>" alt="reward image" class="rounded mb-3 w-full h-40 object-cover">
          <?php endif; ?>
          <h2 class="text-xl font-bold text-orange-400 mb-1"><?= htmlspecialchars($reward['title']) ?></h2>
          <p class="text-sm text-white/80 mb-2 line-clamp-2"><?= nl2br(htmlspecialchars($reward['description'])) ?></p>
          <p class="text-sm text-white mb-1">ราคา: <span class="font-bold text-green-400"><?= number_format($reward['price'], 2) ?></span> บาท</p>
          <p class="text-sm text-white mb-1">ใช้ SP: <span class="font-bold text-yellow-300"><?= $reward['total_sp'] ?></span></p>
          <p class="text-sm text-white mb-3">โค้ดคงเหลือ: <span class="font-bold text-lime-400"><?= $codeCounts[$reward['id']] ?? 0 ?></span></p>
          <div class="flex gap-2 flex-wrap">
            <button onclick='editReward(<?= json_encode($reward, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) ?>)' class="flex-1 text-center px-3 py-1 bg-yellow-500 hover:bg-yellow-600 rounded text-sm">แก้ไข</button>
            <a href="add_codes.php?id=<?= $reward['id'] ?>" class="flex-1 text-center px-3 py-1 bg-blue-500 hover:bg-blue-600 rounded text-sm">เพิ่มโค้ด</a>
            <button onclick="deleteReward(<?= $reward['id'] ?>)" class="flex-1 px-3 py-1 bg-red-500 hover:bg-red-600 rounded text-sm">ลบ</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>

  <!-- Modal: เพิ่ม/แก้ไขสินค้า -->
  <div id="rewardModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-[#1e293b] rounded-xl w-full max-w-lg p-6">
      <h2 id="modalTitle" class="text-xl font-bold text-orange-400 mb-4">เพิ่มสินค้า</h2>
      <form id="rewardForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="reward_id">
        <div class="mb-3">
          <label class="block mb-1 text-sm">ชื่อสินค้า</label>
          <input type="text" name="title" id="title" class="w-full px-3 py-2 bg-white/10 rounded text-white" required>
        </div>
        <div class="mb-3">
          <label class="block mb-1 text-sm">รายละเอียด</label>
          <textarea name="description" id="description" class="w-full px-3 py-2 bg-white/10 rounded text-white" rows="3"></textarea>
        </div>
        <div class="mb-3 flex gap-4">
          <div class="flex-1">
            <label class="block mb-1 text-sm">ราคา (บาท)</label>
            <input type="number" step="0.01" name="price" id="price" class="w-full px-3 py-2 bg-white/10 rounded text-white" required>
          </div>
          <div class="flex-1">
            <label class="block mb-1 text-sm">ใช้ SP</label>
            <input type="number" name="total_sp" id="total_sp" class="w-full px-3 py-2 bg-white/10 rounded text-white" required>
          </div>
        </div>
        <div class="mb-4">
          <label class="block mb-1 text-sm">รูปภาพ</label>
          <input type="file" name="image" id="image" class="text-white mb-2">
          <div id="imagePreviewContainer" class="hidden">
            <img id="imagePreview" src="#" alt="Preview" class="w-full h-40 object-cover rounded border border-white/20">
          </div>
        </div>
        <div class="flex justify-end gap-2">
          <button type="button" onclick="closeRewardModal()" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 rounded">ยกเลิก</button>
          <button type="submit" class="px-4 py-2 bg-orange-500 hover:bg-orange-600 rounded">บันทึก</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Modal: เพิ่มโค้ด -->
  <div id="codeModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-[#1e293b] rounded-xl w-full max-w-md p-6">
      <h2 class="text-xl font-bold text-orange-400 mb-4">เพิ่มโค้ดสินค้า</h2>
      <form id="codeForm">
        <input type="hidden" name="reward_id" id="code_reward_id">
        <div class="mb-4">
          <label class="block mb-1 text-sm">กรอกโค้ดหลายรายการ (บรรทัดละ 1 โค้ด)</label>
          <textarea name="codes" id="codes" rows="6" class="w-full px-3 py-2 bg-white/10 rounded text-white" placeholder="CODE123\nCODE124\nCODE125"></textarea>
        </div>
        <div class="flex justify-end gap-2">
          <button type="button" onclick="closeCodeModal()" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 rounded">ยกเลิก</button>
          <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded">เพิ่มโค้ด</button>
        </div>
      </form>
    </div>
  </div>

  <script>
      document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = function(e) {
            const img = document.getElementById('imagePreview');
            img.src = e.target.result;
            document.getElementById('imagePreviewContainer').classList.remove('hidden');
          };
          reader.readAsDataURL(file);
        }
      });

      function editReward(data) {
        document.getElementById('modalTitle').innerText = 'แก้ไขสินค้า';
        document.getElementById('reward_id').value = data.id;
        document.getElementById('title').value = data.title;
        document.getElementById('description').value = data.description;
        document.getElementById('price').value = data.price;
        document.getElementById('total_sp').value = data.total_sp;
        if (data.image) {
          document.getElementById('imagePreview').src = 'uploads/' + data.image;
          document.getElementById('imagePreviewContainer').classList.remove('hidden');
        } else {
          document.getElementById('imagePreviewContainer').classList.add('hidden');
        }
        document.getElementById('rewardModal').classList.remove('hidden');
      }
      
    function openRewardModal() {
      document.getElementById('rewardForm').reset();
      document.getElementById('modalTitle').innerText = 'เพิ่มสินค้า';
      document.getElementById('reward_id').value = '';
      document.getElementById('rewardModal').classList.remove('hidden');
    }

    function closeRewardModal() {
      document.getElementById('rewardModal').classList.add('hidden');
    }

    function editReward(data) {
      document.getElementById('modalTitle').innerText = 'แก้ไขสินค้า';
      document.getElementById('reward_id').value = data.id;
      document.getElementById('title').value = data.title;
      document.getElementById('description').value = data.description;
      document.getElementById('price').value = data.price;
      document.getElementById('total_sp').value = data.total_sp;
      document.getElementById('rewardModal').classList.remove('hidden');
    }

    document.getElementById('rewardForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      fetch('save_reward.php', {
        method: 'POST',
        body: formData
      }).then(res => res.json()).then(data => {
        if (data.status === 'success') {
          Swal.fire('สำเร็จ', data.message, 'success').then(() => location.reload());
        } else {
          Swal.fire('ผิดพลาด', data.message, 'error');
        }
      });
    });

    function openCodeModal(rewardId) {
      document.getElementById('code_reward_id').value = rewardId;
      document.getElementById('codes').value = '';
      document.getElementById('codeModal').classList.remove('hidden');
    }

    function closeCodeModal() {
      document.getElementById('codeModal').classList.add('hidden');
    }

    document.getElementById('codeForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      fetch('add_codes.php', {
        method: 'POST',
        body: formData
      }).then(res => res.json()).then(data => {
        if (data.status === 'success') {
          Swal.fire('เพิ่มโค้ดแล้ว', '', 'success').then(() => location.reload());
        } else {
          Swal.fire('ผิดพลาด', data.message, 'error');
        }
      });
    });

    function deleteReward(id) {
      Swal.fire({
        title: 'ลบรางวัลนี้?',
        text: 'หากลบแล้วจะไม่สามารถย้อนกลับได้',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'ลบ',
        cancelButtonText: 'ยกเลิก'
      }).then((result) => {
        if (result.isConfirmed) {
          fetch(`delete_reward.php?id=${id}`)
            .then(res => res.json())
            .then(data => {
              if (data.status === 'success') {
                Swal.fire('ลบแล้ว', '', 'success').then(() => location.reload());
              } else {
                Swal.fire('ผิดพลาด', data.message, 'error');
              }
            });
        }
      });
    }
  </script>
</body>
</html>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
require_once 'csrf.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เติมเงิน - SIAN ROLEPLAY</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #1a1a1a; }
    ::-webkit-scrollbar-thumb { background: #fd7e14; border-radius: 8px; }
    ::-webkit-scrollbar-thumb:hover { background: #ffa94d; }
  </style>
</head>
<body class="bg-[#0f0f0f] text-white min-h-screen flex flex-col items-center px-4 font-sans">

  <?php include 'header.php'; ?>

  <main class="pt-24 mt-24 mb-24 w-full max-w-xl bg-[#1c1c1e]/90 backdrop-blur-md rounded-2xl shadow-2xl border border-[#fd7e14]/30 p-6" data-aos="zoom-in">
    <h2 class="text-xl sm:text-2xl font-bold text-[#fd7e14] mb-4 text-center">เติมเงินผ่าน QR CODE / สลิป</h2>
    <div class="rounded-lg overflow-hidden mb-6 aspect-video shadow">
      <iframe class="w-full h-full" src="https://www.youtube.com/embed/dHUq9xJcaZs?si=VnGL2bXVcNbIY51V" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mb-6 text-center">
      <h3 class="text-lg font-semibold text-white mb-2">สแกนเพื่อชำระเงิน</h3>
      <img src="http://localhost/SianRoleplay/imgsforqr/1.png" alt="QR Code" class="mx-auto w-60 h-60 rounded-lg shadow-lg border border-orange-400">
      <p class="text-sm mt-2 text-white/80">ชื่อบัญชี: นายสมชาย ตัวอย่าง<br>เบอร์พร้อมเพย์: 080-123-4567</p>
    </div>

    <div class="p-3 bg-yellow-900/50 border border-yellow-500/40 text-yellow-300 text-sm rounded mb-4">
      ⚠️ หลังจากชำระเงินแล้ว กรุณาอัปโหลดสลิปให้ถูกต้อง และใส่จำนวนเงินให้ตรง เพื่อให้ระบบตรวจสอบได้รวดเร็ว
    </div>

    <form id="topupForm" enctype="multipart/form-data" class="space-y-5">
      <input type="hidden" name="csrf_token" value="<?= get_csrf_token() ?>">

      <div>
        <label class="block text-sm mb-1">📎 อัปโหลดสลิป (jpg, png)</label>
        <input type="file" name="slip" id="slip" accept=".jpg,.jpeg,.png" required
               class="w-full file:bg-[#fd7e14] file:text-white file:border-none file:px-4 file:py-1 file:rounded-lg file:cursor-pointer
                      px-4 py-2 rounded-md border border-gray-700 bg-[#111] text-white focus:ring-2 focus:ring-[#fd7e14]/70" />
      </div>
      <div>
        <label class="block text-sm mb-1">💰 จำนวนเงิน (บาท)</label>
        <input type="number" name="amount" step="0.01" min="1" required
              class="w-full px-4 py-2 rounded-md border border-gray-700 bg-[#111] text-white focus:ring-2 focus:ring-[#fd7e14]/70" />
      </div>
      <div class="flex items-center gap-2">
        <input type="checkbox" id="accept" required class="accent-[#fd7e14] w-4 h-4" />
        <label for="accept" class="text-sm text-white/80">ยอมรับ <a href="#" class="text-[#fd7e14] underline">ข้อกำหนดในการให้บริการ</a></label>
      </div>
      <button type="submit" id="submitBtn" class="w-full bg-[#fd7e14] hover:bg-orange-600 transition-all duration-300 rounded-xl py-2 text-lg font-semibold shadow hover:scale-105">
        ยืนยัน
      </button>
    </form>
  </main>

  <?php include 'footer.php'; ?>

  <script>
    AOS.init();
    const form = document.getElementById('topupForm');
    const submitBtn = document.getElementById('submitBtn');

    form.addEventListener('submit', async function (e) {
      e.preventDefault();

      if (!document.getElementById('accept').checked) {
        Swal.fire({ icon: 'warning', title: 'กรุณายอมรับเงื่อนไข' });
        return;
      }

      const formData = new FormData(form);
      formData.append('csrf_token', '<?= get_csrf_token() ?>');

      submitBtn.disabled = true;

      Swal.fire({
        title: 'กำลังตรวจสอบสลิป...',
        background: '#1a1a1a',
        color: '#fff',
        allowOutsideClick: false,
        didOpen: () => Swal.showLoading(),
        customClass: { popup: 'rounded-xl border border-orange-500/30' }
      });

      try {
        const response = await fetch('verify_slip.php', {
          method: 'POST',
          body: formData
        });

        const result = await response.json();

        if (result.status === 'approved') {
          Swal.fire({
            icon: 'success',
            title: 'เติมเงินสำเร็จ! ✅',
            html: `คุณได้รับ <strong class="text-[#fd7e14]">${parseFloat(result.amount).toFixed(2)}</strong> บาท`,
            background: '#1a1a1a',
            color: '#fff',
            confirmButtonColor: '#fd7e14',
            customClass: { popup: 'rounded-xl border border-green-500/30' }
          });
          form.reset();
        } else if (result.status === 'rejected') {
          Swal.fire({
            icon: 'error',
            title: 'ไม่ผ่านการตรวจสอบสลิป',
            html: `<b>สาเหตุ:</b> ${result.reason || 'ไม่ทราบสาเหตุ'}`,
            background: '#1a1a1a',
            color: '#fff',
            confirmButtonColor: '#fd7e14',
            customClass: { popup: 'rounded-xl border border-red-500/30' }
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'ไม่สามารถตรวจสอบสลิปได้',
            text: result.message || 'กรุณาตรวจสอบสลิปของคุณอีกครั้ง',
            background: '#1a1a1a',
            color: '#fff',
            confirmButtonColor: '#fd7e14',
            customClass: { popup: 'rounded-xl border border-red-500/30' }
          });
        }
      } catch (err) {
        Swal.fire({
          icon: 'error',
          title: 'เกิดข้อผิดพลาด',
          text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์',
          background: '#1a1a1a',
          color: '#fff',
          confirmButtonColor: '#fd7e14'
        });
      } finally {
        submitBtn.disabled = false;
      }
    });
  </script>

</body>
</html>

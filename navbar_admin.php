<?php

$timeout_duration = 900; // 900 วินาที = 15 นาที

if (isset($_SESSION['admin_last_activity']) && (time() - $_SESSION['admin_last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header("Location: admin_login.php?timeout=1");
    exit();
}
$_SESSION['admin_last_activity'] = time(); // รีเซ็ตเวลาเมื่อมีการใช้งาน

// navbar_admin.php
?>
<aside class="bg-[#0e0f1c] text-white w-64 min-h-screen flex flex-col shadow-lg">
  <div class="p-6 border-b border-white/10">
    <h2 class="text-2xl font-bold text-orange-400">SIAN Admin</h2>
  </div>

  <nav class="flex-1 p-4 space-y-2">
    <a href="admin_dashboard.php" class="block px-4 py-3 rounded-lg hover:bg-orange-500/20 transition-all <?= basename($_SERVER['PHP_SELF']) == 'admin_dashboard.php' ? 'bg-orange-500/30' : '' ?>">
      <i class="fas fa-chart-line mr-2"></i> Dashboard
    </a>
    <a href="admin_users.php" class="block px-4 py-3 rounded-lg hover:bg-orange-500/20 transition-all <?= basename($_SERVER['PHP_SELF']) == 'admin_users.php' ? 'bg-orange-500/30' : '' ?>">
      <i class="fas fa-users mr-2"></i> Users
    </a>
    <a href="admin_topups.php" class="block px-4 py-3 rounded-lg hover:bg-orange-500/20 transition-all <?= basename($_SERVER['PHP_SELF']) == 'admin_topups.php' ? 'bg-orange-500/30' : '' ?>">
      <i class="fas fa-wallet mr-2"></i> Topups
    </a>
    <a href="admin_rewards.php" class="block px-4 py-3 rounded-lg hover:bg-orange-500/20 transition-all <?= basename($_SERVER['PHP_SELF']) == 'admin_rewards.php' ? 'bg-orange-500/30' : '' ?>">
      <i class="fas fa-gift mr-2"></i> Shop
    </a>
  </nav>

  <div class="p-4 border-t border-white/10">
    <a href="logout_admin.php" class="block w-full text-center px-4 py-2 bg-red-500 hover:bg-red-600 rounded-lg font-semibold transition">
      <i class="fas fa-sign-out-alt mr-2"></i> Logout
    </a>
  </div>
</aside>

<!-- TailwindCSS & FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
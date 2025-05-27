<?php
  $discordUsername = $_SESSION['discord_username'] ?? null;
  $discordAvatar = $_SESSION['discord_avatar'] ?? null;
  $discordId = $_SESSION['discord_id'] ?? null;
  $avatarUrl = $discordAvatar ? "https://cdn.discordapp.com/avatars/$discordId/$discordAvatar.png" : null;
?>

<nav class="bg-dark-light/80 backdrop-blur-md shadow-lg fixed w-full z-10">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center py-4">
      <!-- Logo -->
      <a href="index.php" class="text-2xl font-bold flex items-center gap-1" data-server-name data-split>
        <span class="text-[#fd7e14]">SIAN</span> <span class="text-white">ROLEPLAY</span>
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6">
        <a href="index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a>
        <a href="about.php" class="text-white hover:text-orange-500 transition duration-300">About</a>
        <a href="shop.php" class="text-orange-500 border-b-2 border-orange-500 pb-1 transition duration-300">Shop</a>

        <div class="relative group">
          <button class="text-white hover:text-orange-500 transition duration-300 flex items-center gap-1">
            Legal
            <i class="fas fa-chevron-down text-xs transition-transform duration-300 group-hover:rotate-180"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
            <a href="terms.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
              <i class="fas fa-file-contract text-xs"></i> Terms of Service
            </a>
            <a href="privacy.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
              <i class="fas fa-shield-alt text-xs"></i> Privacy Policy
            </a>
            <a href="rules.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition duration-300 flex items-center gap-2">
              <i class="fas fa-gavel text-xs"></i> Rules
            </a>
          </div>
        </div>

        <!-- Avatar / Login -->
        <?php if (!$discordUsername): ?>
          <a href="discord_login.php" class="bg-white text-black font-semibold px-4 py-2 rounded-full flex items-center gap-2 hover:scale-105 transition">
            <i class="fab fa-discord text-lg"></i> เข้าสู่ระบบ
          </a>
        <?php else: ?>
          <div class="relative group">
            <button class="flex items-center gap-2 focus:outline-none">
              <img src="<?= $avatarUrl ?>" alt="avatar" class="w-8 h-8 rounded-full border border-primary shadow">
              <span class="text-white text-sm font-medium"><?= htmlspecialchars($discordUsername) ?></span>
              <i class="fas fa-chevron-down text-xs text-white"></i>
            </button>
            <div class="absolute right-0 mt-2 w-44 bg-[#1a1d24]/95 backdrop-blur-md rounded-lg shadow-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all transform translate-y-2 group-hover:translate-y-0 z-50">
              <a href="profile.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition">
                <i class="fas fa-user text-xs mr-2"></i> โปรไฟล์
              </a>
              <a href="topup.php" class="block px-4 py-2 text-white hover:text-orange-500 hover:bg-dark/50 transition">
                <i class="fas fa-wallet text-xs mr-2"></i> เติมเงิน
              </a>
              <a href="logout.php" class="block px-4 py-2 text-red-500 hover:bg-dark/50 transition">
                <i class="fas fa-sign-out-alt text-xs mr-2"></i> ออกจากระบบ
              </a>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <!-- Mobile Menu Button -->
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-white hover:text-orange-500 focus:outline-none p-2">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden fixed inset-x-0 top-[73px] bg-dark-light/95 backdrop-blur-md transition-all duration-300 ease-in-out transform translate-x-full z-50">
    <div class="px-4 py-4 space-y-2">
      <a href="index.php" class="block px-4 py-3 text-white hover:text-orange-500">Home</a>
      <a href="about.php" class="block px-4 py-3 text-white hover:text-orange-500">About</a>
      <a href="shop.php" class="block px-4 py-3 text-white hover:text-orange-500">Shop</a>
      <a href="server.php" class="block px-4 py-3 text-white hover:text-orange-500">Server</a>

      <!-- Legal in mobile -->
      <div class="mobile-dropdown legal-dropdown">
        <button class="w-full text-left px-4 py-3 text-white hover:text-orange-500 hover:bg-dark/50 rounded-lg transition duration-300 flex items-center justify-between">
          <div class="flex items-center">
            <i class="fas fa-gavel mr-2"></i> Legal
          </div>
          <i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
        </button>
        <div class="hidden px-4 py-2 ml-4 space-y-2 border-l-2 border-dark/50">
          <a href="terms.php" class="block px-4 py-2 text-white hover:text-orange-500 transition duration-300">
            <i class="fas fa-file-contract mr-2 text-xs"></i> Terms of Service
          </a>
          <a href="privacy.php" class="block px-4 py-2 text-white hover:text-orange-500 transition duration-300">
            <i class="fas fa-user-shield mr-2 text-xs"></i> Privacy Policy
          </a>
          <a href="rules.php" class="block px-4 py-2 text-white hover:text-orange-500 transition duration-300">
            <i class="fas fa-gavel mr-2 text-xs"></i> Rules
          </a>
        </div>
      </div>

      <!-- Avatar / Login in mobile -->
      <?php if (!$discordUsername): ?>
        <a href="discord_login.php" class="block mt-4 bg-white text-black font-semibold py-2 px-4 rounded-full flex items-center justify-center gap-2 hover:scale-105 transition">
          <i class="fab fa-discord text-lg"></i> เข้าสู่ระบบ
        </a>
      <?php else: ?>
        <div class="text-center mt-6 border-t border-white/10 pt-4">
          <img src="<?= $avatarUrl ?>" alt="avatar" class="w-14 h-14 rounded-full mx-auto border border-primary shadow mb-2">
          <div class="text-white font-semibold text-sm"><?= htmlspecialchars($discordUsername) ?></div>
          <div class="flex justify-center gap-4 mt-2">
            <a href="profile.php" class="text-white hover:text-orange-500 text-sm">โปรไฟล์</a>
            <a href="topup.php" class="text-white hover:text-orange-500 text-sm">เติมเงิน</a>
            <a href="logout.php" class="text-red-500 hover:text-red-400 text-sm">Logout</a>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</nav>

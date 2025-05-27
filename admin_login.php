<?php
session_start();
require 'db.php';

$error = null;

if (isset($_GET['timeout'])) {
    echo "<p class='text-red-500'>Session หมดอายุ กรุณาเข้าสู่ระบบอีกครั้ง</p>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
  $stmt->execute([$username]);
  $admin = $stmt->fetch();

  if ($admin && password_verify($password, $admin['password'])) {
    $_SESSION['admin_logged_in'] = true;
    $_SESSION['username'] = $admin['username'];
    $_SESSION['role'] = $admin['role'];
    header('Location: admin_dashboard.php');
    exit();
  } else {
    $error = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
  }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>เข้าสู่ระบบผู้ดูแลระบบ</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-dark text-white font-sans min-h-screen flex items-center justify-center">

<div class="w-full max-w-sm bg-dark-light p-8 rounded-xl shadow-lg border-glow animate-fadeIn">
  <h1 class="text-2xl font-bold text-primary text-center mb-6">Admin Login</h1>

  <?php if ($error): ?>
    <div class="bg-red-500 text-white px-4 py-2 rounded mb-4 text-center"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>

  <form method="POST" class="space-y-4">
    <div>
      <label for="username" class="block text-sm mb-1">ชื่อผู้ใช้</label>
      <input type="text" name="username" id="username" required
             class="w-full bg-dark border border-primary/40 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>

    <div>
      <label for="password" class="block text-sm mb-1">รหัสผ่าน</label>
      <input type="password" name="password" id="password" required
             class="w-full bg-dark border border-primary/40 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
    </div>

    <div class="text-center">
      <button type="submit"
              class="bg-primary hover:bg-orange-500 text-white px-6 py-2 rounded-full font-bold transition-all duration-200 shadow-lg hover:scale-105">
        เข้าสู่ระบบ
      </button>
    </div>
  </form>
</div>

</body>
</html>

<?php
// session_start();

// ถ้ายังไม่ได้ login
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: admin_login.php');
    exit();
}

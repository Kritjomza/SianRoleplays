<?php
session_start();
session_unset();
session_destroy();
header("Location: admin_login.php"); // หรือเปลี่ยนเป็น shop.php ได้ตามต้องการ
exit();
?>

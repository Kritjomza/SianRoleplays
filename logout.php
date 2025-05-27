<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // หรือเปลี่ยนเป็น shop.php ได้ตามต้องการ
exit();
?>

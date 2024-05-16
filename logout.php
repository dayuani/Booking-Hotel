<?php
session_start();
session_destroy(); //mengakhiri/menghapus semua sesi!
header('location:login.php');
?>
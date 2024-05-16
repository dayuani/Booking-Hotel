<?php
session_start();
if($_SESSION['login']!='aktif') {
    header('location: login.php');
}
?>
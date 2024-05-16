<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];
$data = mysqli_num_rows(mysqli_query($connect, "select email from user where email ='$email' and password = '$password'"));
if($data > 0 ) {
    $_SESSION['email'] = $email;
    $_SESSION['login'] = 'aktif';
    header('location: admin.php');
}else {
    header('location: login.php?eror=1');
}
?>
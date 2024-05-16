<?php
// load file koneksi.php
include "koneksi.php";

$id_reservasi = $_GET['id_reservasi'];

    $sql = mysqli_query($connect, "delete from reservasi where id='$id_reservasi'"); 
    if($sql){
        header("location: admin-reservasi.php"); //menuju data-berita.php setelah proses berhasil
    }else{
        echo "Terjadi kesalahan dalam menghapus data ke database.";
    }
?>
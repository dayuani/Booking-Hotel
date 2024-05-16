<?php
// load file koneksi.php
include "koneksi.php";

//Ambil data yang dikirim dari form
$nama_pemesan = $_POST['nama_pemesan'];
$nama_tamu = $_POST['nama_tamu'];
$email = $_POST['email'];
$hp = $_POST['hp'];

$tgl_checkin = $_POST['tgl_checkin'];
$tgl_checkout = $_POST['tgl_checkout'];
$status = $_POST['status'];
$jumlah = $_POST['jumlah'];

//Proses simpan ke database
$query = "INSERT INTO reservasi(nama_pemesan, nama_tamu, email, hp,  tgl_checkin, tgl_checkout, status, jumlah)
            VALUES('$nama_pemesan', '$nama_tamu', '$email', '$hp',  '$tgl_checkin', '$tgl_checkout', '$status', '$jumlah')";
$sql = mysqli_query($connect, $query);

if($sql){
    header("location: admin-reservasi.php");
}else{
    echo "terjadi kesalahan dalam menyimpan data ke database.";
}
?>
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_reservasi = $_POST['id_reservasi'];
$status = $_POST['status'];

	$query ="UPDATE reservasi SET status='$status' where id ='$id_reservasi'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-reservasi.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>

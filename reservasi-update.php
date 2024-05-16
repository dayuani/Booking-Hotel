<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_reservasi = $_POST['id_reservasi'];
$nama_pemesan = $_POST['nama_pemesan'];
$nama_tamu = $_POST['nama_tamu'];
$email = $_POST['email'];
$hp = $_POST['hp'];
$kamar_id = $_POST['kamar_id'];
$tgl_checkin = $_POST['tgl_checkin'];
$tgl_checkout = $_POST['tgl_checkout'];
$status = $_POST['status'];
$jumlah = $_POST['jumlah'];

	$query ="UPDATE kamar SET tipe='$tipe', image='$image' where id ='$id_kamar'";

	$query ="UPDATE kamar SET tipe='$tipe' where id ='$id_kamar'";

	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-kamar.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>

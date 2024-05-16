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

	$query ="UPDATE reservasi SET nama_pemesan='$nama_pemesan', nama_tamu='$nama_tamu', email='$email', hp='$hp',
									kamar_id='$kamar_id', tgl_checkin='$tgl_checkin', tgl_checkout='$tgl_checkout', 
									status='$status',jumlah='$jumlah' where id ='$id_reservasi'";

	$query ="UPDATE reservasi SET nama_pemesan='$nama_pemesan' where id ='$id_reservasi'";

	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-reservasi.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>

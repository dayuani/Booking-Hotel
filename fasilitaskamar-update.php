<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kamar_id = $_POST['kamar_id'];
$nama = $_POST['nama'];


	$query ="UPDATE fasilitas_kamar SET ='$nama' where id ='$kamar_id'";
 {
	$query ="UPDATE kamar SET nama='$nama' where id ='$kamar_id'";
}
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-kamar.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>

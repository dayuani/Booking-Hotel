<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form

$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$image = 'no_cover.jpg';


if($_FILES['image']['name'] !== ''){
	$image = strtolower($_FILES['image']['name']);
	$file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp, 'assets/images/'.$image);
}	
	// Proses simpan ke Database
	$query = "INSERT INTO kamar(tipe,jumlah,image) 
			 VALUES('$tipe','$jumlah' ,'$image')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-kamar.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>
<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$kamar_id = $_POST['kamar_id'];
$nama = $_POST['nama'];

	
	// Proses simpan ke Database
	$query = "INSERT INTO fasilitas_kamar(kamar_id,nama) 
			 VALUES('$kamar_id','$nama')";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-fasilitaskamar.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
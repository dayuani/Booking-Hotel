<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$id_fasilitas_hotel = $_POST['id_fasilitas_hotel'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$image = 'no_cover.jpg';


if($_FILES['image']['name'] !== ''){
	$image = strtolower($_FILES['image']['name']);
	$file_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp, 'assets/images/'.$image);
	$query ="UPDATE fasilitas_hotel SET nama='$nama', keterangan='$keterangan', image='$image' where id ='$id_fasilitas_hotel'";
}	else {
	$query ="UPDATE fasilitas_hotel SET nama='$nama' where id ='$id_fasilitas_hotel'";
}
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ 
		header("location: admin-fasilitas.php"); // menuju index.php setelah proses berhasil
	}else{
		echo "Terjadi kesalahan dalam menyimpan data ke database.";
	}
?>

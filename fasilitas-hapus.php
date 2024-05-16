<?php
    include "koneksi.php";

    $id_fasilitas_hotel=$_GET['id_fasilitas_hotel'];
    $image=mysqli_query($connect, "select image from fasilitas_hotel where id='$id_fasilitas_hotel'");
    $image=mysqli_fetch_array($image);

    if($image['image'] !== 'no_cover.jpg'){
        unlink('assets/images/'.$image['image']);
    }
        $sql=mysqli_query($connect, "delete from fasilitas_hotel where id='$id_fasilitas_hotel'");
        if($sql){
            header("location: admin-fasilitas.php");
        }else{
            echo "Terjadi kesalahan dalam menghapus data di database.";
        }
?>
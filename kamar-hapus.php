<?php
    include "koneksi.php";

    $id_kamar=$_GET['id_kamar'];
    $image=mysqli_query($connect, "select image from kamar where id='$id_kamar'");
    $image=mysqli_fetch_array($image);

    if($image['image'] !== 'no_cover.jpg'){
        unlink('assets/images/'.$image['image']);
    }
        $sql=mysqli_query($connect, "delete from kamar where id='$id_kamar'");
        if($sql){
            header("location: admin-kamar.php");
        }else{
            echo "Terjadi kesalahan dalam menghapus data di database.";
        }
?>
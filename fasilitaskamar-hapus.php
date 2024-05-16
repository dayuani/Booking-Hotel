<?php
    include "koneksi.php";

    $id_kamar=$_GET['kamar_id'];
    $image=mysqli_query($connect, "select image from fasilitas_kamar where id='$kamar_id'");
    

    
        $sql=mysqli_query($connect, "delete from fasilitas_kamar where id='$kamar_id'");
        if($sql){
            header("location: admin-fasilitaskamar.php");
        }else{
            echo "Terjadi kesalahan dalam menghapus data di database.";
        }
?>
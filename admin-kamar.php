<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel ONESKA</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>ADMIN HOTEL</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-fasilitaskamar.php">Fasilitas Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-kamar.php">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-fasilitas.php">Fasilitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<div class="page-heading header-text" style="background-image: url(assets/images/hotel.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    
                    <h2><b> HOTEL ONESKA</b> </h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <h2><b>ADMIN KAMAR</b></h2>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
            <div class="row">
                <div class="col-md-5" style="text-align: left">
                <a href="kamar-baru.php"><button type="button">TAMBAH KAMAR</button></a>
                </div>
            <div class="col-md-6" style="text-align: right">
                <form action="admin-kamar.php" method="get">
                    <input type="text" name="cari" placeholder="Cari Data...">
                    <input type="submit" value="cari">
                </form>
            </div>
            </div>
            </div>
            <br>
            <br>
            <div class="col-md-12" style="text-align: center">
            <table class="center" border="1" style="width:90%">
            <thead>
                <th>No</th>
                <th>Tipe</th>
                <th>jumlah</th>
                <th>Image</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            <?php
                session_start();
                if ($_SESSION['login'] == "aktif"){
                    include "koneksi.php";
                    $email = $_SESSION['email'];
                    $data = mysqli_query($connect, "select *from user where email='$email'");
                    $data = mysqli_fetch_array($data);
                } else {
                    header("location: login.php");
                }
                ?>
                <?php
                include "koneksi.php";
                if (isset($_GET['cari'])){
                    $cari =$_GET['cari'];
                    $query = "SELECT * FROM kamar where tipe like'%".$cari."%'";
                } else {
                    $query = "SELECT *FROM kamar";
                }
                $sql = mysqli_query($connect,$query);
                $no =1;

                while ($data = mysqli_fetch_array($sql)) {
                    echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data['tipe']."</td>";
                    echo "<td>".$data['jumlah']."</td>";
                    echo "<td>".$data['image']."</td>";
                    echo "<td>
                        <a href='kamar-edit.php?id_kamar=".$data['id']."'>Edit</a> |
                        <a href='kamar-hapus.php?id_kamar=".$data['id']."'>Hapus</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
                </table>
                </tbody>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; ONESKA 2021</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>
</body>

</html>

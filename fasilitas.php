<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>ONESKA Hotel | Facilities</title>

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
            <a class="navbar-brand" href="fasilitas.php"><h2>ONESKA</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kamar.php">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fasilitas.php">Fasilitas</a>
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
                    <h2>Hotel ONESKA</h2>
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
                        <h2>FASILITAS HOTEL</h2>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="filters-content">
                    <div class="row grid">
                        <?php
                        include "koneksi.php";
                        $batas = 3;
                        $hal = isset($_GET['hal']) ? (int)$_GET['hal'] : 1; //ternary halaman
                        $hal_awal = ($hal > 1) ? ($hal * $batas) - $batas : 0;
                        $previous = $hal - 1;
                        $next = $hal + 1;
                        $jumlah_data = mysqli_query($connect, "select count(*) as jumlah from fasilitas_hotel");
                        $jumlah = mysqli_fetch_array($jumlah_data); // jumlah data fasilitas
                        $total_hal = ceil($jumlah['jumlah'] / $batas);
                        $fasilitas_hotel = mysqli_query($connect, "select * from fasilitas_hotel limit $hal_awal, $batas"); // data fasilitas yang sudah di limit hal
                        while ($data = mysqli_fetch_array($fasilitas_hotel)) {
                            echo '<div class="col-lg-4 col-md-4 all des">
                            <div class="oneska-item">
                                <a href="#"><img src="assets/images/'.$data['image'].'"></a>
                                <div class="down-content" style="min-height: 42vh" >
                                    <a href="#"><h4>' . $data['nama'] . '</h4></a>
                                    <hr>
                                    <p>'.$data['keterangan']. '</p>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="pages">
                    <li><a <?php if ($hal > 1) {echo "href='?hal=$previous'";}?>><i class="fa fa-angle-double-left"></i></a></li>
                    <?php for ($x = 1; $x <= $total_hal; $x++) {?>
                        <li class="<?php echo ($hal == $x) ? 'active' : '' ?>"><a href="?hal=<?php echo $x; ?>"><?php echo $x; ?></a></li>
                    <?php } ?>
                    <li><a <?php if ($hal < $total_hal) {echo "href='?hal=$next'";}?>><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
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


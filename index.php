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

<!-- ** Preloader Start ** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ** Preloader End ** -->

<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>HOTEL</h2></a>
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
<div class="page-heading header-text" style="background-image: url(assets/images/hotel3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h3>Selamat Datang</h3><br>
                    <h2>HOTEL ONESKA</h2>
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
                        <h2>Hotel ONESKA</h2>
                    </ul>
                </div>
            </div>
            <div class="col-md-12" style="background-color: #F5F5DC ; border-radius: 15px "  >
            <div class="filters-content">
                    <h4>Hotel ONESKA berlokasi di suatu lahan seluas 29 hektar di 
                    garis pantai yang indah di mana merupakan tempat yang cocok untuk bisnis
                    dan liburan. Lokasinya langsung mengarah ke matahari terbit di pantai, 
                    dimana menawarkan layanan terbaik dengan jangkauan
                    layanan 24 jam dan keramahan yang ditawarkan selama masa inap Anda. 
                    Hotel berbintang 4 ini menawarkan total 246 kamar dengan
                    sepuluh lantai Tower Wing termasuk Presidential Suite dan 20 Suites.</h4>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="products">
        <div class="container">
            <div class="row">
            <h3>Form Pemesanan</h3>
                <hr><br><br>
                    <form method="POST" action="reservasi.php" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-3">
                    <h6>Tanggal CheckIn<h6><br>
                    <input type="date" id="tgl_checkin" name="tgl_checkin">
                </div>
                <div class="col-md-3">
                    <h6>Tanggal CheckOut<h6><br>
                    <input type="date" id="tgl_checkout" name="tgl_checkout">
                </div>
                <div class="col-md-3">
                    <h6>Jumlah Kamar<h6><br>
                    <input type="text" id="jumlah" name="jumlah" size="5">
                </div>
                </div>
                    <br><br><br>
                    <table style="width:1300px" cellpadding="10">
                        <tr>
                            <td>Nama Pemesan</td>
                            <td></td>
                            <td><input type="text" id="nama_pemesan" name="nama_pemesan" size="40"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td></td>
                            <td><input type="text" id="email" name="email" size="40" ></td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td></td>
                            <td><input type="text" id="hp" name="hp" size="40" ></td>
                        </tr>
                        <tr>
                            <td>Nama Tamu</td>
                            <td></td>
                            <td><input type="text" id="nama_tamu" name="nama_tamu" size="40" ></td>
                        </tr>
                        <tr>
                            <td>Tipe Kamar</td>
                            <td></td>
                            <td><select name="kamar_id">
                                <option value="" disabled>--</option>
                                <option value="1">Deluxe</option> //pr jadikan dinamis
                                <option value="2">VIP</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td></td>
                            <td>
                                <select name="status">
                                    <option value="" disabled>--</option>
                                    <option value="reservasi">Reservasi</option>
                                </select>
                            </td>
                        </tr>
                </table><br><br><br>
                <div class="col-md-11">
                    <div class="filters"style="margin-bottom:10px;border-bottom:0px;">
                        <button type="submit">Konfirmasi Pemesanan</button>
                    </div>
                </div>
            </div>
</form>
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
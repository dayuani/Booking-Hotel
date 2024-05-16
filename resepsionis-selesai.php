<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ADMIN ONESKA</title>

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
                <a class="navbar-brand" href="index.php">
                    <h2>ONESKA</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin-reservasi.php">Reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-reservasi.php">reservasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin-reservasi.php">reservasi</a>
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
                        <h2>ONESKA</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "koneksi.php";
    ?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <h2>EDIT Status reservasi</h2>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12"> 
                    <div class="contact-form">
                       <?php
                       include "koneksi.php";
                       $id_reservasi = $_GET['id_reservasi'];
                       $query = "select *from reservasi where id='$id_reservasi'";
                       $data = mysqli_query($connect, $query);
                       $data = mysqli_fetch_array($data);
                       ?>
                       <form id="reservasi-selesai" action="status-update.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <input type="hidden" name="id_reservasi" id="id_reservasi" value="<?php echo $data['id_reservasi']?>">    
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $data['status']?>" placeholder="Masukkan tipe reservasi...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="filled-button" id="button-submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
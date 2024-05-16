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
                <a class="navbar-brand" href="index.php">
                    <h2>ONESKA</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <h2>ONESKA</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="satu">
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <h4>Admin Panel</h4>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="filters-content">
                        <?php
                        session_start();
                        include "koneksi.php";
                        $email =$_SESSION ['email'];
                        $data = mysqli_query($connect, "select* from user where email ='$email'");
                        $data = mysqli_fetch_array($data);
                        ?>
                        <div class="row">
                        <div class="col-md-6">
                            <h4> Data Login </h4>
                            <hr>

                            <table>
                               
                                <tr>
                                    <td>Nama</td>
                                    <td>:<?php echo $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:<?php echo $data['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:<?php echo $data['level'] ?></td>
                                </tr>
                            </table>
                            <a href='logout.php'>LOGOUT</a>
                    </div>
                    <div class="col-md-6">
                            <h4>Navigasi</h4>
                            <hr>
                            <ul>
                                <li><a href="admin-kamar.php">Kamar</a></li>
                                <li><a href="admin-fasilitas.php">Fasilitas</a></li>
                                <li><a href="admin-reservasi.php">Reservasi</a></li>
                            </ul>
                        </div>
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
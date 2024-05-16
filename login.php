<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hotel ONESKA</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
    .kotak{
	position: relative;
	left: 20px;
	padding: 10px;
    }
</style>

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
       
     
    <?php
    include "koneksi.php";
    ?>
       <div class="products">
        <div class="container">
            <div class="row" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;background-color: #F5F5DC; border-radius: 10px;padding:20px;">
                <div class="col-md-12">
                    <div class="filters" style="margin-bottom:10px;border-bottom:0px;">
                        <ul>

                            <h2>Login Admin</h2>
                        </ul>
                    </div>
                </div>
               <div class="col-md-12"> 
                <?php
                if(!empty($_GET['eror'])){
                    echo "email atau password anda salah!";
                } 
                ?>  
                       <div class="contact-form">
                            <form id="form-login" action="logincek.php" method="post">
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukan email...">
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password...">
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="filled-button" id="button-login">Login</button>
                                 </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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
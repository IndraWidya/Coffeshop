<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>L'Espresso</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/home.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>/img/lespresso.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>

                <div class="collapse navbar-collapse ms-5" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-5 py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/menu">MENU</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/order ">ORDER</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/about/">About US</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL?>/contact/">Contact</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav text-uppercase py-4 py-lg-0 d-flex justify-content-end ">
                    <button type="button" class="btn btn-outline-warning mx-2">Join Us</button>
                    <button type="button" class="btn btn-warning ms-1"><a href="../login/index.php"></a>Login</button>
                </ul>
            </div>
        </nav>
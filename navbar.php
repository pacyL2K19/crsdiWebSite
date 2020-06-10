<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>CRSDI</title>

    <!-- Favicon  -->
    <link rel="icon" href="imges/icon/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Style CSS -->
     <link rel="stylesheet" href="styleProgressBar.css">
     
     <!-- Style CSS Swipe (>>> laboratoire en image) -->
     <!-- <link rel="stylesheet" href="styleFichierSwiper.css"> -->
    <!-- <link rel="stylesheet" href="swiper.min.css"> -->

</head>

<body>
    <!-- Preloader Start-->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div> 
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="Logo" style="margin-top: 55px;"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Asoociation</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
<!-- <a class="dropdown-item" href="associations_Activites.php"> Activités</a>
<a class="dropdown-item" href="associations_ConseilAdmin.php">CA (Conseil d'amnistration)</a>
<a class="dropdown-item" href="associations_Adherer.php">Adherer</a>
<a class="dropdown-item" href="associations_Historique.php">Chronologie</a> -->

<a class="dropdown-item" href="#"> Activités</a>
<a class="dropdown-item" href="#">CA (Conseil d'amnistration)</a>
<a class="dropdown-item" href="#">Adherer</a>
<a class="dropdown-item" href="#">Chronologie</a>
                                        </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Recherche</a>
                                </li>
                                
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contacts</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="realisationsAllDepartements.php">Nos réalisations</a>
                                </li>
                                 <!-- <li class="nav-item">
                                    <a class="nav-link" href="realisationsAllDepartements.php">PAE</a>
                                </li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PAE</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="pae.php?numeroMenu=1">Presentation</a>
                                        <a class="dropdown-item" href="pae.php?numeroMenu=2">le PAE et le CRSDI</a>
                                        <a class="dropdown-item" href="pae.php?numeroMenu=3">Activites</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Nous soutenir</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#">Forum</a>
                                </li> -->
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

<?php 

session_start();
$USER = $_SESSION["USER"];
 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <!--<meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">-->

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>FCPN</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="../logos/logo_FCPN.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- Image Logo -->
        <div>
            <a  id="titulo_"  href="index.php">
                <img src="../logos/logo_FCPN.png" alt="alternative" width="60" height="60">
                <span>    </span>Facultad de Ciencias Puras y Naturales
            </a>

        
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->
        </div>
        

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="inicio.php">INICIO<span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">INTRO</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services"><span>ACADÉMICO&nbsp;&nbsp;&nbsp;</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link page-scroll" href="" style="background-color:#f1bf7d62; border-radius: 30px;">
                        <img src="../logos/perfil2.png" alt="">
                        <span>   <?php echo $USER?></span>
                    </a>
                </li>-->


                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown" style="margin-top:-8px; ">
                    <span class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color:#f1bf7d62; border-radius: 30px; ">   
                        <img src="../logos/perfil2.png" alt="">
                    <span>&nbsp;&nbsp;<?php echo $USER?>&nbsp;&nbsp;</span></span>
                    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php"><span class="item-text">CERRAR SESIÓN</span></a>
                        <!--<div class="dropdown-items-divide-hr"></div>-->
                    </div>
                </li>
                <!-- end of dropdown menu -->

            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->



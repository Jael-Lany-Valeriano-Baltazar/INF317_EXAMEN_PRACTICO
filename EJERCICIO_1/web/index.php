<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica si el nombre de usuario y la contraseña son correctos
    if ($username == "admin" && $password == "admin") {
        // Inicia la sesión y redirige al usuario a la página principal
        session_start();
        $_SESSION["username"] = $username;
        header("Location: inicio.php");
        exit;
    } else {
        // Muestra un mensaje de error si los datos son incorrectos
        $errores = "Nombre de usuario o contraseña incorrectos.";
    }
}

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
                    <a class="nav-link page-scroll" href="#callMe">
                        <img src="../logos/perfil2.png" alt=""><span>&nbsp;&nbsp;INICiO DE SESIÓN</span>
                    </a>
                </li>
                
            </ul>
        </div>

        
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->




    <!-- Form -->
    <div id="callMe" class="form-1" style="padding-top: 100px; padding-bottom: 10px;">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="wrapper_form fadeInDown_form" >
                        <div id="formContent_form">
                          <!-- Tabs Titles
                          <h2 class="active_form h2_form"> Iniciar Sesión </h2>
                          
                          -->
                          <!-- Icon -->
                          <div class="fadeIn_form first_form">
                            <img src="../logos/restriccion-de-cuenta.png" id="icon_form" alt="" style="padding-top:23px; width:250px;"/>
                          </div>
                      
                          <!-- Login Form -->
                          <form method="post" action="index.php">

                            <?php if (isset($errores)) { ?>
                                <p class="error_login"><?php echo $errores; ?></p>
                            <?php } ?>

                            <input type="text" id="username" class="fadeIn_form second_form" name="username" placeholder="usuario">
                            <input type="password" id="password" class="fadeIn_form third_form" name="password" placeholder="contraseña">
                            <input type="submit" class="fadeIn_form fourth_form" name="submit" value="Acceder">
                                                    
                          </form>
                      
                          <!-- Remind Passowrd -->
                          
                      
                        </div>
                      </div>
                </div>


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->


  
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>UMSA</h4>
                        <h5  style="color: silver;">Facultad de Ciencias Puras y Naturales</h5>
                        <h6  style="color: silver;">Carrera de Informática</h6>
                        <p class="white"  style="color: silver;">INF - 324 | Programación Multimedia</p>
                        <p class="white"  style="color: silver;">EXAMEN PRÁCTICO - PRIMER PARCIAL</p>
                        <p class="p-small">Copyright © 2023 </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="text-conainer">
                        <h4>Enlaces</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="https://github.com/Jael-Lany-Valeriano-Baltazar/INF-317.git"><img src="../logos/github.png" alt=""></a>
                            </li>
                            <li>
                               <p style="color: silver;">Estudiante: Jael L. Valeriano Baltazar</p>
                            </li>
                            <li>
                                <a class="white" href="https://cvinformatica.umsa.bo/enrol/index.php?id=49"><img src="../logos/moodle-logo-white.png" alt="" width="100px"></a>
                            </li>
                            <li class="media">
                                <p style="color: silver;">Docente: Moises Silva</p>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
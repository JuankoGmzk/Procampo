<?php
session_start();

include "Config/config.php";
include "Config/funciones.php";

if(!isset($_SESSION['usuario'])) {
	//header("Location: Login/login.php");
}

ini_set('error_reporting',0);
?>


<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css.css">

    <title>PROCAMPO</title>
</head>

<body>

    <div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
        <nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                    <div>
                        <p class="text-left follow">Nuestras Redes:</p>
                        <ul class="navbar-nav float-left social-links">

                            <li class="nav-item">
                                <a href="Login/login.php" class="tooltip33" ><i class="fas fa-user-tag"> </i><span class="tooltiptext">Iniciar Sesión</span>  </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <?php if( $_SESSION['rango'] == 2) { ?> <li class="nav-item"><a class="tooltip33" href="dashboard.php"><i class="fas fa-map"></i> <span class="tooltiptext">Centro de datos</span> </a>
                                <?php } ?></li>

                            <?php if( $_SESSION['rango'] == 2) { ?> <li class="nav-item"><a class="tooltip33" href="proyectos-theme"><i class="fas fa-file-prescription"></i> <span class="tooltiptext">Proyectos</span> </a>
                                <?php } ?></li>

                            <li class="nav-item"><a class="tooltip33" href="Login/logout.php"><i class="fas fa-sign-out-alt"></i> <span class="tooltiptext">Cerrar Sesión</span></a>
                            </li>

                        </ul>
                    </div>

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="images/img/logo/logo2.png" alt="Vista Pro" /></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav float-right menu-links">
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contactanos</a>
                        </li>
                     
                        <?php if( $_SESSION['rango'] == 2) { ?><li class="nav-item">
                            <a class="nav-link" href="#news">Noticias</a>
                        <?php } ?></li>



                    </ul>
                </div>
            </div>
        </nav>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" alt="home-bg" src="images/hola.jpg">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">campo3</p>
                    <h5>campo3.</h5>
                    <p>campo3</p>

                </div>


            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="images/hola3.jpg">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">campo1</p>
                    <h5>campo1.</h5>
                    <p>campo1</p>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="images/hola4.jpg">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">campo2</p>
                    <h5>campo2</h5>
                    <p>campo2</p>

                </div>
            </div>
            <div class="scroll-button">
                <p>Desplácese hacia abajo para ver más ...</p>
                <a href="#about-us" class="page-scroll">
                    <img src="images/arrows-down.png" alt="arrow down" />
                </a>

            </div>
        </div>
        <ul class="carousel-indicators">
            <li class="active" data-target="#fh5co-hero-carousel" data-slide-to="0" aria-current="location"></li>
            <li data-target="#fh5co-hero-carousel" data-slide-to="1"></li>
            <li data-target="#fh5co-hero-carousel" data-slide-to="2"></li>
        </ul>
    </div>


    <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <svg class="back-bg" viewBox="0 0 535 618">
                        <defs>
                            <linearGradient id="PSgrad_0" x1="0%" x2="100%" y1="0%" y2="0%">
                                <stop offset="0%" stop-color="rgb(41,209,117)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(87,209,41)" stop-opacity="1" />
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" fill="rgb(18, 112, 228)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                        <path fill="url(#PSgrad_0)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                    </svg>

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="images/personas_retos/img26.jpg" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="images/personas_retos/img23.jpg" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="images/personas_retos/img1.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>Sobre Nosotros</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fh5co-portfolio" id="portfolio">
        <div class="container">
            <h2>NUESTRO PORTAFOLIO</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad </p>
            <h3>Proyectos:</h3>
            <div class="portfolio-tab portfolioFilter">
                <ul>
                    <li><a href="#" data-filter="*" class="active">Todo</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">Samsung</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                   
                </ul>
            </div>

            <div class="row">

                <div class="portfolioContainer">

                    <div class="gallary building nature green">
                        <img src="images/personas_retos/img26.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="gallary center-img wedding">
                        <img src="images/personas_retos/img11.jpg" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary building">

                        <img src="images/personas_retos/img26.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary center-img landscape nature">
                        <img src="images/personas_retos/img13.jpg" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary">
                        <img src="images/personas_retos/img26.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary center-img landscape">
                        <img src="images/personas_retos/img26.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>


                    <div class="gallary building nature">
                        <img src="images/personas_retos/img26.jpg" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row portfolioFilter">
                <ul class="indicators">
                    <li><a href="#" data-filter=".landscape" class="active"></a>
                    </li>
                    <li><a href="#" data-filter=".green"></a>
                    </li>
                    <li><a href="#" data-filter=".building"></a>
                    </li>
                    <li><a href="#" data-filter=".wedding"></a>
                    </li>
                    <li><a href="#" data-filter=".nature"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container-fluid fh5co-news" id="news">
        <div class="container">
            <h2>NUESTRAS NOTICIAS</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="images/news1.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Noticia 1 </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="images/news2.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Noticia 2 </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="images/news3.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Noticia 3 </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>CONTACTANOS AHORA</h2>
                    <p class="light">
                        Proyectos con responsibilidad social
                    </p>
                    <p>
                        <span class="email"><img src="images/email.png"
                                alt="email icon" /></span><b>jsmartinez@POLIGRAN.onmicrosoft.com</b>
                    </p>
                    <p>
                        <span class="phone"><img src="images/phone.png" alt="phone icon" /></span><b>+57 3125824399</b>
                    </p>
                    <h3>Nuestras redes sociales:</h3>
                    <ul class="navbar-nav float-left social-links footer-social">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="https://twitter.com/fh5co"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="form-box">
                        <h4>Iniciemos un proyecto!</h4>
                        <p>¡Nos encantaría saber de usted!</p>
                        <hr />
                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Nombre...">
                                </td>

                                <td><input type="text" class="form-control" placeholder="Correo">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><textarea class="form-control" placeholder="Mensaje.."></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        ENVIAR AHORA
                                    </button>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </footer>
    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p>&copy; 2020 Todos los derechos reservados. Diseñado por <a href="https://freehtml5.co" target="_blank">Procampo.co</a>.</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>
</body>

</html>
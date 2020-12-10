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
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="stylesheet" href="css/slider.css">


    <title>PROCAMPO</title>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a style="color:black;" class="navbar-brand js-scroll-trigger" href="#page-top"><i>PROCAMPO</i></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li  class="nav-item"><a  style="color:black;" class="nav-link js-scroll-trigger" href="#about-us">About</a></li>
                        <li class="nav-item"><a  style="color:black;" class="nav-link js-scroll-trigger" href="#portfolio">Proyectos</a></li>
                        <li class="nav-item"><a style="color:black;" class="nav-link js-scroll-trigger" href="#news">Noticias</a></li>
                        <li class="nav-item"><a style="color:black;" class="nav-link js-scroll-trigger" href="#contact">Contactanos</a></li>

                    </ul>
                </div>
            </div>
        </nav>

    <div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
        <nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

               
                </div>
            </div>
        </nav>
       

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" alt="home-bg" src="images/procampo_imagenes/POSTS_181221-09.jpg">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">campo3</p>
                    <h5>campo3.</h5>
                    <p>campo3</p>

                </div>


            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="images/procampo_imagenes/agricultura2.jpg">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">campo1</p>
                    <h5>campo1.</h5>
                    <p>campo1</p>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="images/procampo_imagenes/landscapes-2432900_1920.jpg">

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
                                <stop offset="0%" stop-color="rgb(151,193,96)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(104,130,70)" stop-opacity="1" />
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" fill="rgb(105, 72, 79)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                        <path fill="url(#PSgrad_0)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                    </svg>

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="images/procampo_imagenes/reiseuhu-2GrRlrLReQc-unsplash.jpg" alt="" class="img-fluid" />
                            
                        </div>
                        <div>
                            <img src="images/procampo_imagenes/Campesinofinagro-1.jpg" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="images/procampo_imagenes/campesino-cosechando.jpg" alt="" class="img-fluid" />

                           
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-8">
                    <div class="about-us-content">

                        <div class="containers">
  
                        <ul class="slider">
                            <li id="slide1">
                            <h1 style="color:#574839;"> Misión</h1>
                            <p style="color:black;">Buscamos ser un puente de comunicación entre empresas y
                                la población rural; proponiendo objetivos de desarrollo
                                sostenible mediante un HUB tecnológico y social para
                                satisfacer las necesidades de este sector mientras reforzamos
                                la responsabilidad social empresarial en el territorio
                                colombiano.</p>
                            </li>
                            <li id="slide2">
                            <h1 style="color:#574839;">Visión</h1>
                            <p style="color:black;">Para el año 2021 buscamos convertir el campo colombiano en un
                                espacio lleno de oportunidades para la población, donde las cifras
                                del comercio y la participación de la población rural en el desarrollo
                                nacional se vean directamente impactadas de forma positiva;
                                queremos llevar las herramientas necesarias para la población rural
                                (tecnología, educación, oportunidades laborales, etc) manteniendo
                                la responsabilidad social y ambiental en todo momento.</p>
                            </li>
                            <li id="slide3">
                            <h1 style="color:#574839;">Filosofía y valores</h1>
                            <p style="color:black;">Somos un HUB tecnológico y social que busca conectar a
                                los empresarios que desean implementar políticas de
                                responsabilidad social con la población rural
                                colombiana, para generar oportunidades de desarrollo
                                en educación, tecnología, economía, medio ambiente y el
                                sector laboral; enfocándonos y guiándonos por nuestros
                                valores y atributos.<br>
                            
                                - Innovación: Creación de una alianza entre las
                                empresas enfocadas a la responsabilidad social y la
                                población rural, generando proyectos innovadores en
                                red de alto impacto que generen desarrollo nacional.<br></p><br>
                            
                            </li>
                            <li id="slide4">
                            <h1 style="color:#574839;">Filosofía y valores</h1>
                            <p style="color:black;">
                            - Eficiencia: Buscamos generar un alto impacto en la
                                población rural sacando el mejor provecho de cada
                                recurso.<br>
                                - Liderazgo: Trabajamos en equipo desde empresarios
                                hasta la población rural con el objetivo de llevar las
                                mejores oportunidades en el desarrollo individual y
                                grupal de cada uno.<br>
                                - Solidaridad: Tenemos siempre en cuenta las
                                necesidades básicas y complementarias de la población
                                rural y nuestros aliados.<br>
                            </p>
                            
                            </li>
                            <li id="slide5">
                            <h1 style="color:#574839;">Filosofía y valores</h1>
                            <p style="color:black;">
                            - Empatía: Nos preocupamos por la situación de la
                                población rural nacional, es por esto que buscamos
                                entender las necesidades existentes para brindar las
                                mejores oportunidades y beneficios para cada integrante
                                de la cadena de valor.<br>
                                - Dinamismo: La capacidad que tenemos para
                                transformarnos y evolucionar a medida que las
                                necesidades de nuestros la población rural lo hacen.<br>
                               
                            </p>
                            
                            </li>
                        </ul>
                        
                        <ul class="menu">
                            <li>
                            <a href="#slide1"></a>
                            </li>
                            <li>
                            <a href="#slide2"></a>
                            </li>
                            <li>
                            <a href="#slide3"></a>
                            </li>
                            <li>
                            <a href="#slide4"></a>
                            </li>
                            <li>
                            <a href="#slide5"></a>
                            </li>
                            
                        </ul>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <div class="container-fluid fh5co-portfolio" id="portfolio">
        <div class="container">
       
            <h3>Proyectos:</h3>
            <div class="portfolio-tab portfolioFilter">
                <ul>
                   
                    <li><a href="#" data-filter=".realizados">Realizados</a>
                    </li>
                    <li><a href="#" data-filter=".proceso">En Proceso</a>
                    </li>
                    <li><a href="#" data-filter=".futuros">Futuros</a>
                    </li>
                  
                   
                </ul>
            </div>

            <div class="row">

                <div class="portfolioContainer">

                    <div class="gallary realizados">
                        <img src="images/procampo_imagenes/campesinos_0.jpg" class="half-height" alt="">
                        <div class="card-img-overlay">
                           

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="gallary realizados">
                        <img src="images/procampo_imagenes/campesinos_0.jpg" class="half-height" alt="">
                        <div class="card-img-overlay">
                        

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary proceso">

                        <img src="images/procampo_imagenes/campesinos_0.jpg"  class="half-height" alt="">
                        <div class="card-img-overlay">
                           

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary  proceso">
                        <img src="images/procampo_imagenes/campesinos_0.jpg" class="half-height" alt="">
                        <div class="card-img-overlay">
                           

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary futuros">
                        <img src="images/procampo_imagenes/campesinos_0.jpg"  class="half-height" alt="">
                        <div class="card-img-overlay">
               

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary futuros">
                        <img src="images/procampo_imagenes/campesinos_0.jpg"  class="half-height" alt="">
                        <div class="card-img-overlay">
       

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
                    <li><a href="#" data-filter=".realizados" class="active"></a>
                    </li>
                    <li><a href="#" data-filter=".proceso"></a>
                    </li>
                    <li><a href="#" data-filter=".futuros"></a>
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
                                <a class="nav-link" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
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
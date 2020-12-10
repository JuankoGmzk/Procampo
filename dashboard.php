<?php
session_start();

include "Config/config.php";
include "Config/funciones.php";

if(!isset($_SESSION['usuario'])) {
	//header("Location: Login/login.php");
}

ini_set('error_reporting',0);
?>


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/css.css">

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a style="color:black;" class="navbar-brand js-scroll-trigger" href="index.php"><i>PROCAMPO</i></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li  class="nav-item"><a  style="color:black;" class="nav-link js-scroll-trigger" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a  style="color:black;" class="nav-link js-scroll-trigger" href="index.php">Proyectos</a></li>
                        <li class="nav-item"><a style="color:black;" class="nav-link js-scroll-trigger" href="#contact">Contactanos</a></li>

                    </ul>
                </div>
            </div>
        </nav>

<br><br><br><br><br><br>

<div fxLayoutAlign="center start">
<iframe width="1170" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=dcd68f36-54f1-42a1-9aa4-d1482cf10c9e&autoAuth=true&ctid=dd505be5-ec69-47f5-92df-caa55febf5fa&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLXNvdXRoLWNlbnRyYWwtdXMtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D" frameborder="0" allowFullScreen="true"></iframe>
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



                        <form action="enviar_correo.php" method="post">

                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Nombre..." name="nombre" required>
                                </td>

                                <td><input type="text" class="form-control" placeholder="Correo" name="correo" required> 
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><textarea class="form-control" placeholder="Mensaje.." name="mensaje" required></textarea>
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

                        </form>



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

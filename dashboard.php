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

<div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
<nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#"><img src="images/logo.png" alt="Vista Pro" /></a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                 

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="images/img/logo/logo2.png" alt="Vista Pro" /></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
</div>


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

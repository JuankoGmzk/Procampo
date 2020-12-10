<?php
session_start();
include "../Config/config.php";
include "../Config/funciones.php";

if(!isset($_SESSION['usuario'])) {
	header("Location: login.php");
}

//ini_set('error_reporting',0);
?>


<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Proyectos en proceso</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="../../PROCAMPO/proyectos-theme/css/theme-1.css">

</head> 

<body>
    
    <header class="header text-center">	    
	<h1 class="blog-name pt-lg-4 mb-0"><a href="index.html">Proyectos</a></h1>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<div class="profile-section pt-3 pt-lg-0">
				    <img class="profile-image mb-3 rounded-circle mx-auto" src="../proyectos-theme/images/profe.PNG" alt="image" >			
					
					<div class="bio mb-3">DESARROLLANDO COLOMBIA</div><!--//bio-->
					<ul class="social-list list-inline py-3 mx-auto">
			            
					<li class="list-inline-item"><a  href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a  href="#"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a  href="../dashboard.php"><i class="fas fa-map"></i> </a></li>
					<li class="list-inline-item"><a  href="../Login/logout.php"><i class="fas fa-sign-out-alt"></i> </a></li>

					</ul><!--//social-list-->
					
			        <hr> 
				</div><!--//profile-section-->

	
				<ul class="navbar-nav flex-column text-left">
					<li class="nav-item active">
					    <a class="nav-link" href="index.php"><i class="fas fa-check-double  mr-2"></i>Mis proyectos <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
					    <a class="nav-link" href="proyectos-en-proceso.php"><i class="fas fa-bookmark fa-fw mr-2"></i>Informes</a>
					</li>
			
				</ul>
				
				<div class="my-2 my-md-3">
				    <a class="btn btn-primary" href="../index.php" target="_blank">Inicio</a>
				</div>
			</div>
		</nav>
    </header>
	<?php
    
    $coment = "SELECT * FROM proyectos WHERE code = 'P101'"  ;

    $coments = mysqli_query($connect,$coment, $resultmode = MYSQLI_STORE_RESULT );

    while($con=mysqli_fetch_array($coments)){

        ?>


    <div class="main-wrapper">
	   
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">


			<div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src=" <?php echo $con['imagen']; ?>" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="about.php"><?php echo $con['titulo']; ?></a></h3>
						    <div class="meta mb-1"><span class="date"><?php echo $con['fecha']; ?></span><span class="time">5 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro"><?php echo $con['descripcion']; ?> </div>
						    <a class="more-link" href="about.php">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
				</div><!--//item-->					
			</div>
	    </section>
    </div><!--//main-wrapper-->

				<?php
    }
    ?>


</body>
</html> 


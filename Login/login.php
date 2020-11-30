<?php
session_start();

include "../Config/config.php";
include "../Config/funciones.php";

if(isset($_SESSION['usuario'])) {
	header("Location: ../index.php");
}

ini_set('error_reporting',0);
?>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" type="image/x-icon" href="assets/img/SkillClass.png" />
<link href="css.css" rel="stylesheet" />

<!------ Include the above in your HEAD tag ---------->

<title>Login</title>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="../imagesRT/logo_Retos.png" id="icon" alt="User Icon" width="240" height="240"/>
        </div>

        <!-- Login Form -->
        <form id="form1" name="form1" method="post" action="login.php">
            <input type="text" id="textfield" class="fadeIn second" name="usuario" placeholder="login">
			<input type="password" id="textfield2" class="fadeIn third" name="contrasena" placeholder="password">
			<input type="submit" class="fadeIn fourth" name="guardar" id="guardar" value="Entrar" />
          

        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="registro.php">Registrarse</a>
        </div>

    </div>
</div>

<?php
if($_POST['guardar']) {

	$usuario = clean($_POST['usuario']);
	$contrasena = md5($_POST['contrasena']);
	
	$query =  "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";

	
	$contar = mysqli_num_rows($connect->query($query));


	$result = mysqli_query($connect,$query, $resultmode = MYSQLI_STORE_RESULT );
	
	
	if ($contar != 0) {


		if ($result === FALSE){
			die(mysqli_error("Error message for tehe user"));
		}
	
		while($row=mysqli_fetch_array($result )) {
		
			if($usuario == $row['usuario'] && $contrasena == $row['contrasena']) 
			
			{
			
				$_SESSION['usuario'] = $usuario;
				
				$_SESSION['id'] = $row['id'];
				
				$_SESSION['rango'] = $row['rango'];
				
				header("Location: ../index.php");

				
			}
			
		} 
		
	} else { echo "El nombre de usuario y/o contrasena no coinciden"; }
	
}
?>
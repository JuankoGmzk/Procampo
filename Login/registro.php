<?php

session_start();

include "../Config/config.php";
include "../Config/funciones.php";


ini_set('error_reporting',0)

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
        <form id="form1" name="form1" method="post" action="">

			<input type="text" id="textfield" class="fadeIn second" name="usuario" placeholder="login" maxlength="20">
			<input type="password" id="textfield2" class="fadeIn third" name="contrasena" placeholder="password">
			<input type="submit" class="fadeIn fourth" name="guardar" id="guardar" value="Registrarse" />
          
          

        </form>

        

    </div>
</div>

<?php
 if(isset($_POST['guardar'])){/*Se refiere al submit de guardar, y si le damos clic en guardar va a pasar esto*/
 /*Vamos a recorger las variables*/
 $usuario=clean($_POST['usuario']);/*Creamos la variable usuario y la asignamos en nombre del usuario*/
 $contrasena=md5($_POST['contrasena']);/*md5 es para encryptar la contrasena*/
 $query="SELECT * FROM usuarios WHERE usuario ='$usuario'";
 /*Vamos a utilizar que el nombre del usuario no se repita*/
 //$c=mysqli_num_rows(mysqli_query($query));

 $c=mysqli_num_rows($connect->query($query));/*Esto me cuenta cuantos registros hay en una tabla*/
 /*mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'"), es la consulta a la base de datos*/
  if($c==1){/*Si existe un usuarios con el nombre igual vamos a registrarle este metodo*/
   echo "El nombre de usuario ya está en uso, por favor escoger otro gracias";
  }else{/*Si no está repetido lo vamos a registrar*/
   $r="INSERT INTO usuarios(usuario,contrasena,rango) VALUES ('$usuario','$contrasena','2')";/*Lo vamos a insertar*/
   $resultado=$connect->query($r);
   if($resultado){
    echo "Felicidades, $usuario te has registrado con éxito";
    echo '<meta http-equiv="refresh" content="1; url=login.php" />';
   }
  }
 }
 /*Espero que le sirva este codigo a mi me funciono así en el registro.php*/
?>
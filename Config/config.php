<?php
$host = "localhost";
$dbuser = "root";
$dbpwd = "";
$db = "procampo";

$connect = mysqli_connect($host, $dbuser, $dbpwd, $db);
    if(!$connect)
  echo ('No se ha podido conectar');
 else
  $select = mysqli_select_db ($connect, $db);
?>
<?php 
     
$servidor = "127.0.0.1";
$usuario ="root";
$password = "";
$db ="cantera";
$conexion=mysqli_connect($servidor,$usuario,$password,$db) or die(mysqli_error());
?>
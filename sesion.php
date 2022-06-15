<?php

require 'conection.php';
session_start();


$usuario=$_POST['user'];
$clave=$_POST['pass'];



$query="SELECT * FROM USUARIOS WHERE USUARIO='$usuario' AND PASS='$clave'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombre_usuario']=$usuario;
    header("location: home.php");
}else{
    header("location: index.php");
    
}

?>
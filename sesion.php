<?php

require 'conection.php';



$usuario=$_POST['user'];
$clave=$_POST['pass'];

$foto=$_POST['foto'];
$precio=$_POST['precio'];




$query="SELECT * FROM USUARIOS WHERE USUARIO='$usuario' AND PASS='$clave'";
$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    session_start();
    $_SESSION['nombre_usuario']=$usuario;
    $_SESSION['foto']=$foto;
    $_SESSION['precio']=$precio;
    header("location: home.php");
}else{
    header("location: index.php");
    
}

?>
<?php

session_start();

$_SESSION['nombre_usuario']=='';
session_destroy();

header("location: index.php");




?>
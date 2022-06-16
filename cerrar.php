<?php

session_start();

$_SESSION['nombre_usuario']==null;
session_destroy();

header("location: index.php");




?>
<?php

$host = "localhost"; // Ip server
$user = "root"; // cuenta
$pass = ""; // contraseña
$dataBase = "clientes"; // Nombre de la Base de Datos

$conexion = mysqli_connect($host, $user, $pass, $dataBase);
mysqli_set_charset($conexion, "utf8");

// $conexion = mysqli_connect("localhost", "root", "", "clientes");

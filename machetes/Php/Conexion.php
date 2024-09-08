<?php

// Datos de MySQL
$host = "localhost";
$user = "root";
$pass = "";
$dataBase = "testingbd";

$conexion = mysqli_connect($host, $user, $pass, $dataBase);
mysqli_set_charset($conexion, "utf8");
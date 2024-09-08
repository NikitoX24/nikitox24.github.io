<?php
// Enviar Datos a una Tabla

include("Conexion.php");

$tabla = "datos";
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$celular = $_POST["celular"];

// Enviar a MySQL
$solicitud = "INSERT INTO $tabla (nombre, apellido, edad, celular) VALUES('$nombre', '$apellido', '$edad', '$celular')";

$resultado = mysqli_query($conexion, $solicitud);
header("location: ../PHP.php");
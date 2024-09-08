<?php
include("Conexion.php");
// Eliminar cuenta

$id = $_GET['id'];

$solicitud = "DELETE FROM datos WHERE id=$id";
$resultado = mysqli_query($conexion, $solicitud);
header("location: registros.php");
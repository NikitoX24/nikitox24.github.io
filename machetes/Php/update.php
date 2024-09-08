<?php
// actualizar datos

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$id = $_POST['id'];

include("Conexion.php");

$solicitud = "UPDATE datos SET nombre='$nombre', apellido='$apellido', edad='$edad', celular='$celular' WHERE id=$id";
$resultado = mysqli_query($conexion, $solicitud);
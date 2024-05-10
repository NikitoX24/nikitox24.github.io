<?php
session_start();
echo "Bienvenido ".$_SESSION["nombre"].".<br>";
echo "Su pais es: ".$_SESSION["pais"].".<br>";
echo "<a href='cerrarSesion.php'> Cerrar Sesion </a>";
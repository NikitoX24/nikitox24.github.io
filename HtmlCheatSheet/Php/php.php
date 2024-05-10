<?php
$user = "Nico"; // Evaluar con MySQL
$password = "123";

if($_POST['user'] == $user && $_POST['password'] == $password) {
  session_start();
  $_SESSION['nombre'] = "Nico Pasino";
  $_SESSION["pais"] = "Argentina";
  header('location: cuenta.php'); //Enviar a otra pag.
}
else {
  echo "USUARIO o CONTRASEÑA incorrecta.<br>";
  echo "<a href='/HtmlCheatSheet/PHP.html'> INTENTAR NUEVAMENTE </a>";
}
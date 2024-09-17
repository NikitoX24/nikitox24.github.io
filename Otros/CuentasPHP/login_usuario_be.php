<?php
  session_start();
  include("conexion_be.php");

  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
  $contrasena = hash("sha512", $contrasena);

  $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

  if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION["correo"] = $correo;
    echo ' <script> window.location = "bienvenida.php"; </script> '; // Ir a Bienvenida.php
    $nombre = mysqli_query($conexion, "SELECT usuario FROM usuarios WHERE correo='$correo'");
    $_SESSION["usuario"] = mysqli_fetch_array($nombre)[0];
    exit();
  }else {
    echo '
      <script>
        alert("Usuario no Existe!")
        window.location = "index.php";
      </script>
    ';
    exit();
  }
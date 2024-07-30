<?php
  session_start();

  // Comprobar Si inicio sesion el usuario, antes de entrar aqui.
  if(!isset($_SESSION["usuario"])){
    echo '
      <script>
        alert("Debes iniciar sesion");
        window.location = "CuentasEj.html";
      </script>
    ';
    session_destroy();
    die();
  }

?>

<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Bienvenida</title>
</head>
<body>

  <h1>Sesion iniciada.</h1>

  <a href="cerrar_sesion.php">Cerrar sesion</a>

</body>
</html>
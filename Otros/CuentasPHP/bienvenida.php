<?php
  session_start();

  // Comprobar Si inicio sesion el usuario, antes de entrar a esta pag.
  if(!isset($_SESSION["correo"])){
    echo '
      <script>
        alert("Debes iniciar sesión");
        window.location = "index.php";
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
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      font-family: "Roboto", sans-serif;
    }
    body {
      background-image: url(bg4.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      color: white;
    }
    
    main {
      width: 100%;
      padding: 20px;
      margin: auto;
      margin-top: 100px;
    }

    .contenedor__todo {
      width: 100%;
      max-width: 800px;
      margin: auto;
      position: relative;
    }

    .cerrar_sesion_bt form button {
      padding: 10px 40px;
      border: 2px solid #fff;
      font-size: 14px;
      background: transparent;
      font-weight: 600;
      cursor: pointer;
      color: white;
      outline: none;
      transition: all 300ms;
    }

    .cerrar_sesion_bt form button:hover {
      background: #fff;
      color: #46a2fd;
    }
  </style>

  <main>
    <div class="contenedor__todo">
      <h1> <?php echo "Bienvenido ".$_SESSION["usuario"]; ?> </h1>
      <br>
      <div class="cerrar_sesion_bt">
        <form action="mis_datos.php">
          <button>Mis Datos</button>
        </form> <br>

        <form action="cerrar_sesion.php">
          <button>Cerrar sesion</button>
        </form> 
      </div>
    </div>
  </main>

  
  



</body>
</html>
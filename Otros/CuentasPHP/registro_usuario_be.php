<?php
  include("conexion_be.php");
  
  $usuario = $_POST["usuario"];
  $correo = $_POST["correo"];
  $contrasena = $_POST["contrasena"];
  $contrasena = hash("sha512", $contrasena); // Encriptar contraseñas (150char)

  $query = "INSERT INTO usuarios(usuario, correo, contrasena)
            VALUES('$usuario', '$correo', '$contrasena')";
  
  // Verificar q no se repitan
  $verificacion_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

  if(mysqli_num_rows($verificacion_correo) > 0 ){
    echo '
      <script>
        alert("Este correo ya esta registrado! intente con otro");
        window.location = "index.php";
      </script>
    ';
    exit();
  }
  
  $ejecutar = mysqli_query($conexion, $query);

  if ($ejecutar) {
    echo '
      <script>
        alert("Usuario creado Exitosamente, Por favor inicie sesión");
        window.location = "index.php";
      </script>
    ';
  }

  mysqli_close($conexion);
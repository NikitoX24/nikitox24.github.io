<?php
  include("conexion_be.php");
  
  $nombre_completo = $_POST["nombre_completo"];
  $correo = $_POST["correo"];
  $usuario = $_POST["usuario"];
  $contrasena = $_POST["contrasena"];
  $contrasena = hash("sha512", $contrasena); // Encriptar contraseñas (150char)

  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
  
  // Verificar q no se repitan
  $verificacion_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

  if(mysqli_num_rows($verificacion_correo) > 0 ){
    echo '
      <script>
        alert("Este correo ya esta registrado! intente con otro")
        window.location = "index.php";
      </script>
    ';
    exit();
  }
  
  $ejecutar = mysqli_query($conexion, $query);

  if ($ejecutar) {
    echo '
      <script>
        alert("Usuario Creado exitosamente!")
        window.location = "index.php";
      </>
    ';
  }

  mysqli_close($conexion);
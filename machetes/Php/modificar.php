<?php
include("Conexion.php");
// Modificar cuenta

$id = $_GET['id'];

$solicitud = "SELECT * FROM datos WHERE id=$id";
$resultado = mysqli_query($conexion, $solicitud);
?>

<form action="update.php" method="POST">
<?php
while($fila = mysqli_fetch_array($resultado)){
  echo "Nombre: <input type='text' name='nombre' value='".$fila['nombre']."'/><br>";
  echo "Apellido: <input type='text' name='apellido' value='".$fila['apellido']."'/><br>";
  echo "Edad: <input type='text' name='edad' value='".$fila['edad']."'/><br>";
  echo "Celular: <input type='text' name='celular' value='".$fila['celular']."'/><br>";
  echo "<input type='hidden' name='id' value='".$id."'/>";
}
?>
<input type="submit" name="submit" value="Submit"/>
</form>
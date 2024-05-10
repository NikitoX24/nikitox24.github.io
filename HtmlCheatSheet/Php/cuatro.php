<?php
include("Conexion.php");

$id = $_GET['id'];

$solicitud = "SELECT * FROM datos WHERE ID=$id";
$resultado = mysqli_query($conexion, $solicitud);
?>

<form action="cinco.php" method="POST">
<?php
while($fila = mysqli_fetch_array($resultado)){
  echo "Nombre: <input type='text' name='nombre' value='".$fila['Nombre']."'/><br>";
  echo "Apellido: <input type='text' name='apellido' value='".$fila['Apellido']."'/><br>";
  echo "Edad: <input type='text' name='edad' value='".$fila['Edad']."'/><br>";
  echo "Celular: <input type='text' name='celular' value='".$fila['Celular']."'/><br>";
  echo "<input type='hidden' name='id' value='".$id."'/>";
}
?>
<input type="submit" name="submit" value="Submit"/>
</form>
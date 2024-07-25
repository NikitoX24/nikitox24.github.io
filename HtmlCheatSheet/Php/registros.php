<?php
// consultar y modificar una tabla

include("Conexion.php");

$solicitud = "SELECT * FROM datos";
$resultado = mysqli_query($conexion, $solicitud);

echo " <table border='1'> <tr><td>NOMBRE Y APELLIDO</td><td>EDAD</td><td>CELULAR</td><td colspan='2'>ACCIONES</td></tr>";
while($fila = mysqli_fetch_array($resultado)){
  echo "<tr>";
  echo "<td>". $fila['nombre']." ".$fila['apellido']. "</td>";
  echo "<td>". $fila['edad']. "</td>";
  echo "<td>". $fila['celular']. "</td>";
  echo "<td><a href='eliminar.php?id=". $fila['id']. "'>Eliminar</a></td>"; // Eliminar cuenta .php
  echo "<td><a href='modificar.php?id=". $fila['id']. "'>Cambiar</a></td>"; // Modificar cuenta .php
  echo "</tr>";
}
echo "</table>";
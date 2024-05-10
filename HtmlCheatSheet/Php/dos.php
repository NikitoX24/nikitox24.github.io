<?php
include("Conexion.php");

$solicitud = "SELECT * FROM datos";
$resultado = mysqli_query($conexion, $solicitud);

echo " <table border='1'> <tr><td>NOMBRE Y APELLIDO</td><td>EDAD</td><td>CELULAR</td><td colspan='2'>ACCIONES</td></tr>";
while($fila = mysqli_fetch_array($resultado)){
  echo "<tr>";
  echo "<td>". $fila['Nombre']." ".$fila['Apellido']. "</td>";
  echo "<td>". $fila['Edad']. "</td>";
  echo "<td>". $fila['Celular']. "</td>";
  echo "<td><a href='tres.php?id=". $fila['ID']. "'>Eliminar</a></td>";
  echo "<td><a href='cuatro.php?id=". $fila['ID']. "'>Cambiar</a></td>";
  echo "</tr>";
}
echo "</table>";
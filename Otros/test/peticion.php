<?php

if ($_POST['nombre'] == "Nico") {
  echo json_encode("Bienvenido ".$_POST["nombre"]);
}
<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="no-follow">
  <?php
    if(!isset($title)){ $title = "Pagina"; } // si no tiene titulo...
    if(!isset($color)){ $color = "#003e1e"; } // si no tiene color...
    echo '<link rel="icon" href="'.$server_dir.'logo.png">';
    echo '<meta name="theme-color" content="'.$color.'">'; 
    echo '<title>'.$title.'</title>';
  ?>
</head>
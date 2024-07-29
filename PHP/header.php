<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie-edge"> <!-- Compatible con Internet Explorer y Edge -->
  <meta name="robots" content="no-follow">
  <?php
    if(!isset($title)){ $title = "Pagina"; } // si no tiene titulo...
    echo '<link rel="icon" href="'.$server_dir.'logo.png">';
    echo '<title>'.$title.'</title>';
  ?>
</head>
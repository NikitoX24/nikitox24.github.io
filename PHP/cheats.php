<?php

// Titulo CheatSheet
if($title != "Index"){ echo '<h1 class="titulo">'.$title.' CheatSheet</h1>'; }

// Iconos
echo '
  <div class="iconosFlex"> 
    <table class="ch-HTML" onclick="loadHTML()"> <caption> HTML </caption> 
      <td><img src="'.$imgs_dir.'HTML2.png"></td> </table>

    <table class="ch-CSS" onclick="loadCSS()">   <caption> CSS </caption> 
      <td><img src="'.$imgs_dir.'CSS2.png"></td> </table>

    <table class="ch-JS" onclick="loadJS()">     <caption> JS </caption> 
      <td><img src="'.$imgs_dir.'JS2.png"></td> </table>

    <table class="ch-PHP" onclick="loadPHP()">   <caption> PHP </caption> 
      <td><img src="'.$imgs_dir.'PHP2.png"></td> </table>
  </div>
  ';


  // si no tienen colores ignorar
  if(!isset($back_color) && !isset($shadow1) && !isset($shadow2)){
    $back_color = "rgba(0, 0, 255, .05)";
    $shadow1 = "rgba(0, 119, 255, 0.164)";
    $shadow2 = "rgba(0, 0, 255, 0.1)";
  }

  // Style
  echo '
  <style>
    /* section color */
    section {
      background-color: '.$back_color.';
      box-shadow: inset 0 40px 0 0 '.$shadow1.', 4px 4px 15px 5px '.$shadow2.';
    }

    /* icon actual */
    .ch-'.$title.' {
      filter: blur(0) grayscale(0) drop-shadow(0 0 10px black) !important;
      transform: scale(1.1);
    }
    
  </style>

';
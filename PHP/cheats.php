<?php

echo '<header>';
echo '<h1 class="titulo">'.$title.' CheatSheet</h1>';

// iconos CheatSheets
echo ' 
<div class="iconosFlex"> 
  <a href="'.$html_dir.'">  <img src="'.$imgs_dir.'html.png" alt="html" class="icons filtrogris ch-html"> </a>
  <a href="'.$css_dir.'">   <img src="'.$imgs_dir.'css.png"  alt="css"  class="icons filtrogris ch-css">  </a>
  <a href="'.$js_dir.'">    <img src="'.$imgs_dir.'js.png"   alt="js"   class="icons filtrogris ch-js">   </a>
  <a href="'.$php_dir.'">   <img src="'.$imgs_dir.'php.png"  alt="php"  class="icons filtrogris ch-PHP">  </a>
</div>
';

// Style
echo ' <style>';
echo '   section {'; // Color de los bordes
echo '     background-color: '.$back_color.';';
echo '     box-shadow: inset 0 40px 0 0 '.$shadow1.', 4px 4px 15px 5px '.$shadow2.';';
echo '   }';
echo '   .ch-'.$title.' {'; // ICON
echo '     height: 75px;';
echo '     filter: none;';
echo '     transform: scale(1.2);';
echo '   }';
echo ' </style>';
echo ' </header>';
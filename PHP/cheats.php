<?php

echo '<header>';
echo '<h1 class="titulo">'.$title.' CheatSheet</h1>';

// iconos CheatSheets
echo ' <div class="iconosFlex">';
echo '   <a href="'.$cheat_dir.'HTML.html">  <img src="'.$imgs_dir.'html.png" alt="html" class="icons filtrogris"></a>';
echo '   <a href="'.$cheat_dir.'CSS.html">   <img src="'.$imgs_dir.'css.png"  alt="css"  class="icons filtrogris"></a>';
echo '   <a href="'.$cheat_dir.'JS.html">    <img src="'.$imgs_dir.'js.png"   alt="js"   class="icons filtrogris"></a>';
echo '   <a href="'.$cheat_dir.'PHP.html">   <img src="'.$imgs_dir.'php.png"  alt="php"  class="icons"></a>';
echo ' </div>';

// Color de los bordes
echo ' <style>';
echo '   section {';
echo '     background-color: '.$back_color.';';
echo '     box-shadow: inset 0 40px 0 0 '.$shadow1.', 4px 4px 15px 5px '.$shadow2.';';
echo '   }';
echo ' </style>';

echo ' </header>';
<?php
  $title = "Index";
  $color = "#003e1e";
  require("../PHP/config.php");
  require("../PHP/header.php");


  echo '<div class="round-index">';
  // Texto
  echo '<h2 class="centred">'.$logo_25px.' CheatSheets '.$logo_25px.'</h2><hr>';

  // CheatSheet iconos .html
  echo '<a href="'.$html_dir.'.html"> <img src="'.$imgs_dir.'html.png" alt="html" class="icons_index"> </a> ';
  echo '<a href="'.$css_dir. '.html"> <img src="'.$imgs_dir.'css.png"  alt="css"  class="icons_index"> </a> ';
  echo '<a href="'.$js_dir.  '.html"> <img src="'.$imgs_dir.'js.png"   alt="js"   class="icons_index"> </a> ';
  echo '<a href="'.$php_dir. '.html"> <img src="'.$imgs_dir.'php.png"  alt="php"  class="icons_index"> </a> ';

  echo '<br>';
  
  // CheatSheet iconos .php
  echo '<a href="'.$html_dir.'.php"> <img src="'.$imgs_dir.'html.png" alt="html" class="icons_index"> </a> ';
  echo '<a href="'.$css_dir. '.php"> <img src="'.$imgs_dir.'css.png"  alt="css"  class="icons_index"> </a> ';
  echo '<a href="'.$js_dir.  '.php"> <img src="'.$imgs_dir.'js.png"   alt="js"   class="icons_index"> </a> ';
  echo '<a href="'.$php_dir. '.php"> <img src="'.$imgs_dir.'php.png"  alt="php"  class="icons_index"> </a> ';
  
?>
<hr>

  <!-- Otros -->
  <form action="../PHP/index.php"> 
    <input type="submit" value="index.php" />
  </form>
  <form action="../HtmlCheatSheet/Librerias&Frameworks/Bootstrap/Bootstrap.html">
    <input type="submit" value="bootstrap.html" />
  </form>
  <form action="../Otros/Test.html">
    <input type="submit" value="Test" />
  </form>
  <form action="../Otros/ConvertirTexto.html">
    <input type="submit" value="ConvertirTexto" />
  </form>
  <form action="../Otros/MC.html">
    <input type="submit" value="MC" />
  </form>
  <form action="../Otros/VideoText.html">
    <input type="submit" value="HoraVideo" />
  </form>  
  <form action="../Otros/social.html">
    <input type="submit" value="social" />
  </form>
  <br> <hr>

  <!-- Ejercicios -->
  <h3 class="centred"><u>Juegos</u></h3>
  <form action="../Ejercicios/Ahorcado.html">
    <input type="submit" value="Ahorcado" />
  </form> <br>
  <form action="../Ejercicios/TaTeTi.html">
    <input type="submit" value="TaTeTi" />
  </form>
</div>


<?php require("footer.php");
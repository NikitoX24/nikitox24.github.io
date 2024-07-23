<?php
  require("config.php");

  $title = "Index";
  $color = "#003e1e";

  require("header.php");
?>
<!-- Pags -->
<!-- <div class="round"> -->
  <h2 class="centred"><span>&#x263A;</span><ins>Dev-Web CheatSheets</ins>.</h2><hr>

  <!-- CheatSheet -->
  <?php
    echo '<a href="'.$server_dir.'HtmlCheatSheet/HTML.html"><img src="'.$imgs_dir.'html.png" alt="html" class="icons"></a> ';
    echo '<a href="'.$server_dir.'HtmlCheatSheet/CSS.html"><img src="'.$imgs_dir.'css.png" alt="css" class="icons"></a> ';
    echo '<a href="'.$server_dir.'HtmlCheatSheet/JavaScript.html"><img src="'.$imgs_dir.'js.png" alt="js" class="icons"></a> ';
    echo '<a href="'.$server_dir.'HtmlCheatSheet/php.html"><img src="'.$imgs_dir.'php.png" alt="php" class="icons"></a> ';
  ?>
  <hr>

  <!-- Otros -->
  <form action="PHP/index.php">
    <input type="submit" value="index.php" />
  </form>
  <form action="HtmlCheatSheet\Librerias&Frameworks\Bootstrap\Bootstrap.html">
    <input type="submit" value="bootstrap.php" />
  </form>
  <form action="Otros/Test.html">
    <input type="submit" value="Test" />
  </form>
  <form action="Otros/ConvertirTexto.html">
    <input type="submit" value="ConvertirTexto" />
  </form>
  <form action="Otros/MC.html">
    <input type="submit" value="MC" />
  </form>
  <form action="Otros/VideoText.html">
    <input type="submit" value="HoraVideo" />
  </form>
  <br>
  
  <form action="Otros/social.html">
    <input type="submit" value="social" />
  </form>
  <br> <hr>

  <!-- Ejercicios -->
  <h3 class="centred"><u>Juegos</u></h3>
  <form action="Ejercicios/Ahorcado.html">
    <input type="submit" value="Ahorcado" />
  </form> <br>
  <form action="Ejercicios/TaTeTi.html">
    <input type="submit" value="TaTeTi" />
  </form>
</div>





<!-- JavaScript -->
<script src="index.js"></script>

</body>
</html>
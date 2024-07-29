<?php
$title = "Index";
require("PHP/config.php");
include_once("PHP/header.php");
include_once("PHP/navbar.php");

// round + Texto
echo '<div class="round-index">';
  echo '<h1>'.$logo_25px.'CheatSheets'.$logo_25px.'</h1><hr>';

  // CheatSheet iconos .php
  include("PHP/cheats.php");

  // CheatSheet iconos Lib-Fram
  echo '    
    <div class="iconosFlex">
      <table class="ch-BS" onclick="loadBS()"> <caption> BtSp </caption> 
        <td><img src="'.$imgs_dir.'bootstrap-icon.png"></td> </table>
    </div>
  ';
  ?>
  <hr>
  <link rel="stylesheet" href="../HtmlCheatSheet/STYLE.css">

  <!-- Otros -->
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
  <h3><u>Juegos</u></h3>
  <form action="../Otros/Ejercicios/Ahorcado.html">
    <input type="submit" value="Ahorcado" />
  </form>
  <form action="../Otros/Ejercicios/TaTeTi.html">
    <input type="submit" value="TaTeTi" />
  </form>
</div> <!-- fin del round -->


<?php include_once("PHP/footer.php"); ?>
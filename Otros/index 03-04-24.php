<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#1bb566"> <!-- Color de la barra de navegador -->
  <title> Index (localhost) </title>
  <link rel="icon" href="logo.png">
</head>
<!-- Sin uso -->
<?php
  $host = $_SERVER['HTTP_HOST'];
  $image_path = $host.'/Imgs/';
?>
<body>

  <!-- Pags -->
  <div class="round">

    <h2 class="centred"><span>&#x263A;</span><ins>Mis Paginas de Prueba</ins>.</h2>
    <hr>

    <!-- CheatSheet -->
    <a href="HtmlCheatSheet\htmlcheatsheet.html"><img src="Imgs/htmlcssjs.png" alt="HtmlCssJss" class="icons imgcentred"></a> <!-- TODO: -->
    <hr>
    <a href="HtmlCheatSheet\htmlcheatsheet.html"><img src="Imgs/html.png" alt="html" class="icons"></a>
    <a href="HtmlCheatSheet\CssCheatSheet.html"><img src="Imgs/css.png" alt="css" class="icons"></a>
    <a href="HtmlCheatSheet\JSCheatSheet.html"><img src="Imgs/js.png" alt="js" class="icons"></a>
    <hr>

    <!-- Otros -->
    <h3 class="centred"><u>PHP</u></h3>
    <form action="HtmlCheatSheet/php.html">
      <input type="submit" value="PHP" />
    </form> 
    <form action="HtmlCheatSheet/php.php">
      <input type="submit" value="test" />
    </form> <br> 
    <hr>
    <h3 class="centred"><u>Otros</u></h3>
    <form action="Otros/Test.html">
      <input type="submit" value="Test" />
    </form>
    <form action="Otros/Cubo MC.html">
      <input type="submit" value="MC" />
    </form>
    <form action="Otros/VideoText.html">
      <input type="submit" value="HoraVideo" />
    </form>
    <form action="Otros/VideoText.html">
      <input type="submit" value="textoVideo" />
    </form>
    <br>
    
    <form action="Otros/bar.html">
      <input type="submit" value="bar" />
    </form>
    <form action="Otros/social.html">
      <input type="submit" value="social" />
    </form>
    <br> <hr>


    <h3 class="centred"><u>Ejercicios</u></h3>
    <form action="Ejercicios/Ahorcado.html">
      <input type="submit" value="Ahorcado" />
    </form> <br>
    <form action="Ejercicios/TaTeTi.html">
      <input type="submit" value="TaTeTi" />
    </form> <br>

    <!-- Ejercicios HTML-CSS -->
    <details>
      <summary>Ejercicios HTML-CSS</summary>
      <div class="summaryBackground">
        <form action="Ejercicios/HTML-CSS/2- Ejemplo/ejemplo.html">
          <input type="submit" value="ejemplo" />
        </form>

        <form action="Ejercicios/HTML-CSS/3- Jargon-file/jargon-file.html">
          <input type="submit" value="jargon-file" />
        </form>

        <form action="Ejercicios/HTML-CSS/4.1- Curriculum-vitae/curriculum-vitae.html">
          <input type="submit" value="curriculum-vitae" />
        </form>

        <form action="Ejercicios/HTML-CSS/4.2- Curriculum-vitae-largo/curriculum-vitae-largo.html">
          <input type="submit" value="curriculum-vitae-largo" />
        </form>

        <form action="Ejercicios/HTML-CSS/5.2- Emoji-peliculas/emoji-peliculas.html">
          <input type="submit" value="emoji-peliculas" />
        </form>

        <form action="Ejercicios/HTML-CSS/6.1- Refranes 1/refranes-1.html">
          <input type="submit" value="refranes-1" />
        </form>

        <form action="Ejercicios/HTML-CSS/6.2- Citas-dijkstra/citas-dijkstra.html">
          <input type="submit" value="citas-dijkstra" />
        </form>

        <form action="Ejercicios/HTML-CSS/necrologicas/necrologicas-2014.html">
          <input type="submit" value="necrologicas-2014" />
        </form>
      </div>
    </details> <br>

    <!-- Ejercicios JavaScript -->
    <details>
      <summary>Ejercicios JavaScript</summary>
      <div class="summaryBackground">
        <form action="Ejercicios/JavaScript/Ejercicio1.html">
          <input type="submit" value="Ejerciocio 1" />
        </form>
      </div>
    </details> <br>
  </div>

  <!-- Probando... -->
  <div class="round">
    <h3 class="centred"><u>Probando...</u></h3> <hr>

    <!-- HORA -->
    <div id="HoraPS" class="centred">Hora: 00:00:00</div>
    <script>
      printTime();
      function printTime() {
        var d = new Date();
        var hours = d.getHours();
        var mins = d.getMinutes();
        var secs = d.getSeconds();
        if(secs < 10) { secs = "0"+secs }
        var horaPS = document.getElementById("HoraPS");
        horaPS.innerHTML = "Hora: " + hours+":"+mins+":"+secs;
      }
      setInterval(printTime, 1000);
    </script>
    <hr>

    <!-- Elejir opciones -->
    <input placeholder="Elije:" list="Lista">
    <datalist id="Lista">
      <option value="uno"></option>
      <option value="dos"></option>
      <option value="tres"></option>
    </datalist>
    <hr>

    <label for="escojerUno">
      Escoje uno:
    </label>
    <select>
      <option>Seleccionar: </option>
        <optgroup label="Color">
          <option>Red</option>
          <option>Blue</option>
        </optgroup>
        <optgroup label="Numero">
          <option>1</option>
          <option>2</option>
        </optgroup>
    </select>
    <hr>

    <!-- Busqueda -->
    <style>
      .search {
        position: relative;
        width: 250px;
        background-color: #fff;
        display: flex;
      }

      .search::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #0170F0;
        transform: scaleX(0);
        transform-origin: center;
        transform-origin: left;
        transition: transform .25s;
      }

      .search:focus-within::before {
        transform: scale(1)
      }

      .search input,
      .search button {
        border: none;
        outline: none;
        background-color: transparent;
        color: #8e8e8e;
      }

      .input {
        width: 100%;
        padding: 10px;
      }

      .button {
        display: grid;
        place-items: center;
        width: 50px;
        font-size: 19px;
        cursor: pointer;
        transition: color .25%;
      }

      .button:hover {
        color: #0170F0
      }
    </style>
    <form class="search">
      <input type="text" placeholder="Buscar..." class="input">
      <button type="submit" class="button">
        <i class="ri-search-2-Line"></i>
      </button>
    </form>
    <hr>

    <!-- Loader Circle -->
    <div class="loader"></div>
    <style>
      .loader {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: #000;
        animation: zoom 1.5s ease infinite;
      }

      @keyframes zoom {
        0% {
          transform: scale(0);
          opacity: 1;
        }
        100% {
          transform: scale(1);
          opacity: 0;
        }
      }
    </style>
    <hr>

    <!-- Bar -->
    <style>
      .barra {
        /* margin: 0 auto;  */
        height: 20px;
        width: 30%;
        background: gray;
        border-radius: 50px;
        overflow: hidden;
      }
      .progreso {
        display: block;
        height: 100%;
        width: 50%;
        border-radius: 50px;
        background-image: linear-gradient( -45deg,yellow 25%,green 25%,green 50%,yellow 50%,yellow 75%,green 75%,green);
        background-size: 50px 50px;
        animation: load 2s infinite linear;
      }

      @keyframes load {
        0% { background-position: 0 0; }
        100% { background-position: 50px 50px; }
      }
    </style>
    <p> cargando... </p>
    <div class="barra">
      <span class="progreso"> </span>
    </div>
    <script>
      setInterval(function () {
        let bar = document.getElementsByClassName("progreso")[0]
        let fondo = document.getElementsByClassName("barra")[0]

        if (bar.clientWidth >= fondo.clientWidth) {
          bar.style.width = 1 + "px";
        }
      }, 30)
    </script>



  </div>


  <!-- ESPACIO EN BLANCO -->
  <div style="height: 700px;"></div>


<!-- Footer -->
<footer>
  <div class="copyright">
    © 2022 My Blog. All rights reserved.
  </div>
</footer>




<section id="Final">

<!-- JavaScript -->
<script type="text/javascript" src="index.js"></script>
<style>
  body{
    background-color: beige;
    background-image: url("Imgs/TileW.jpg");
    background-repeat: repeat; /*repeat-x, repeat-y, no-repeat, inherit */
    background-attachment: scroll; /* fixel, scroll, inherit */
  }

  form{
    text-align: center; /* left, right, center, justify */
  }

  summary{
    text-align: center;
  }

  .centred{
    text-align: center; /* left, right, center, justify */
  }

  .titles{
    text-shadow: 5px 2px 4px grey;
    text-align: center;
    text-decoration: underline;
    /* text-transform: uppercase; */
  }

  .round{
    -webkit-border-radius: 24px;
    border-radius: 7px;
    border: 1px solid grey;
    max-width: 330px;
    padding: 5px;
    box-shadow: 10px 10px 5px 5px rgba(136, 136, 136, 0.207);
    background-color: rgba(0, 0, 0, 0.281);
    margin: auto;
    margin-top: 60px;
  }

  .bar{
    background-color: rgba(0, 0, 0, 0.563);
    height: 40px;
    width: 100%;
    position: relative;
    top: -20px;
  }

  .blur{
    filter: blur(5px);
  }

  /* copyright */
  .copyright {
    font-size: 8pt;
    text-align: right;
    padding-bottom: 10px;
    color: grey;
  }

  /* icons */
  .icons{
    height: 100px;
    margin: 3px;
  }
  .icons:hover{
    height: 105px;
    margin: 0;
  }
  .imgcentred{
    margin-left: auto;
    margin-right: auto;
    display: block;
  }
  .imgcentred:hover{
    margin-left: auto;
    margin-right: auto;
    display: block;
  }

  .summaryBackground{
    background-color: rgba(0, 0, 0, 0.137);
  }
</style>

</body>
</html>
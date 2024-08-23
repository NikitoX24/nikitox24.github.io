<?php
$title = "BS";

require("../PHP/config.php");
include_once("../PHP/navbar.php");
include_once("../PHP/header.php");
include("../PHP/cheats.php");

?>

<link rel="stylesheet" href="STYLE.css">
<link rel="stylesheet" href="Lib-Fram/Bootstrap/css/bootstrap.min.css">

<style>
  html {
    scroll-behavior: auto !important;
  }

  body {
    max-width: 90%;
    margin: auto;
  }

  h1,
  h3,
  h4 {
    text-align: center;
    text-decoration: underline;
  }

  .section {
    border-radius: 12px;
    padding: 2px 10px 10px 10px;
    margin-bottom: 80px;
    background-color: rgba(128, 128, 128, 0.227);
  }

  NGreen {
    word-spacing: 10px;
    font-size: smaller;
  }

  NRed,
  NPurp {
    font-weight: 400;
  }

  #screenSize {
    margin: 0;
    left: 10px;
    bottom: 0;
    position: fixed;
    font-family: Arial;
    background-color: rgba(128, 128, 128, 0.448);
    padding: 5px;
    border-radius: 5px;
    border: 1px solid black;
  }

  .cod {
    font-size: 0.8em;
    max-height: 200px;
    width: 100%;
    overflow: auto;
    white-space: nowrap;
  }

  /*  */
  svg {
    height: 20px;
  }

  .bordeBase,
  .borde1,
  .borde2,
  .borde3,
  .borde4 {
    height: 40px;
    display: flex;
    justify-content: center;
    border: 1px solid black;
    background-color: white;
    padding-inline: 15px;
  }

  .container {
    margin-block: 15px;
  }

  .bordeBase {
    background-color: white;
  }

  .borde1 {
    background-color: aquamarine;
  }

  .borde2 {
    background-color: olivedrab;
  }

  .borde3 {
    background-color: orangered;
  }

  .borde4 {
    background-color: blueviolet;
  }
</style>

<body>
  <!-- Container -->
  <div class="section">
    <h3> Container </h3>
    <div class="container">
      <div class="row">
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
        <div class="col bordeBase">col</div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-1 borde1">col1</div>
        <div class="col-2 borde2">col-2</div>
        <div class="col-4 borde3">col-4</div>
        <div class="col-5 borde4">col-5</div>
      </div>
    </div>
    <div class="flex">
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>container</NGreen>"> <br>
        <NTab></NTab> &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>row</NGreen>"> <br>
        <NTab></NTab>
        <NTab></NTab> &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>col</NGreen>"> &lt;<NRed>/div</NRed>> <br>
        <NTab></NTab> &lt;<NRed>/div</NRed>> <br> &lt;<NRed>/div</NRed>>
      </div>
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>container-fluid</NGreen>"> <br>
        <NTab></NTab> &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>row</NGreen>"> <br>
        <NTab></NTab>
        <NTab></NTab> &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>col-1/2/4/5</NGreen>"> &lt;<NRed>/div</NRed>> <br>
        <NTab></NTab> &lt;<NRed>/div</NRed>> <br> &lt;<NRed>/div</NRed>>
      </div>
    </div>
  </div>

  <!-- Responsive -->
  <div class="section">
    <h3> Responsive (segun pantalla)</h3>
    <div class="container">
      <div class="row">
        <div class="col-12  col-sm-6   col-md-8   col-lg-4  col-xl-8  borde1" id="col1"></div>
        <div class="col-12  col-sm-6   col-md-4   col-lg-4  col-xl-2  borde2" id="col2"></div>
        <div class="col-12  col-sm-12  col-md-12  col-lg-4  col-xl-2  borde3" id="col3"></div>
      </div>
    </div>
    <div class="flex">
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>col-12 col-sm-6 col-md-8 col-lg-4 col-xl-8</NGreen>"> &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>col-12 col-sm-6 col-md-4 col-lg-4 col-xl-2</NGreen>"> &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp>class=</NPurp>"<NGreen>col-12 col-sm-12 col-md-12 col-lg-4 col-xl-2</NGreen>"> &lt;<NRed>/div</NRed>>
      </div>
      <div class="cod columnas">
        <b>COL</b> &nbsp; ( < 575) ------ <NGray>COLumna.</NGray> <br>
          <b>XS</b> -- ( < 575) ------ <NGray>Extra Small.</NGray> <br>
            <b>SM</b> - (576 - 767) --- <NGray>Small.</NGray> <br>
            <b>MD</b> - (768 - 991) --- <NGray>Middle.</NGray> <br>
            <b>LG</b> -- (992 - 1199) -- <NGray>Large.</NGray> <br>
            <b>XL</b> -- (1200 > ) ----- <NGray>Extra Large.</NGray>
      </div>
    </div>
    <script>
      // Mostrar Col text según pantalla
      let col1 = document.querySelector("#col1");
      let col2 = document.querySelector("#col2");
      let col3 = document.querySelector("#col3");

      setInterval(ResponsiveJS, 500);

      function ResponsiveJS() {
        screenSize = window.innerWidth;
        if (screenSize < XS) {
          col1.innerHTML = "col-12";
          col2.innerHTML = "col-12";
          col3.innerHTML = "col-12";
        }
        if (screenSize > SM) {
          col1.innerHTML = "col-6";
          col2.innerHTML = "col-6";
          col3.innerHTML = "col-12";
        }
        if (screenSize > MD) {
          col1.innerHTML = "col-8";
          col2.innerHTML = "col-4";
          col3.innerHTML = "col-12";
        }
        if (screenSize > LG) {
          col1.innerHTML = "col-4";
          col2.innerHTML = "col-4";
          col3.innerHTML = "col-4";
        }
        if (screenSize > XL) {
          col1.innerHTML = "col-8";
          col2.innerHTML = "col-2";
          col3.innerHTML = "col-2";
        }
      }
    </script>
    <hr>

    <h4> d-none (Display None) </h4>
    <div class="container">
      <div class="row">
        <div class="col-12  col-md-2  d-none  d-md-block  borde1">d-none</div>
        <div class="col-12  col-md-8  borde2">col-8</div>
        <div class="col-12  col-md-2  d-none  d-md-block  borde3">d-none</div>
      </div>
    </div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp>class=</NPurp>"<NGreen>col-12 col-md-2 d-none d-md-block</NGreen>"> &lt;<NRed>/div</NRed>> <br>
      &lt;<NRed>div</NRed>
      <NPurp>class=</NPurp>"<NGreen>col-12 col-md-8 borde2</NGreen>"> &lt;<NRed>/div</NRed>> <br>
      &lt;<NRed>div</NRed>
      <NPurp>class=</NPurp>"<NGreen>col-12 col-md-2 d-none d-md-block</NGreen>"> &lt;<NRed>/div</NRed>>
    </div>
  </div>

  <!-- Align (Posicion) -->
  <div class="section">
    <h3> Alineacion </h3>
    <div class="container">
      <div class="row bordeBase">
        <div class="mx-auto borde1" style="width: auto;">mx-auto</div>
      </div>
      <div class="row bordeBase">
        <div class="col">
          <div class="float-start borde2">float-start</div>
          <div class="float-end borde3">float-end</div>
        </div>
      </div>
    </div>
    <hr>

    <!-- (row) justify-content -->
    <div class="container">
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-start</div>
      </div>
      <div class="row justify-content-start bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-end</div>
      </div>
      <div class="row justify-content-end bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-center</div>
      </div>
      <div class="row justify-content-center bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde2"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-evenly</div>
      </div>
      <div class="row justify-content-evenly bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde2"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-around</div>
      </div>
      <div class="row justify-content-around bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde2"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) justify-content-between</div>
      </div>
      <div class="row justify-content-between bordeBase">
        <div class="col-3 borde1"> </div>
        <div class="col-3 borde2"> </div>
        <div class="col-3 borde3"> </div>
      </div> <br>
    </div>
    <hr>

    <!-- (row) align-items -->
    <div class="container">
      <div class="row">
        <div class="mx-auto" style="width: auto;">(row) align-items-start</div>
        <div class="mx-auto" style="width: auto;">(row) align-items-center</div>
        <div class="mx-auto" style="width: auto;">(row) align-items-end</div>
      </div>
      <div class="row" style="height: 100px;">
        <div class="col bordeBase h-100 align-items-start">
          <div class="col borde1"> </div>
          <div class="col borde1"> </div>
        </div>
        <div class="col bordeBase h-100 align-items-center">
          <div class="col borde2"> </div>
          <div class="col borde2"> </div>
        </div>
        <div class="col bordeBase h-100 align-items-end">
          <div class="col borde3"> </div>
          <div class="col borde3"> </div>
        </div>
      </div> <br>
      <div class="row bordeBase justify-content-around" style="height: 100px;">
        <div class="borde1 align-self-start" style="width: auto;">align-self-start</div>
        <div class="borde2 align-self-center" style="width: auto;">align-self-center</div>
        <div class="borde3 align-self-end" style="width: auto;">align-self-end</div>
      </div>
    </div>
    <hr>

    <!-- Fix -->
    <h3>Fixed-Top</h3>
    <iframe src="https://getbootstrap.com/docs/3.4/examples/navbar-fixed-top/" frameborder="0" width="100%" height="100px"></iframe>
    <div class="cod">
      <NPurp>class=</NPurp>"<NGreen>Fixed-Top / Fixed-Bottom</NGreen>"
    </div>
    <hr>

    <!-- Sticky -->
    <div class="sticky-top">... Sticky-top ...</div>
    <div class="sticky-bottom">... Sticky-bottom ...</div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>sticky-top</NGreen>">... Sticky-top ...&lt;<NRed>/div</NRed>> <br>
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>sticky-bottom</NGreen>">... Sticky-bottom ...&lt;<NRed>/div</NRed>>
    </div>
  </div>

  <!-- Tamaños -->
  <div class="section">
    <h3> Tamaños </h3>
    <div class="flex">
      <div class="container">
        Width & Height
        <div class="bordeBase" style="height: 200px;">
          <div class="borde2 w-50 h-75">
            class=" w-50 &nbsp; h-75 " <br>
            (width 50%) <br> (height 75%)
          </div>
        </div>
      </div>
      <div class="container">
        Margin & Padding
        <div class="row bordeBase" style="height: 200px;">
          <div class="m-5" style="background-color: olivedrab;">
            m-5 (margin: 5px) <br> mt, mr, ml, mb, (0-5); <br><br>
            p-5 (padding: 5px) <br> pt, pr, pl, pb, (0-5);
          </div>
        </div>
      </div>
    </div>

    <hr>

    <h3>Ratio</h3>
    <div class="ratio ratio-21x9">
      <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
    </div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>ratio ratio-21x9</NGreen>"> <NGray>// 1x1, 4x3, 16x9, 21x9.</NGray>
      &lt;<NRed>/div</NRed>>
    </div>
  </div>

  <!-- Tipografia -->
  <div class="section">
    <h3>Tipografia</h3>
    <!--
    <p class="display-1">Ej. parrafo (display-1)</p>
    <p class="display-6">Ej. parrafo (display-6)</p> 
    
    <p class="fw-bold">Texto de ejemplo. (fw-bold)</p>
    <p class="fst-italic">Texto de ejemplo. (fst-italic)</p>
    <p class="fst-normal">Texto de ejemplo. (fst-italic).</p>
    <p class="font-monospace">Texto de ejemplo. (font-monospace).</p> <br> 
    
    <p class="text-lowercase">Texto Forzado A Minusculas (text-lowercase). </p>
    <p class="text-uppercase">Texto Forzado A Mayusculas (text-uppercase). </p>
    <p class="text-capitalize">Texto forzado a Capitalize (text-capitalize). </p> 
    
    <p class="text-decoration-none">Texto de ejemplo. (text-decoration-none)</p>
    <p class="text-decoration-underline">Texto de ejemplo. (text-decoration-underline).</p>
    <p class="text-decoration-line-through">Texto de ejemplo. (text-decoration-line-through) it.</p> 
    
    <p class="text-nowrap">(text-nowrap): <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eius porro animi, blanditiis accusamus temporibus iste commodi delectus cupiditate quisquam fuga labore veritatis tempora eos harum at magnam, soluta exercitationem. Lorem, ipsum dolor sit...</p> <hr> -->

    <p class="text-start"> parrafo alineado a la izquierda (text-start).</p>
    <p class="text-center"> parrafo alineado al centro (text-center).</p>
    <p class="text-end"> parrafo alineado a la derecha (text-end).</p>
    <hr>

    <b>User-select:</b>
    <p class="user-select-all">Este párrafo quedará completamente seleccionado al hacer clic en él. (.user-select-all)</p>
    <p class="user-select-none">Este párrado no se puede seleccionar. (.user-select-none)</p>
  </div>

  <!-- Colores -->
  <div class="section">
    <h3>Colores (textos / BackGround)</h3>
    <div class="flex">
      <div class="w-50">
        <div class="flex w-100">
          <div class="w-100 p-1 bg-primary text-white">.bg-primary</div>
          <div class="w-100 p-1 bg-primary-subtle text-primary-emphasis">.bg-primary-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-secondary text-white">.bg-secondary</div>
          <div class="w-100 p-1 bg-secondary-subtle text-secondary-emphasis">.bg-secondary-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-success text-white">.bg-success</div>
          <div class="w-100 p-1 bg-success-subtle text-success-emphasis">.bg-success-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-danger text-white">.bg-danger</div>
          <div class="w-100 p-1 bg-danger-subtle text-danger-emphasis">.bg-danger-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-warning text-dark">.bg-warning</div>
          <div class="w-100 p-1 bg-warning-subtle text-warning-emphasis">.bg-warning-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-info text-dark">.bg-info</div>
          <div class="w-100 p-1 bg-info-subtle text-info-emphasis">.bg-info-subtle</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-dark text-white">.bg-dark</div>
          <div class="w-100 p-1 bg-black text-white">.bg-black</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-dark-subtle text-dark-emphasis">.bg-dark-subtle</div>
          <div class="w-100 p-1 bg-body-secondary">.bg-body-secondary</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-body-tertiary">.bg-body-tertiary</div>
          <div class="w-100 p-1 bg-body text-body">.bg-body</div>
        </div>
        <div class="flex w-100">
          <div class="w-100 p-1 bg-light text-dark">.bg-light</div>
          <div class="vr"></div>
          <div class="w-100 p-1 bg-light-subtle text-light-emphasis">.bg-light-subtle</div>
          <div class="vr"></div>
          <div class="w-100 p-1 bg-white text-dark">.bg-white</div>
        </div>
      </div>

      <div class="w-50">
        <div class="p-1 bg-primary bg-gradient text-white">.bg-primary.bg-gradient</div>
        <div class="p-1 bg-secondary bg-gradient text-white">.bg-secondary.bg-gradient</div>
        <div class="p-1 bg-success bg-gradient text-white">.bg-success.bg-gradient</div>
        <div class="p-1 bg-danger bg-gradient text-white">.bg-danger.bg-gradient</div>
        <div class="p-1 bg-warning bg-gradient text-black">.bg-warning.bg-gradient</div>
        <div class="p-1 bg-info bg-gradient text-black">.bg-info.bg-gradient</div>
        <div class="p-1 bg-dark bg-gradient text-white">.bg-dark.bg-gradient</div>

        <div style="font-size: small;">
          <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Primary</a>
          <a href="#" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Secondary</a>
          <a href="#" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Success</a>
          <a href="#" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Danger</a>
          <a href="#" class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Warning</a>
          <a href="#" class="link-info link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Info</a>
          <a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Light</a>
          <a href="#" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dark</a>
          <a href="#" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Emphasis</a>
        </div>
        <div class="cod">
          &lt;<NRed>div</NRed>
          <NPurp> class</NPurp>="<NGreen>text-bg-primary p-2</NGreen>"> Primary &lt;<NRed>/div</NRed>> <br>
          &lt;<NRed>div</NRed>
          <NPurp> class</NPurp>="<NGreen>w-100 p-1 bg-primary text-white</NGreen>">.bg-primary&lt;<NRed>/div</NRed>> <br>
          &lt;<NRed>a</NRed>
          <NPurp> href</NPurp>="<NGreen>#</NGreen>" <NPurp>class</NPurp>="<NGreen>link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover</NGreen>">Primary link&lt;<NRed>/a</NRed>>
        </div>
      </div>
    </div>
  </div>

  <!-- Tablas -->
  <div class="section">
    <h3>Tabla</h3>
    <table class="table table-striped table-bordered table-hover table-dark">
      <tr>
        <td>Lun</td>
        <td>Mar</td>
        <td>Mier</td>
        <td>Jue</td>
        <td>Vie</td>
      </tr>
      <tr>
        <td>5</td>
        <td>5</td>
        <td>5</td>
        <td>5</td>
        <td>5</td>
      </tr>
      <tr>
        <td>12</td>
        <td>12</td>
        <td>12</td>
        <td>12</td>
        <td>12</td>
      </tr>
      <tr>
        <td>25</td>
        <td>25</td>
        <td>25</td>
        <td>25</td>
        <td>25</td>
      </tr>
    </table>
    <div class="cod">
      <<NRed>table</NRed>
        <NPurp>class</NPurp>="<NGreen>table table-striped table-bordered table-hover table-dark</NGreen>"> <<NRed>/table</NRed>>
    </div>
  </div>

  <!-- Imagenes -->
  <div class="section">
    <h3> Imagen </h3>
    <div class="flex">
      <img src="/Imgs/cat1.png" style="width: 200px;" class="img-fluid img-thumbnail" title="img-thumbnail">
      <img src="/Imgs/cat1.png" style="width: 200px;" class="img-fluid rounded" title="rounded">
      <img src="/Imgs/cat1.png" style="width: 200px;" class="img-fluid rounded-circle" title="rounded-circle">
      <img src="/Imgs/cat1.png" style="width: 200px;" class="img-fluid opacity-50" title="opacity-50">
    </div>
  </div>

  <!-- Alert -->
  <div class="section">
    <h3>Texto alert</h3>
    <!-- Alerts Colors -->
    <div>
      <div class="flex">
        <div class="alert alert-primary w-50" role="alert">
          <b>primary</b> alert!
        </div>
        <div class="alert alert-secondary w-50" role="alert">
          <b>secondary</b> alert!
        </div>
      </div>
      <div class="flex">
        <div class="alert alert-success w-50" role="alert">
          <b>success</b> alert!
        </div>
        <div class="alert alert-light w-50" role="alert">
          <b>light</b> alert!
        </div>
      </div>
      <div class="flex">
        <div class="alert alert-warning w-50" role="alert">
          <b>warning</b> alert!
        </div>
        <div class="alert alert-info w-50" role="alert">
          <b>info</b> alert!
        </div>
      </div>
      <div class="flex">
        <div class="alert alert-danger w-50" role="alert">
          <b>danger</b> alert!
        </div>
        <div class="alert alert-dark w-50" role="alert">
          <b>dark</b> alert!
        </div>
      </div>
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>alert alert-primary</NGreen>" <NPurp>role</NPurp>="<NGreen>alert</NGreen>"> <br>
        <NTab></NTab> &lt;<NRed>a</NRed>
        <NPurp> href</NPurp>="<NGreen>#</NGreen>" <NPurp>class</NPurp>="<NGreen>alert-link</NGreen>"><b>link</b>&lt;<NRed>/a</NRed>><br> &lt;<NRed>/div</NRed>>
      </div>
    </div>
    <hr>

    <!-- Botón Alerta -->
    <div id="liveAlertPlaceholder"> </div>
    <button type="button" class="btn btn-primary" id="liveAlertBtn">Botón Alerta</button>
    <a href="https://getbootstrap.com/docs/5.3/components/alerts/#live-example">
      https://getbootstrap.com/docs/5.3/components/alerts/#live-example
    </a>
    <script>
      const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
      const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
      }

      const alertTrigger = document.getElementById('liveAlertBtn')
      if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
          appendAlert('Nice, you triggered this alert message!', 'success')
        })
      }
    </script>
    <hr>

    <!-- Dismissible -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Felicidades</strong> la operación concluyó satisfactoriamente.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="cod">
      <<NRed>div</NRed>
        <NPurp>class</NPurp>="<NGreen>alert alert-success alert-dismissible fade show</NGreen>"> Text... <br>
        <NTab></NTab>
        <<NRed>button</NRed>
          <NPurp>type</NPurp>="<NGreen>button</NGreen>" <NPurp>class</NPurp>="<NGreen>btn-close</NGreen>" <NPurp>data-bs-dismiss</NPurp>="<NGreen>alert</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Close</NGreen>"><<NRed>/button</NRed>> <br>
            <<Nred>/div</Nred>>
    </div>
    <hr>

    <!-- Icons -->
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
      </svg>

      <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
        <div> An example alert with an icon </div>
      </div>

      <a href="https://getbootstrap.com/docs/5.3/components/alerts/#icons">
        https://getbootstrap.com/docs/5.3/components/alerts/#icons
      </a>
    </div>
  </div>

  <!-- Botones -->
  <div class="section">
    <h3>Boton</h3>
    <!-- Botones de colores -->
    <div class="row">
      <div class="col-3">
        <button class="btn btn-primary">Enviar</button> <button class="btn btn-outline-primary">Enviar</button> <br>
        <button class="btn btn-secondary">Enviar</button> <button class="btn btn-outline-secondary">Enviar</button>
      </div>
      <div class="col-3">
        <button class="btn btn-dark">Enviar</button> <button class="btn btn-outline-dark">Enviar</button> <br>
        <button class="btn btn-light">Enviar</button> <button class="btn btn-outline-light">Enviar</button>
      </div>
      <div class="col-3">
        <button class="btn btn-danger">Enviar</button> <button class="btn btn-outline-danger">Enviar</button> <br>
        <button class="btn btn-warning">Enviar</button> <button class="btn btn-outline-warning">Enviar</button>
      </div>
      <div class="col-3">
        <button class="btn btn-success">Enviar</button> <button class="btn btn-outline-success">Enviar</button> <br>
        <button class="btn btn-info">Enviar</button> <button class="btn btn-outline-info">Enviar</button>
      </div>
    </div> <br>
    <div class="cod">
      <<NRed>button</NRed>
        <NPurp>class</NPurp>="<NGreen>btn btn-dark</NGreen>">Enviar<<NRed>/button</NRed>>
    </div>
    <hr>

    <!-- Tamaños y estados -->
    <div class="d-grid"> <button class="btn btn-success">d-grid (parent)</button> </div>
    <hr>
    <div class="flex">
      <div> <!-- estado -->
        <button class="btn btn-success disabled">disabled</button>
        <button class="btn btn-success">-</button>
        <button class="btn btn-success active">active</button>
      </div>
      <div> <!-- tamaños -->
        <button class="btn btn-success btn-lg">btn-lg</button>
        <button class="btn btn-success">-</button>
        <button class="btn btn-success btn-sm">btn-sm</button>
      </div>
    </div>
    <hr>

    btn-group y dropdown: <br>
    <div class="btn-group">
      <button class="btn btn-success">Opcion 1</button>
      <button class="btn btn-success">Opcion 2</button>
      <!-- Dropdown -->
      <div class="btn-group dropdown">
        <button class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">Otras opciones</button>
        <div class="dropdown-menu">
          <div class="dropdown-header"> -Grupo-</div>
          <a href="#" class="dropdown-item">Opcion A</a>
          <a href="#" class="dropdown-item">Opcion B</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">Opcion C</a>
          <a href="#" class="dropdown-item">Opcion D</a>
        </div>
      </div>
    </div>
    <div class="cod">
      <<NRed>div</NRed>
        <NPurp>class</NPurp>="<NGreen>btn-group</NGreen>"> <br>
        <NTab></NTab>
        <<NRed>button</NRed>
          <NPurp>class</NPurp>="<NGreen>btn</NGreen>"> Opcion 1 <<NRed>/button</NRed>> <br>

            <NTab></NTab>
            <<NRed>div</NRed>
              <NPurp>class</NPurp>="<NGreen>btn-group dropdown <NGray>/*dropup*/</NGray>
              </NGreen>"> <br>

              <NTab></NTab>
              <NTab></NTab>
              <<NRed>button</NRed>
                <NPurp>class</NPurp>="<NGreen>btn dropdown-toggle</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>dropdown</NGreen>"> Otras opciones <<NRed>/button</NRed>> <br>

                  <NTab></NTab>
                  <NTab></NTab>
                  <<NRed>div</NRed>
                    <NPurp>class</NPurp>="<NGreen>dropdown-header</NGreen>"> -header- <<NRed>/div</NRed>><br>

                      <NTab></NTab>
                      <NTab></NTab>
                      <<NRed>a</NRed>
                        <NPurp>href</NPurp>="<NGreen>#</NGreen>" <NPurp>class</NPurp>="<NGreen>dropdown-item</NGreen>"> Opcion A <<NRed>/button</NRed>> <br>

                          <NTab></NTab>
                          <NTab></NTab>
                          <<NRed>div</NRed>
                            <NPurp>class</NPurp>="<NGreen>dropdown-divider</NGreen>"><<NRed>/div</NRed>><br>

                              <NTab></NTab>
                              <NTab></NTab>
                              <<NRed>a</NRed>
                                <NPurp>href</NPurp>="<NGreen>#</NGreen>" <NPurp>class</NPurp>="<NGreen>dropdown-item</NGreen>"> Opcion B <<NRed>/button</NRed>> <br>

                                  <NTab></NTab>
                                  <<NRed>/div</NRed>> <br>
                                    <<NRed>/div</NRed>>
    </div>
    <a href="https://getbootstrap.com/docs/5.3/components/dropdowns/">
      https://getbootstrap.com/docs/5.3/components/dropdowns/
    </a>
    <br>

    <br>

    btn-group-vertical (parent) <br>
    <div class="btn-group-vertical">
      <button class="btn btn-success">Opcion 1</button>
      <button class="btn btn-success">Opcion 2</button>
      <button class="btn btn-success">Opcion 3</button>
    </div>
  </div>

  <!-- Insignias -->
  <div class="section">
    <h3>Insignias</h3>
    <span class="badge text-bg-primary">Primary</span>
    <span class="badge text-bg-secondary">Secondary</span>
    <span class="badge text-bg-success">Success</span>
    <span class="badge text-bg-danger">Danger</span>
    <span class="badge text-bg-warning">Warning</span>
    <span class="badge text-bg-info">Info</span>
    <span class="badge text-bg-light">Light</span>
    <span class="badge text-bg-dark">Dark</span>
    <<NRed>span</NRed>
      <NPurp>class</NPurp>="<NGreen>badge text-bg-primary</NGreen>"><<NRed>/span</NRed>>
        <br>
        <span class="badge rounded-pill text-bg-primary">Primary</span>
        <span class="badge rounded-pill text-bg-secondary">Secondary</span>
        <span class="badge rounded-pill text-bg-success">Success</span>
        <span class="badge rounded-pill text-bg-danger">Danger</span>
        <span class="badge rounded-pill text-bg-warning">Warning</span>
        <span class="badge rounded-pill text-bg-info">Info</span>
        <<NRed>span</NRed>
          <NPurp>class</NPurp>="<NGreen>badge rounded-pill text-bg-primary</NGreen>"><<NRed>/span</NRed>>
            <br><br>

            <button class="btn btn-primary"> Mensajes
              <span class="badge text-bg-secondary">4</span>
            </button>
            <div class="cod">
              <<NRed>button</NRed>
                <NPurp>class</NPurp>="<NGreen>btn btn-primary</NGreen>"> Mensajes <br>
                <NTab></NTab>
                <<NRed>span</NRed>
                  <NPurp>class</NPurp>="<NGreen>badge text-bg-secondary</NGreen>"> 4 <<NRed>/span</NRed>> <br>
                    <<NRed>/button</NRed>>
            </div><br>

            <button class="btn btn-primary position-relative"> Mensajes
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 99+ </span>
            </button>
            <div class="cod">
              <<NRed>button</NRed>
                <NPurp>class</NPurp>="<NGreen>btn btn-primary position-relative</NGreen>"> Mensajes <br>
                <NTab></NTab>
                <<NRed>span</NRed>
                  <NPurp>class</NPurp>="<NGreen>position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger</NGreen>"> 99+ <<NRed>/span</NRed>> <br>
                    <<NRed>/button</NRed>>
            </div><br>

            <button class="btn btn-primary position-relative"> Perfil
              <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border rounded-circle"></span>
            </button>
            <div class="cod">
              <<NRed>button</NRed>
                <NPurp>class</NPurp>="<NGreen>btn btn-primary position-relative</NGreen>"> Perfil <br>
                <NTab></NTab>
                <<NRed>span</NRed>
                  <NPurp>class</NPurp>="<NGreen>position-absolute top-0 start-100 translate-middle p-2 bg-danger border rounded-circle</NGreen>"><<NRed>/span</NRed>> <br>
                    <<NRed>/button</NRed>>
            </div><br>

  </div>

  <!-- Barra de progreso -->
  <div class="section">
    <h3>Barra de progreso</h3>
    <div class="progress bg-secondary" style="height: 40px;">
      <div class="progress-bar w-75 bg-success progress-bar-striped progress-bar-animated">75%</div>
    </div>
    <div class="cod">
      <<NRed>div</NRed>
        <NPurp>class</NPurp>="<NGreen>progress</NGreen>"> <br>
        <NTab></NTab>
        <NTab></NTab>
        <<NRed>div</NRed>
          <NPurp>class</NPurp>="<NGreen>progress-bar w-75 bg-success progress-bar-striped progress-bar-animated</NGreen>"> 75% <<NRed>/div</NRed>> <br>
            <<NRed>/div</NRed>>
    </div>
    <a href="https://getbootstrap.com/docs/5.3/components/progress/">
      https://getbootstrap.com/docs/5.3/components/progress/
    </a>
  </div>

  <!-- Paginacion -->
  <div class="section">
    <h3>Paginacion</h3>
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">
          < Previo</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item disabled"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link" href="#">Siguiente ></a></li>
    </ul>
    <div class="cod">
      <<NRed>ul</NRed>
        <NPurp>class</NPurp>="<NGreen>pagination</NGreen>"> <br>
        <NTab></NTab>
        <<NRed>li</NRed>
          <NPurp>class</NPurp>="<NGreen>page-item</NGreen>"> <<NRed>a</NRed>
            <NPurp>class</NPurp>="<NGreen>page-link</NGreen>" <NPurp>href</NPurp>="<NGreen>#</NGreen>"> 1 <<NRed>/a</NRed>><<NRed>/li</NRed>> <br>
                <NTab></NTab>
                <<NRed>li</NRed>
                  <NPurp>class</NPurp>="<NGreen>page-item active/disabled</NGreen>"> <<NRed>a</NRed>
                    <NPurp>class</NPurp>="<NGreen>page-link</NGreen>" <NPurp>href</NPurp>="<NGreen>#</NGreen>"> 2 <<NRed>/a</NRed>><<NRed>/li</NRed>> <br>
                        <<NRed>/ul</NRed>>
    </div>
    <hr>

    <!-- breadcrumb -->
    <div class="flex">
      <div class="w-50">
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Peliculas</a></li>
          <li class="breadcrumb-item"><a href="#">2024</a></li>
        </ul>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
          </ol>
        </nav>
      </div>
      <div class="cod" style="height: 100px;">
        <<NRed>ul</NRed>
          <NPurp>class</NPurp>="<NGreen>breadcrumb</NGreen>"> <br>
          <NTab></NTab>
          <<NRed>li</NRed>
            <NPurp>class</NPurp>="<NGreen>breadcrumb-item</NGreen>"> <<NRed>a</NRed>
              <NPurp>href</NPurp>="<NGreen>#</NGreen>"> Home <<NRed>/a</NRed>><<NRed>/li</NRed>> <br>
                  <<NRed>/ul</NRed>> <br> <br>

                    &lt;<NRed>nav</NRed>
                    <NPurp> style</NPurp>="<NGreen>--bs-breadcrumb-divider: '>';</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>breadcrumb"></NGreen>" <br>
                    <NTab></NTab>&lt;<NRed>ol</NRed>
                    <NPurp> class</NPurp>="<NGreen>breadcrumb</NGreen>"> <br>
                    <NTab></NTab>
                    <NTab></NTab>&lt;<NRed>li</NRed>
                    <NPurp> class</NPurp>="<NGreen>breadcrumb-item</NGreen>">
                    &lt;<NRed>a</NRed>
                    <NPurp> href</NPurp>="<NGreen>#</NGreen>">Home&lt;<NRed>/a</NRed>>
                    &lt;<NRed>/li</NRed>> <br>
                    <NTab></NTab>
                    <NTab></NTab>&lt;<NRed>li</NRed>
                    <NPurp> class</NPurp>="<NGreen>breadcrumb-item active</NGreen>" <NPurp>aria-current</NPurp>="<NGreen>page</NGreen>">Library&lt;<NRed>/li</NRed>> <br>
                    <NTab></NTab>&lt;<NRed>/ol</NRed>> <br>
                    &lt;<NRed>/nav</NRed>>
      </div>
    </div>
  </div>

  <!-- Listas -->
  <div class="section">
    <h3>Listas</h3>
    <ul class="list-group">
      <li class="list-group-item">Lunes</li>
      <li class="list-group-item active">Martes</li>
      <li class="list-group-item">Miercoles</li>
      <li class="list-group-item disabled">Jueves</li>
    </ul>
    <a href="https://getbootstrap.com/docs/5.3/components/list-group/">
      https://getbootstrap.com/docs/5.3/components/list-group/
    </a>
  </div>

  <!-- Tarjetas -->
  <div class="section">
    <h3>Tarjetas</h3>
    <div class="flex">
      <div class="card w-25">
        <div class="card-header">
          <p>ADMINISTRADOR</p>
        </div>
        <img src="/Imgs/cat2.png">
        <div class="card-body">
          <h5 class="card-title"> José Gonzales</h5>
          <p class="card-text">Descripcion...</p>
          <a href="#" class="btn btn-primary">Ver perfil</a>
        </div>
        <div class="card-footer">
          <p>Pie de tarjeta</p>
        </div>
      </div>

      <div class="card w-25" style="margin-block: auto;">
        <img src="/Imgs/cat2.png">
        <div class="card-body">
          <h5 class="card-title"> José Gonzales</h5>
          <p class="card-text">Descripcion de la persona</p>
          <a href="#" class="btn btn-primary">Ver perfil</a>
        </div>
      </div>
    </div> <br>

    <hr>

    <div class="card">
      <div class="card-body"> Este es un texto dentro del cuerpo de una tarjeta. </div>
    </div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>card</NGreen>"> <br>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>card-body</NGreen>"> Este es un texto dentro del cuerpo de una tarjeta. &lt;<NRed>/div</NRed>> <br>
      &lt;<NRed>/div</NRed>>
    </div> <br>

    <a href="https://getbootstrap.com/docs/5.3/components/card/">
      https://getbootstrap.com/docs/5.3/components/card/
    </a> <br>
    <a href="https://getbootstrap.com/docs/5.3/helpers/stretched-link/">
      https://getbootstrap.com/docs/5.3/helpers/stretched-link/
    </a>

    <div class="row g-0 bg-body-secondary position-relative">
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="/Imgs/cat1.png" class="w-75">
      </div>
      <div class="col-md-6 p-4 ps-md-0">
        <h5 class="mt-0">Columns with stretched link</h5>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <a href="#" class="stretched-link">Go somewhere</a>
      </div>
    </div>
  </div>

  <!-- plegables -->
  <div class="section">
    <h3> Plegables </h3>
    <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demoEj">Mostrar más...</button>
    <div class="collapse" id="demoEj">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, nihil magnam, ab maxime reiciendis atque optio libero, architecto expedita officiis facere provident amet velit ut voluptas perspiciatis sunt sint error.
    </div>
    <div class="cod">
      <<NRed>button</NRed>
        <NPurp>class</NPurp>="<NGreen>btn btn-primary</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-target</NPurp>="<NGreen>#demo</NGreen>"> Mostrar más... <<NRed>/button</NRed>> <br>
        <<NRed>div</NRed>
        <NPurp>class</NPurp>="<NGreen>collapse</NGreen>" <NPurp>id</NPurp>="<NGreen>demo</NGreen>"> Texto oculto... <<NRed>/div</NRed>>
    </div>
    <hr>

    <!-- Acordion -->
    <div id="acordion">
      <div class="card">
        <div class="card-header">
          <a href="#uno" class="card-link" data-bs-toggle="collapse" data-bs-parent="#acordion"> Primero </a>
        </div>
        <div id="uno" class="collapse">
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex provident laudantium ad asperiores facilis?
          </div>
        </div>

        <div class="card-header">
          <a href="#dos" class="card-link" data-bs-toggle="collapse" data-bs-parent="#acordion"> Segundo </a>
        </div>
        <div id="dos" class="collapse">
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse alias, sequi doloribus repudiandae voluptatibus.
          </div>
        </div>

        <div class="card-header">
          <a href="#tres" class="card-link" data-bs-toggle="collapse" data-bs-parent="#acordion"> Mostrar Código... </a>
        </div>
        <div id="tres" class="collapse"> <!-- Show -->
          <div class="card-body">
            <div class="cod">
              &lt;<NRed>div</NRed>
              <NPurp> id</NPurp>="<NGreen>acordion</NGreen>" > <br>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-header</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>a</NRed>
              <NPurp> href</NPurp>="<NGreen>#uno</NGreen>" <NPurp>class</NPurp>="<NGreen>card-link</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#acordion</NGreen>" > Primero &lt;<NRed>/a</NRed>> <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> id</NPurp>="<NGreen>uno</NGreen>" <NPurp>class</NPurp>="<NGreen>collapse show</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-body</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>Lorem... <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-header</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>a</NRed>
              <NPurp> href</NPurp>="<NGreen>#dos</NGreen>" <NPurp>class</NPurp>="<NGreen>card-link</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#acordion</NGreen>" > Segundo &lt;<NRed>/a</NRed>> <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> id</NPurp>="<NGreen>dos</NGreen>" <NPurp>class</NPurp>="<NGreen>collapse</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-body</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>Lorem... <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-header</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>a</NRed>
              <NPurp> href</NPurp>="<NGreen>#tres</NGreen>" <NPurp>class</NPurp>="<NGreen>card-link</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#acordion</NGreen>" > Segundo &lt;<NRed>/a</NRed>> <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> id</NPurp>="<NGreen>tres</NGreen>" <NPurp>class</NPurp>="<NGreen>collapse</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>div</NRed>
              <NPurp> class</NPurp>="<NGreen>card-body</NGreen>" > <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>Lorem... <br>
              <NTab></NTab>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
              &lt;<NRed>/div</NRed> >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Menus de nav (acordion) -->
  <div class="section">
    <h3> Menus de nav </h3>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum aliquam cupiditate beatae voluptas asperiores! Deleniti laboriosam ipsa sunt, rerum delectus eligendi temporibus, libero voluptatibus natus error voluptate incidunt corrupti sapiente!
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam amet illum facilis, perferendis dolorum animi hic. Unde ab, praesentium ex illo repellat fuga aut reprehenderit numquam necessitatibus deleniti aliquid perferendis.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi fuga optio sapiente sequi non aliquam ab illum dolorum, hic facilis repellendus adipisci expedita voluptatibus ex autem sint iure ea saepe.
          </div>
        </div>
      </div>
    </div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion</NGreen>" <NPurp>id</NPurp>="<NGreen>accordionExample</NGreen>" > <br>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-item</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>h2</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-header</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-button collapsed</NGreen>" <NPurp>type</NPurp>="<NGreen>button</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-target</NPurp>="<NGreen>#collapseOne</NGreen>" <NPurp>aria-expanded</NPurp>="<NGreen>false</NGreen>" <NPurp>aria-controls</NPurp>="<NGreen>collapseOne</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Accordion Item #1 <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/button</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/h2</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> id</NPurp>="<NGreen>collapseOne</NGreen>" <NPurp>class</NPurp>="<NGreen>accordion-collapse collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#accordionExample</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-body</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Lorem... <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-item</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>h2</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-header</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-button collapsed</NGreen>" <NPurp>type</NPurp>="<NGreen>button</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-target</NPurp>="<NGreen>#collapseTwo</NGreen>" <NPurp>aria-expanded</NPurp>="<NGreen>false</NGreen>" <NPurp>aria-controls</NPurp>="<NGreen>collapseTwo</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Accordion Item #2 <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/button</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/h2</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> id</NPurp>="<NGreen>collapseTwo</NGreen>" <NPurp>class</NPurp>="<NGreen>accordion-collapse collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#accordionExample</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-body</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Lorem... <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-item</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>h2</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-header</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-button collapsed</NGreen>" <NPurp>type</NPurp>="<NGreen>button</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>collapse</NGreen>" <NPurp>data-bs-target</NPurp>="<NGreen>#collapseThree</NGreen>" <NPurp>aria-expanded</NPurp>="<NGreen>false</NGreen>" <NPurp>aria-controls</NPurp>="<NGreen>collapseThree</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Accordion Item #3 <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/button</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/h2</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> id</NPurp>="<NGreen>collapseThree</NGreen>" <NPurp>class</NPurp>="<NGreen>accordion-collapse collapse</NGreen>" <NPurp>data-bs-parent</NPurp>="<NGreen>#accordionExample</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>accordion-body</NGreen>" > <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>Lorem... <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      <NTab></NTab>&lt;<NRed>/div</NRed> > <br>
      &lt;<NRed>/div</NRed> >
    </div>
  </div>

  <a href="https://getbootstrap.com/docs/5.3/components/navs-tabs/">
    https://getbootstrap.com/docs/5.3/components/navs-tabs/
  </a>

  <!-- Barra de Nav TODO: -->
  <div class="section">
    <h3> Barra de Nav </h3>
    <ul class="nav justify-content-start">
      <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Active</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
      <li class="nav-item"> <a class="nav-link disabled" aria-disabled="true">Disabled</a> </li>
    </ul>
    <div class="cod">
      &lt;<NRed>ul</NRed>
      <NPurp> class</NPurp>="<NGreen>nav justify-content-center</NGreen>">
      <NGray>// start - center - end. </NGray>
      <NTab></NTab>
      <NGray>// flex-column (vertical)</NGray>
      <NTab></NTab>
      <NGray>// nav-justified</NGray>
      <NTab></NTab>
      <NGray>// fixed-top (mantener arriba)</NGray>
      <br>
      <NTab></NTab>&lt;<NRed>li</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-item</NGreen>">
      &lt;<NRed>a</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-link active</NGreen>" <NPurp>aria-current</NPurp>="<NGreen>page</NGreen>" <NPurp>href</NPurp>="<NGreen>#</NGreen>" >Active&lt;<NRed>/a</NRed>> &lt;<NRed>/li</NRed>> <br>
      <NTab></NTab>&lt;<NRed>li</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-item</NGreen>">
      &lt;<NRed>a</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-link</NGreen>" <NPurp>href</NPurp>="<NGreen>#</NGreen>" >Link&lt;<NRed>/a</NRed>> &lt;<NRed>/li</NRed>> <br>
      <NTab></NTab>&lt;<NRed>li</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-item</NGreen>">
      &lt;<NRed>a</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-link</NGreen>" <NPurp>href</NPurp>="<NGreen>#</NGreen>" >Link&lt;<NRed>/a</NRed>> &lt;<NRed>/li</NRed>> <br>
      <NTab></NTab>&lt;<NRed>li</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-item</NGreen>">
      &lt;<NRed>a</NRed>
      <NPurp> class</NPurp>="<NGreen>nav-link disabled</NGreen>" <NPurp>aria-disabled</NPurp>="<NGreen>true</NGreen>" >Disabled&lt;<NRed>/a</NRed>> &lt;<NRed>/li</NRed>> <br>
      &lt;<NRed>/ul</NRed>>
    </div>
    <a href="https://getbootstrap.com/docs/5.3/components/navbar/">
      https://getbootstrap.com/docs/5.3/components/navbar/
    </a>
  </div>

  <!-- from -->
  <div class="section">
    <h3> from </h3>
    <!-- Nombre - contraseña -->
    <div class="flex">
      <form class="w-75">
        <label for="nombre">Nombre: </label> <br>
        <input type="text" name="nombre" class="form-control"> <br>

        <label for="inputPassword5"> Contraseña: </label> <br>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
          Su contraseña debe tener entre 8 y 20 caracteres.
        </div>
      </form>
      <div class="cod w-100">
        &lt;<NRed>label</NRed>
        <NPurp> for</NPurp>="<NGreen>nombre</NGreen>">Nombre: &lt;<NRed>/label</NRed> > <br>
        &lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>nombre</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>"> <br><br>

        &lt;<NRed>label</NRed>
        <NPurp> for</NPurp>="<NGreen>inputPassword5</NGreen>"> Contraseña: &lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>password</NGreen>" <NPurp>id</NPurp>="<NGreen>inputPassword5</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>aria-describedby</NPurp>="<NGreen>passwordHelpBlock</NGreen>"> <br>
        &lt;<NRed>div</NRed>
        <NPurp> id</NPurp>="<NGreen>passwordHelpBlock</NGreen>" <NPurp>class</NPurp>="<NGreen>form-text</NGreen>"> <NTab></NTab>Su contraseña debe... &lt;<NRed>/div</NRed>>
      </div>
    </div>
    <hr>

    <!-- nombre y apellido -->
    <div class="flex">
      <div class="input-group align-self-center">
        <span class="input-group-text">First and last name</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="text" aria-label="Last name" class="form-control">
      </div>
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>">First and last name&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>First name</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Last name</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>"> <br>
        &lt;<NRed>/div</NRed>>
      </div>
    </div>
    <hr>

    <!-- TODO: -->
    <div>
      <a href="https://getbootstrap.com/docs/5.3/forms/input-group/">
        https://getbootstrap.com/docs/5.3/forms/input-group/
      </a> <br>
      <a href="https://getbootstrap.com/docs/5.3/forms/floating-labels/?">
        https://getbootstrap.com/docs/5.3/forms/floating-labels/?
      </a> <br>
      <a href="https://getbootstrap.com/docs/5.3/forms/layout/">
        https://getbootstrap.com/docs/5.3/forms/layout/
      </a>
    </div>
    <hr>

    <!-- Select Archivos -->
    <div class="flex">
      <div class="w-100">
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="cod">
        &lt;<NRed>label</NRed>
        <NPurp> for</NPurp>="<NGreen>formFile</NGreen>" <NPurp>class</NPurp>="<NGreen>form-label</NGreen>"> Seleccionar archivo &lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>type</NPurp>="<NGreen>file</NGreen>" <NPurp>id</NPurp>="<NGreen>formFile</NGreen>">
      </div>
    </div>
    <hr>

    <!-- Section -->
    <div class="flex">
      <div class="w-75">
        <select class="form-select align-self-center" aria-label="Default select example">
          <option selected>Seleccionar</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select> <br>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Escribe para buscar...">
        <datalist id="datalistOptions">
          <option value="San Francisco">
          <option value="New York">
          <option value="Seattle">
          <option value="Los Angeles">
          <option value="Chicago">
        </datalist>
      </div>
      <div class="cod" style="height: 100px;">
        &lt;<NRed>select</NRed>
        <NPurp> class</NPurp>="<NGreen>form-select</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Default select example</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp>selected</NPurp>> Seleccionar &lt;<NRed>/option</NRed>> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>1</NGreen>"> One &lt;<NRed>/option</NRed>> <br>
        &lt;<NRed>/select</NRed> >
        <hr>
        &lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>list</NPurp>="<NGreen>datalistOptions</NGreen>" <NPurp>id</NPurp>="<NGreen>exampleDataList</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>Escribe para buscar...</NGreen>"> <br>
        &lt;<NRed>datalist</NRed>
        <NPurp> id</NPurp>="<NGreen>datalistOptions</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>San Francisco</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>New York</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>Seattle</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>Los Angeles</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>option</NRed>
        <NPurp> value</NPurp>="<NGreen>Chicago</NGreen>"> <br>
        &lt;<NRed>/datalist</NRed>>
      </div>
    </div>
    <hr>

    <!-- CheckBox -->
    <div class="flex">
      <div class="w-50 ">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1"> Default radio </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled>
          <label class="form-check-label" for="flexRadioDisabled"> Disabled radio </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
          <label class="form-check-label" for="flexCheckChecked"> Checked checkbox </label>
        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
        </div>
        <div>
          <label class="btn btn-primary" for="btn-check">Single toggle</label> <br>
          <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
        </div>
        <!-- Inline -->
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">1</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">2</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
          <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
        </div>
        <a class="small" href="https://getbootstrap.com/docs/5.3/forms/checks-radios/">
          bootstrap.com/checks-radios.</a>
      </div>
      <div class="cod">
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-input</NGreen>" <NPurp>type</NPurp>="<NGreen>radio</NGreen>" <NPurp>name</NPurp>="<NGreen>flexRadioDefault</NGreen>" <NPurp>id</NPurp>="<NGreen>flexRadioDefault1</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-label</NGreen>" <NPurp>for</NPurp>="<NGreen>flexRadioDefault1</NGreen>"> Default radio &lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-input</NGreen>" <NPurp>type</NPurp>="<NGreen>radio</NGreen>" <NPurp>name</NPurp>="<NGreen>flexRadioDisabled</NGreen>" <NPurp>id</NPurp>="<NGreen>flexRadioDisabled</NGreen>" disabled> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-label</NGreen>" <NPurp>for</NPurp>="<NGreen>flexRadioDisabled</NGreen>"> Disabled radio &lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-input</NGreen>" <NPurp>type</NPurp>="<NGreen>checkbox</NGreen>" <NPurp>value</NPurp>="<NGreen></NGreen>" <NPurp>id</NPurp>="<NGreen>flexCheckChecked</NGreen>" <NPurp><u>checked</u></NPurp>> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-label</NGreen>" <NPurp>for</NPurp>="<NGreen>flexCheckChecked</NGreen>"> Checked checkbox &lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check form-switch</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-input</NGreen>" <NPurp>type</NPurp>="<NGreen>checkbox</NGreen>" <NPurp>role</NPurp>="<NGreen>switch</NGreen>" <NPurp>id</NPurp>="<NGreen>flexSwitchCheckChecked</NGreen>" checked> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-label</NGreen>" <NPurp>for</NPurp>="<NGreen>flexSwitchCheckChecked</NGreen>">Checked switch checkbox input&lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>checkbox</NGreen>" <NPurp>class</NPurp>="<NGreen>btn-check</NGreen>" <NPurp>id</NPurp>="<NGreen>btn-check</NGreen>" <NPurp>autocomplete</NPurp>="<NGreen>off</NGreen>"> <br>
        &lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>btn btn-primary</NGreen>" <NPurp>for</NPurp>="<NGreen>btn-check</NGreen>">Single toggle&lt;<NRed>/label</NRed>>
        <hr>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check form-check-inline</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-input</NGreen>" <NPurp>type</NPurp>="<NGreen>checkbox</NGreen>" <NPurp>id</NPurp>="<NGreen>inlineCheckbox1</NGreen>" <NPurp>value</NPurp>="<NGreen>option1</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> class</NPurp>="<NGreen>form-check-label</NGreen>" <NPurp>for</NPurp>="<NGreen>inlineCheckbox1</NGreen>">1&lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/div</NRed>>
      </div>
    </div>
    <hr>

    <!-- Input Group -->
    <div class="flex">
      <div class="w-50">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">@hotmail.com</span>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" aria-label="Username">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="hotmail, gmail,  etc" aria-label="Server">
        </div>
        <div class="mb-3">
          <label for="basic-url" class="form-label">Your vanity URL</label>
          <div class="input-group">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
          </div>
          <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>
        <div class="input-group">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div> <br>
        <form class="form-floating">
          <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
          <label for="floatingInputInvalid">Invalid input</label>
        </form>
      </div>
      <div class="cod w-50" style="max-height: 450px;">
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group mb-3</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>" <NPurp>id</NPurp>="<NGreen>basic-addon1</NGreen>">@&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>Username</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Username</NGreen>" <NPurp>aria-describedby</NPurp>="<NGreen>basic-addon1</NGreen>"> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>Recipient's username</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Recipient's username</NGreen>" <NPurp>aria-describedby</NPurp>="<NGreen>basic-addon2</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>" <NPurp>id</NPurp>="<NGreen>basic-addon2</NGreen>">@hotmail.com&lt;<NRed>/span</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group mb-3</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>Username</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Username</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>">@&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>hotmail, gmail, etc</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Server</NGreen>"> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>mb-3</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> for</NPurp>="<NGreen>basic-url</NGreen>" <NPurp>class</NPurp>="<NGreen>form-label</NGreen>">Your vanity URL&lt;<NRed>/label</NRed>> <br>
        <NTab></NTab>&lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group</NGreen>"> <br>
        <NTab></NTab>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>" <NPurp>id</NPurp>="<NGreen>basic-addon3</NGreen>">https://example.com/users/&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>id</NPurp>="<NGreen>basic-url</NGreen>" <NPurp>aria-describedby</NPurp>="<NGreen>basic-addon3 basic-addon4</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
        <NTab></NTab>&lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>form-text</NGreen>" <NPurp>id</NPurp>="<NGreen>basic-addon4</NGreen>">Example help text goes outside the input group.&lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group mb-3</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>">$&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>text</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Amount (to the nearest dollar)</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>">.00&lt;<NRed>/span</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>div</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>span</NRed>
        <NPurp> class</NPurp>="<NGreen>input-group-text</NGreen>">With textarea&lt;<NRed>/span</NRed>> <br>
        <NTab></NTab>&lt;<NRed>textarea</NRed>
        <NPurp> class</NPurp>="<NGreen>form-control</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>With textarea</NGreen>">&lt;<NRed>/textarea</NRed>> <br>
        &lt;<NRed>/div</NRed>> <br>
        &lt;<NRed>form</NRed>
        <NPurp> class</NPurp>="<NGreen>form-floating</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>input</NRed>
        <NPurp> type</NPurp>="<NGreen>email</NGreen>" <NPurp>class</NPurp>="<NGreen>form-control is-invalid</NGreen>" <NPurp>id</NPurp>="<NGreen>floatingInputInvalid</NGreen>" <NPurp>placeholder</NPurp>="<NGreen>name@example.com</NGreen>" <NPurp>value</NPurp>="<NGreen>test@example.com</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>label</NRed>
        <NPurp> for</NPurp>="<NGreen>floatingInputInvalid</NGreen>">Invalid input&lt;<NRed>/label</NRed>> <br>
        &lt;<NRed>/form</NRed>>
      </div>
    </div>
    <hr>

    <!-- Validacion -->
    <form class="row g-3">
      <div class="col-md-4">
        <label for="validationServer01" class="form-label">First name</label>
        <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationServer02" class="form-label">Last name</label>
        <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationServerUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
          <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
          <div id="validationServerUsernameFeedback" class="invalid-feedback">
            Please choose a username.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationServer03" class="form-label">City</label>
        <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
        <div id="validationServer03Feedback" class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationServer04" class="form-label">State</label>
        <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
        <div id="validationServer04Feedback" class="invalid-feedback">
          Please select a valid state.
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationServer05" class="form-label">Zip</label>
        <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
        <div id="validationServer05Feedback" class="invalid-feedback">
          Please provide a valid zip.
        </div>
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
          <label class="form-check-label" for="invalidCheck3">
            Agree to terms and conditions
          </label>
          <div id="invalidCheck3Feedback" class="invalid-feedback">
            You must agree before submitting.
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
      </div>
    </form>
      <script>
          (() => {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            }, false)
          })
        })()
      </script>
    <br>
    <a href="https://getbootstrap.com/docs/5.3/forms/validation/">https://getbootstrap.com/docs/5.3/forms/validation/</a>
  </div>

  <!-- Carousel -->
  <div class="section">
    <h3> Carousel / Slider </h3>
    <div id="carouselExampleCaptions" class="carousel slide">
      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <!-- Imagenes -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="" style="background-color: gray;" height="400px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../../Imgs/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../../../Imgs/3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <!-- Controles < - > -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="cod">
      <a href="https://getbootstrap.com/docs/5.3/components/carousel/">https://getbootstrap.com/docs/5.3/components/carousel/</a>
    </div>
  </div>

  <!-- Modal (alert) -->
  <div class="section">
    <h3> Modal (Alert) </h3>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <div class="cod">
      &lt;<NRed>button</NRed>
      <NPurp> type</NPurp>="<NGreen>button</NGreen>" <NPurp>class</NPurp>="<NGreen>btn btn-primary</NGreen>" <NPurp>data-bs-toggle</NPurp>="<NGreen>modal</NGreen>" <NPurp>data-bs-target</NPurp>="<NGreen>#exampleModal</NGreen>"> <br>
      <NTab></NTab>Launch demo modal <br>
      &lt;<NRed>/button</NRed>> <br>
      <br>
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal fade</NGreen>" <NPurp>id</NPurp>="<NGreen>exampleModal</NGreen>" <NPurp>tabindex</NPurp>="<NGreen>-1</NGreen>" <NPurp>aria-labelledby</NPurp>="<NGreen>exampleModalLabel</NGreen>" <NPurp>aria-hidden</NPurp>="<NGreen>true</NGreen>"> <br>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-dialog</NGreen>"> <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-content</NGreen>"> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-header</NGreen>"> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>h1</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-title fs-5</NGreen>" <NPurp>id</NPurp>="<NGreen>exampleModalLabel</NGreen>">Modal title&lt;<NRed>/h1</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> type</NPurp>="<NGreen>button</NGreen>" <NPurp>class</NPurp>="<NGreen>btn-close</NGreen>" <NPurp>data-bs-dismiss</NPurp>="<NGreen>modal</NGreen>" <NPurp>aria-label</NPurp>="<NGreen>Close</NGreen>">&lt;<NRed>/button</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-body</NGreen>"> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>... <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>modal-footer</NGreen>"> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> type</NPurp>="<NGreen>button</NGreen>" <NPurp>class</NPurp>="<NGreen>btn btn-secondary</NGreen>" <NPurp>data-bs-dismiss</NPurp>="<NGreen>modal</NGreen>">Close&lt;<NRed>/button</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>button</NRed>
      <NPurp> type</NPurp>="<NGreen>button</NGreen>" <NPurp>class</NPurp>="<NGreen>btn btn-primary</NGreen>">Save changes&lt;<NRed>/button</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
      <NTab></NTab>
      <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
      <NTab></NTab>&lt;<NRed>/div</NRed>> <br>
      &lt;<NRed>/div</NRed>>
    </div>
    <a href="https://getbootstrap.com/docs/5.3/components/modal/">
      https://getbootstrap.com/docs/5.3/components/modal/
    </a>
  </div>

  <!-- Más -->
  <div class="section">
    <h3> Mas </h3>
    <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">
      https://getbootstrap.com/docs/5.3/getting-started/introduction/</a>
  </div>

  <!-- hr vr -->
  <div class="section">
    <h3> &lt;hr> &lt;vr> </h3>
    <!-- HR -->
    <hr class="border border-danger border-2 opacity-50">
    <hr class="border border-primary border-3 opacity-75">
    <div class="cod">
      &lt;<NRed>hr</NRed>
      <NPurp> class</NPurp>="<NGreen>border border-danger border-2 opacity-50</NGreen>"> <br>
      &lt;<NRed>hr</NRed>
      <NPurp> class</NPurp>="<NGreen>border border-primary border-3 opacity-75</NGreen>">
    </div>
    <hr>
    <!-- VR -->
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="vr"></div>
    <div class="cod">
      &lt;<NRed>div</NRed>
      <NPurp> class</NPurp>="<NGreen>vr</NGreen>">&lt;<NRed>/div</NRed>>
    </div>
  </div>

  <!-- Otros -->
  <div class="section">
    <h3>Otros...</h3>
    <!-- KBD (KeyBoarD) -->
    press <kbd><kbd>Ctrl</kbd> + <kbd>,</kbd></kbd>
    <div class="cod">
      &lt;<NRed>kbd</NRed>> Ctrl &lt;<NRed>/kbd</NRed>>
    </div>
    <hr>
  </div>

  <!-- OffCanvas -->
  <div class="section">
    <h3> OffCanvas </h3>

  </div>

  <!--  -->
  <div class="section">
    <h3> </h3>

  </div>

  <!--  -->
  <div class="section">
    <h3> </h3>

  </div>

  <!--  -->
  <div class="section">
    <h3> </h3>

  </div>

  <!--  -->
  <div class="section">
    <h3> </h3>

  </div>





  <hr>
  <h3> HACER</h3>

  <a href="https://getbootstrap.com/docs/5.3/components/offcanvas/">
    https://getbootstrap.com/docs/5.3/components/offcanvas/
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/placeholders/#example">
    https://getbootstrap.com/docs/5.3/components/placeholders/#example
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/popovers/">
    https://getbootstrap.com/docs/5.3/components/popovers/
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/scrollspy/">
    https://getbootstrap.com/docs/5.3/components/scrollspy/
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/spinners/">
    https://getbootstrap.com/docs/5.3/components/spinners/
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/toasts/">
    https://getbootstrap.com/docs/5.3/components/toasts/
  </a> <br>
  <a href="https://getbootstrap.com/docs/5.3/components/tooltips/">
    https://getbootstrap.com/docs/5.3/components/tooltips/
  </a> <br>
  <br>
  <a href="https://getbootstrap.com/docs/5.3/utilities/api/">
    APIS: https://getbootstrap.com/docs/5.3/utilities/api/
  </a>
  <!-- </div> -->


  <br><br><br><br><br><br><br><br><br><br>




  <p id="screenSize">Screen Size: </p>
  <script>
    // window.scrollTo(0, document.body.scrollHeight);
    // sElem.scrollIntoView();

    const XS = 575;
    const SM = 576;
    const MD = 768;
    const LG = 992;
    const XL = 1200;

    let screenSize;
    const sElem = document.querySelector("#screenSize");
    setInterval(SSS, 1000);

    function SSS() {
      sElem.innerHTML = "Screen Size: " + screenSize;
    }

    // <NTab> (espacio)
    const doubleSpace = "&nbsp &nbsp;";
    const spaces = document.querySelectorAll("NTab");
    spaces.forEach(element => {
      element.innerHTML = doubleSpace;
    });
    const spaces2 = document.querySelectorAll("NTab2");
    spaces2.forEach(element => {
      element.innerHTML = doubleSpace.repeat();
    });
  </script>
  <script src="Lib-Fram/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
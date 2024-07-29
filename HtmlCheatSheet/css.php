<?php

$title = "CSS";
$back_color = "rgba(0, 0, 255, .05)";
$shadow1 = "rgba(0, 119, 255, 0.164)";
$shadow2 = "rgba(0, 0, 255, 0.1)";

require("../PHP/config.php");
include_once("../PHP/header.php");
include_once("../PHP/navbar.php");
include("../PHP/cheats.php");

?>
<link rel="stylesheet" href="../HtmlCheatSheet/STYLE.css">

<body>
  <!-- Text -->
  <section id="Text">

    <!-- Bootstrap -->
    <a href="../HtmlCheatSheet/Bootstrap.html"><img src="../Imgs/bootstrap-icon.png" alt="Bootstrap" height="50px"> </a>

    <!-- Fuentes -->
    <fieldset>
      <legend> Fuentes - Text </legend>

      <!-- Font-Style -->
      <div class="flex">
        <p class="ej" style="font-style: oblique;">
          This is a paragraph in italic style.
        </p>
        <div class="cod">
          <b>font-style:</b> italic; <font class="gray">/* normal, italic, oblique */</font>
        </div>
      </div>

      <!-- Font-Weight -->
      <div class="flex">
        <p class="ej" id="fontWeight"> Ejemplso de font-weight. </p>
        <div class="cod"> <b>font-weight:</b> 900; <font class="gray">/* 100-900 */</font> </div>
        <style>
          #fontWeight { animation: fontWeight 1s infinite linear; }
          @keyframes fontWeight {
            from { font-weight: 100; }
            to { font-weight: 900; }
          }
        </style>
      </div>

      <!-- Font-Variant -->
      <div class="flex">
        <p class="ej" style="font-variant: small-caps;"> This is a paragraph in small-caps. </p>
        <div class="cod"> <b>font-variant:</b> small-caps; <font class="gray">/* normal */</font> </div>
      </div>

      <!-- Text-Transorm -->
      <div class="flex">
        <p class="ej" style="text-transform: capitalize;"> transformar la primera letra de cada palabra en mayúsc.</p>
        <div class="cod"> <b>text-transform:</b> capitalize; <font class="gray"> uppercase, lowercase.</font></div>
      </div>
    </fieldset>

    <!-- Alineacion de Texto -->
    <fieldset>
      <legend>Alineación de Texto</legend>
      <!-- Text-Align (Horizontal) -->
      <div class="boxizq" style="width: 50%;">
        <div class="flex">
          <div class="ej marg0" style="text-align: left;">Aligned to <b>Left</b></div>
          <div class="cod"> <b>text-align:</b> left; </div>
        </div>
        <div class="flex">
          <div class="ej marg0" style="text-align: center;">Aligned to <b>Center</b></div>
          <div class="cod"> <b>text-align:</b> center; </div>
        </div>
        <div class="flex">
          <div class="ej marg0" style="text-align: right;">Aligned to <b>Right</b></div>
          <div class="cod"> <b>text-align:</b> right; </div>
        </div>
      </div>

      <!-- Text-Align (Vertical) -->
      <div class="boxder" style="width: 50%;">
        <div class="flex">
          <div class="flex">
            <div class="ej marg0" style="display: inline-table; vertical-align: top;"><div style="vertical-align: top; display: table-cell;">Top</div></div>
            <div class="ej marg0" style="display: inline-table;"><div style="vertical-align: middle; display: table-cell;">Midd.</div></div>
            <div class="ej marg0" style="display: inline-table; vertical-align: bottom;"><div style="vertical-align: bottom; display: table-cell;">Bott.</div></div>
          </div>
          <div>
            <div class="cod"> <b>vertical-align:</b> top; </div>
            <div class="cod"> <b>vertical-align:</b> middle; </div>
            <div class="cod"> <b>vertical-align:</b> bottom; </div>
          </div>
        </div>
      </div><hr>

      <!-- Text-Align Property (Vertical) -->
      <div>
        <div class="flex">
          <div class="ej"> This is an <NRed style="vertical-align: baseline;"> <b> inline text </b></NRed> example. </div>
          <div class="cod"> <b>vertical-align:</b> baseline; </div>
        </div>
        <div class="flex">
          <div class="ej"> This is a <NRed style="vertical-align: sub;"><b>sub line text</b></NRed> example. </div>
          <div class="cod"> <b>vertical-align:</b> sub; </div>
        </div>
        <div class="flex">
          <div class="ej"> This is a <NRed style="vertical-align: super;"><b>super line text</b></NRed> example. </div>
          <div class="cod"> <b>vertical-align:</b> super; </div>
        </div>
        <div class="flex">
          <div class="ej"> This is a <NRed style="vertical-align: -10px;"><b>pixel</b></NRed> example. </div>
          <div class="cod"> <b>vertical-align:</b> -10px; </div>
        </div><hr>
        <div class="flex">
          <div class="ej">
            <font style="text-decoration: overline;">This is <NRed> overlined </NRed> text. </font>
          </div>
          <div class="cod"> <b>text-decoration:</b> overline; </div>
        </div>
        <div class="flex">
          <div class="ej">
            <font style="text-decoration: underline;">This is <NRed> lined-through</NRed> text. </font>
          </div>
          <div class="cod"> <b>text-decoration:</b> line-through; </div>
        </div>
        <div class="flex">
          <div class="ej">
            <font style="text-decoration: line-through;">This is <NRed> underlined</NRed> text. </font>
          </div>
          <div class="cod"> <b>text-decoration:</b> underline; </div>
        </div>
      </div>
    </fieldset>

    <!-- Text-Sadow -->
    <fieldset>
      <legend> Text-Sadow </legend>

      <div class="flex">
        <div class="ej"> 
          <h2 style="text-shadow: rgba(0, 0, 255, 1) -1px -1px 0.3em;"> Text-shadow with blur effect
        </div>
        <div class="cod">
          <b> text-shadow:</b> rgba(0, 0, 255, 1) -1px -1px 0.3em; <br>
          <font class="gray">/* text-shadow: (x, y, blur radius, color) */ <br> (Más sombras usando "Coma"). </font>
        </div>
      </div>

      <div class="flex">
      </div>
    </fieldset>

    <!-- Spacing -->
    <fieldset>
      <legend> Spacing </legend>
      <div class="flex"> <!-- letter-spacing: -->
        <p class="ej" style="letter-spacing: 4px;">Ejemplo de letter-spacing.</p>
        <div class="cod"> <b>letter-spacing:</b> 4px; </div>
      </div>

      <div class="flex"> <!-- word-spacing: -->
        <p class="ej" style="word-spacing: 30px;">Ejemplo de word-spacing.</p>
        <div class="cod"> <b>word-spacing:</b> 30px; </div>
      </div>

      <div class="flex"> <!-- white-space: -->
        <p class="ej" id="whiteSpace">
          Este ej     tiene      varios
          espacios y   saltos de línea,
          pero   se ignoran.
        </p>
        <style>
          #whiteSpace{
            text-align: start;
            white-space: pre-line;
            height: 70px;
            width: 200px;
            animation: whitSpc 5s infinite linear;
          }
          @keyframes whitSpc {
            0% { white-space: normal; content: "asd"; }
            20% { white-space: nowrap; }
            40% { white-space: pre-wrap; }
            60% { white-space: pre; }
            80% { white-space: pre-line; }
            100% { white-space: breack-spaces; }
          }
        </style>
        <div class="cod wAuto">
          <b>white-space:</b> nowrap;
          <font class="gray">(normal, nowrap, pre, pre-line, <br>
            pre-wrap, break-spaces).</font>
        </div>
      </div>

      <div class="flex"> <!-- Sangría -->
        <div class="ej"> <p style="text-indent: 0px; display: inline;"> Este es un ejemplo de sangría.</p> </div>
        <div class="cod"> <b>text-indent:</b> 30px; </div>
      </div>

      <div class="flex"> <!-- line-height -->
        <div class="ej"> <p style="display: inline; line-height: 40px;"> Este es un ejemplo de Line-Height.</p> </div>
        <div class="cod"> <b>line-height:</b> 40px; </div>
      </div>

      <div class="flex"> <!-- column -->
        <div class="ej" id="columnS">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non perspiciatis voluptatem deleniti facilis nisi magnam accusantium alias sit laudantium. Esse repudiandae nihil, provident et aliquam nostrum quo architecto. Vitae, ad.
        </div>
        <div class="cod">
          <b>column-count</b>: 3; <br> <b>column-gap</b>: 10px; <br> <b>column-rule</b>: 1px solid #ccc;
          <style> #columnS{ column-count: 3; column-gap: 10px; column-rule: 1px solid #ccc; } </style>
        </div>
      </div>
    </fieldset>
  </section>

  <!-- Propiedades -->
  <section id="Propiedades">

    <!-- List-Style-Type -->
    <fieldset>
      <legend>  List-Style-Type  </legend>
      <div class="flex">
        <div class="ej"> 1. lower-alpha;</div>
        <div class="cod"><b>list-style-type:</b> lower-alpha;</div>
      </div>
      <div class="flex">
        <div class="ej"> ○ circle;</div>
        <div class="cod"><b>list-style-type:</b> circle;</div>
      </div>
      <div class="flex">
        <div class="ej"> 𝅇 square;</div>
        <div class="cod"><b>list-style-type:</b> square;</div>
      </div>
      <div class="flex">
        <div class="ej"> <font id="imgL">url("img.png");</font> </div>
        <div class="cod" style="min-width: 120px;"><b>list-style-image:</b> url("");</div>
      </div>
      <style> #imgL::before { content: url("../Imgs/loguito.png"); } </style>
    </fieldset>

    <!-- Table -->
    <fieldset>
      <legend> Table </legend>
      <div class="flex">
        <div class="ejemplo" style="min-width: 130px;"><!-- Table-Style -->
          <table class="styled" border="1">
            <caption>"Caption-Side Text"</caption>
            <tr>
              <td>Red</td>
              <td>Green</td>
            </tr>
            <tr>
              <td>Blue</td>
              <td></td>
            </tr>
          </table><br>
          <style>
            table.styled {
              margin-inline: 10px;
              caption-side: top;
              border-collapse: separate;
              border-spacing: 15px 6px;
              empty-cells: hide;
            }
          </style>
        </div>

        <div class="codigo wAuto" style="min-width: auto;">
          table.styled { <br>
            &nbsp; <b>caption-side:</b> top; <br>
            &nbsp; <b>border-spacing:</b> 20px 5px; <br>
            &nbsp; <b>empty-cells:</b> hide; <br>
          } <br>
        </div>
        <div class="cod flex"> <br>
          <div class="width100">
            <font class="gray">Pares:</font> <br>
            tr:<font class="purp">nth-child</font>(even) { <br>
              &nbsp; <b>background-color:</b> gray; <br> }<br>
          </div>
          <div class="width100"><NGray>// Impares</NGray> <br>
            tr:<font class="purp">nth-child</font>(odd) { <br>
              &nbsp; <b>background-color:</b> black; <br> }
          </div>
        </div>
      </div>
    </fieldset>

    <!-- Pseudo-Clases -->
    <fieldset>
      <legend> Pseudo-Clases </legend>
      <div class="flex"> <!-- Parent -->
        <div id="parent" class="ej">
          <font>Primer Hijo</font> <br>
          <font>Segundo Hijo</font> <br>
          <font>Ultimo Hijo</font>
        </div>
        <style>
          #parent font:first-child {
            color: green;
            text-decoration: underline;
          }
          #parent font:last-child {
            color: red;
            text-decoration: underline;
          }
        </style>
        <div class="cod">
          #<font class="orange">parent</font>:<font class="purp"><ins>first-child</ins></font> { <br>
            &nbsp; <b>color:</b> green; <br> }
        </div>
        <div class="cod">
          #<font class="orange">parent</font>:<font class="purp"><ins>last-child</ins></font> { <br>
            &nbsp; <b>color:</b> red; <br> }
        </div>
      </div>
      <div class="flex"> <!-- Parent -->
        <div id="parent" class="ej">
          <font>Primer Hijo</font> <br>
          <font>Segundo Hijo</font> <br>
          <font>Ultimo Hijo</font>
        </div>
        <style>
          #parent font:first-child {
            color: green;
            text-decoration: underline;
          }
          #parent font:last-child {
            color: red;
            text-decoration: underline;
          }
        </style>
        <div class="cod">
          #<font class="orange">parent</font>:<font class="purp"><ins>first-child</ins></font> { <br>
            &nbsp; <b>color:</b> green; <br> }
        </div>
        <div class="cod">
          #<font class="orange">parent</font>:<font class="purp"><ins>last-child</ins></font> { <br>
            &nbsp; <b>color:</b> red; <br> }
        </div>
      </div>
    </fieldset>

    <!-- Pseudo-Elemento -->
    <fieldset>
      <legend>  Pseudo-Elemento </legend>

      <div class="flex"> <!-- First-Line -->
        <div class="ej">
          <p class="textfirstline">
            El siguiente ejemplo demuestra cómo usar el elemento ::first-line 
            para agregar un efecto especial a la primera línea.
          </p>
        </div>
        <div class="cod">
          .<font class="yellow">texto</font>::<font class="purp">first-line</font> { <br>
            &nbsp; <b>color:</b> green; <br>
          }
          <style>.textfirstline::first-line { color: green; }</style>
        </div>
      </div>

      <div class="flex"> <!-- First-Letter -->
        <div class="ej">
          <p class="firstletter"> La primera letra es de otro color</p>
        </div>
        <div class="cod">
          .<font class="yellow">texto</font>::<font class="purp">first-letter</font> { <br>
            &nbsp; <b>background-color:</b> green; <br> }
          <style> .firstletter::first-letter { background-color: green; } </style>
        </div>
      </div>

      <div class="flex"> <!-- Selection -->
        <div class="ej">
          <p class="seleccioname">Selecciona una parte del texto para marcarlo de otro color</p>
        </div>
        <div class="cod">
          .<font class="yellow">texto</font>::<font class="purp">selection</font> { <br>
            &nbsp; <b>background-color:</b> green; <br> }
          <style>.seleccioname::selection { background-color: #589432; color: #FF6347; }</style>
        </div>
      </div>

      <div class="flex"> <!-- Before -->
        <div class="ej">
          <p id="insertImageBeforeText">Insertar Imagen antes del Texto. </p>
        </div>
        <div class="cod">
          .<font class="yellow">texto</font>::<font class="purp">before</font> { <br>
            &nbsp; <b>content:</b> url("<font class="green">../Imgs/loguito.png</font>"); <NGray>//content: "texto";</NGray> <br> }
          <style> #insertImageBeforeText:before { content: url("../Imgs/loguito.png"); } </style>
        </div>
      </div>

      <div class="flex"> <!-- Focus -->
        <div class="ej">
          <label>(Al hacer click cambia de color)</label> <br>
          <input type="text" class="focusme"></input>
        </div>
        <div class="cod">
          .<font class="yellow">input</font>:<font class="purp">focus</font> { <br>
            &nbsp; <b>background-color:</b> green; <br> }
          <style>.focusme:focus { background-color: #589432; color: #FF6347; }</style>
        </div>
      </div>
    </fieldset>

    <!-- Mouse-Cursor -->
    <fieldset>
      <legend>  Mouse-Cursor </legend>
      <div class="cod" style="word-spacing: 5px; cursor: default;"> <b>cursor</b>:
        <NRed style="cursor: default;">default</NRed>,
        <NRed style="cursor: pointer;">pointer</NRed>,
        <NRed style="cursor: crosshair;">crosshair</NRed>,
        <NRed style="cursor: help;">Help</NRed>,
        <NRed style="cursor: move;">move</NRed>,
        <NRed style="cursor: text;">text</NRed>,
        <NRed style="cursor: wait;">wait</NRed>,
        <NRed style="cursor: progress;">progress</NRed>,
        <NRed style="cursor: not-allowed;">not-allowed</NRed>,
        <NRed style="cursor: no-drop;">no-drop</NRed>.
        <br>
        <NRed style="cursor: n-resize;">n-resize</NRed>,
        <NRed style="cursor: s-resize;">s-resize</NRed>,
        <NRed style="cursor: ne-resize;">ne-resize</NRed>,
        <NRed style="cursor: sw-resize;">sw-resize</NRed>,
        <NRed style="cursor: se-resize;">se-resize</NRed>,
        <NRed style="cursor: e-resize;">e-resize</NRed>,
        <NRed style="cursor: w-resize;">w-resize</NRed>,
        <NRed style="cursor: vertical-text;">vertical-text</NRed>,
        <NRed style="cursor: all-scroll;">all-scroll</NRed>,
        <NRed style="cursor: col-resize;">col-resize</NRed>,
        <NRed style="cursor: row-resize;">row-resize</NRed>.
      </div>
    </fieldset>
  </section> 
  
  <!-- Positioning & Layout -->
  <section id="Pos & Layout">

    <!-- Display -->
    <fieldset>
      <legend> Display </legend>
      <!-- Display: Block -->
      <div class="flex">
        <div class="ej">
          <NRed class="block">First paragraph.</NRed>
          <NRed class="block">Second paragraph.</NRed>
          <style> NRed.block { display: block; } </style>
        </div>
        <div class="cod"> <b>display:</b> block; </div>
      </div>
      <!-- Display: Inline -->
      <div class="flex">
        <div class="ej">
          <p class="inline"> 1er Parrafo. </p> &nbsp;
          <p class="inline"> 2do Parrafo. </p> &nbsp;
          <p class="inline"> 3er Parrafo. </p>
          <style> p.inline { display: inline; } </style> 
        </div>
        <div class="cod"> <b>display:</b> inline; </div>
      </div> <hr>
      
      <!-- Centering Div -->
      <div class="flex">
        <div class="ej">
          <div class="main">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
          <style>
            .main {
              background-color: rgba(128, 128, 128, 0.461);
              height: 50px;

              display: flex;
              align-items: center;
              justify-content: center;
            }
          </style>
        </div>
        <div class="cod">
          &nbsp; <b>display:</b> flex; <br>
          &nbsp; <b>align-items:</b> center; <br>
          &nbsp; <b>justify-content:</b> center;
        </div>
        <div class="cod">
          &nbsp; <b>display:</b> grid; <br>
          &nbsp; <b>place-items:</b> center;
        </div>
      </div>
      <!-- Display: Flex -->
      <div class="flex">
        <div class="ej">
          <div class="buxer">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
          <style>
            .buxer{
              background-color: rgba(128, 128, 128, 0.461);
              width: 60px; height: 60px;
              margin: auto;
              display: flex;
              flex-wrap: wrap;
              justify-content: space-evenly;
              align-items: center;
            }
          </style>
        </div>
        <div class="cod">
          <b>display:</b> flex; <br>
          <b>align-items:</b> center; <br>
          <b>justify-content:</b> space-evenly; <br>
          <u><b>flex-wrap:</b> wrap; <font class="gray">(acomodar)</font></u>
        </div>
      </div><hr>

      <!-- justify-content -->
      <div class="flex" style="flex-wrap: wrap;">
        <div>
          <b>justify-content: </b> start;
          <div class="flx" style="justify-content: start;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <div>
          <b>justify-content: </b> center;
          <div class="flx" style="justify-content: center;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <div>
          <b>justify-content: </b> end;
          <div class="flx" style="justify-content: end;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <div>
          <b>justify-content: </b> space-between;
          <div class="flx" style="justify-content: space-between;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <div>
          <b>justify-content: </b> space-evenly;
          <div class="flx" style="justify-content: space-evenly;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <div>
          <b>justify-content: </b> space-around;
          <div class="flx" style="justify-content: space-around;">
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
            <div class="flxBoxs"></div>
          </div>
        </div>
        <style>
          .flx{
            display: flex;
            background-color: white;
            padding: 4px;
            border-radius: 5px;
            width: 200px;
          }
          .flxBoxs{
            background-color: cadetblue;
            height: 20px;
            width: 20px;
            margin: 1px;
            border-radius: 2px;
          }
          </style>
      </div>
    </fieldset>
  
    <!-- Visibility -->
    <fieldset>
      <legend> Visibility </legend>
      <div class="flex">
        <div class="ej"> <font class="dispnone">Este texto desaparecerá cuando lo apuntes.</font> </div>
        <div class="cod"> <b>display:</b> none/inline; <font class="gray">// No ocupa lugar</font> </div>
        <style> .dispnone:hover{ display: none; } </style>
      </div>
      <div class="flex">
        <div class="ej"> <font class="vishidden">Este texto se ocultará cuando lo apuntes.</font> </div>
        <div class="cod"> <b>visibility:</b> hidden/visible; <font class="gray">// Ocupa lugar</font> </div>
        <style> .vishidden:hover{ visibility: hidden; } </style>
      </div>
    </fieldset>

    <!-- Posicionamiento -->
    <fieldset>
      <legend>  Posicionamiento  </legend>
      <img id="imgPos" src="../Imgs/css-position-all.png" alt="">
      <style>
        #imgPos{ height: 100%; }
        @media screen and (max-width: 700px){ #imgPos{ height: 290px;} }
      </style>
    </fieldset>

    <!-- Floating -->
    <fieldset>
      <legend> Floating </legend>

      <div class="flex">
        <div class="ejemplo" style="text-align: justify;">
          Este texto está antes del elemento img (imagen) y no se ve afectado.<br><br>
          <img src="../Imgs/cat1.png" height="85px" style="float: right; margin-left: 4px;" />
          Este párrafo viene después del elemento div y se ve afectado por la propiedad float right.<br><br>
          <p id="setCB">Este párrafo también viene después del elemento div y también se ve afectado.</p>
        </div>
        <div><div class="codigo">
          img{ <b>float:</b> right; }
        </div>
        <button onclick="setClearBoth();"> Poner Clear-both </button> <br>      
        <div class="codigo">
          .clearing{ <br> &nbsp; <b>clear:</b> both; <font class="gray">/* both, right, left */</font> <br> }
        </div></div>
      </div>

      <script>
        function setClearBoth() {
          var textoCB = document.getElementById("setCB");
          textoCB.style.clear='both';
        }
      </script>

    </fieldset>

    <!-- Z-Index -->
    <fieldset>
      <legend>  Z-Index </legend>
      <div class="flex">
        <div class="wAuto">
          <div class="boxi bluee">Blue</div>
          <div class="boxi redd">Red</div>
        </div>
        <style>
          .boxi{
            position: relative;
            width: 60px;
            height: 60px;
            color: #FFF;
          }
          .bluee {
            z-index: 3;
            background-color: blue;
            margin-bottom: 15px;
          }
          .redd {
            z-index: 2;
            background-color: red;
            margin: -50px 0 0 50px;
          }
        </style>
        <div class="flex width100">
          <div class="cod">
            .bluee { <br>
              &nbsp; <b>z-index:</b> 3; <br>
              &nbsp; <b>position:</b> relative; <br>
            }
          </div>
          <div class="cod">
            .redd { <br>
              &nbsp; <b>z-index:</b> 2; <br>
              &nbsp; <b>position:</b> relative; <br>
              &nbsp; <b>margin:</b> -50px 0 0 50px; <br>
            }
          </div>
        </div>
      </div>
    </fieldset>
    
    <!-- OverFlow -->
    <fieldset>
      <legend> OverFlow </legend>
      <div class="flex fWrap">
        <div class="flex" style="width: 300px;">
          <div class="overflow">
            This text is inside the div element, which has a blue
            background color and is floated to the left. We set a specific
            height and width for the div element, and as you can see,
            the content cannot fit.This text is inside the div element, which has a blue
            background color and is floated to the left. We set a specific
            height and width for the div element, and as you can see,
            the content cannot fit.
          </div>
          <div class="cod" style="width: 140px;">
            .overflow { <br>
              &nbsp; <b>width:</b> 150px; <br>
              &nbsp; <b>height:</b> 150px; <br>
              &nbsp; <b>overflow:</b> auto; <br>
              <font class="gray"> visible, scroll, hidden</font> <br> }
          </div>
        </div>

        <div class="overflow2">
          This text is inside the div element, which has a blue
          background color and is floated to the left. We set a specific
          height and width for the div element, and as you can see. <br>
          the content cannot fit.This text is inside the div element, which has a blue
          background color and is floated to the left. We set a specific
          height and width for the div element, and as you can see,
          the content cannot fit.
        </div>
        <div class="cod" style="width: 140px;">
          .overflow { <br>
            &nbsp; <b>overflow:</b> auto; <br>
            &nbsp; <b>white-space:</b> nowrap; <br> }
        </div>
      </div> <hr>

      <!-- Word-Wrap -->
      <div class="flex">
        <div class="flex" style="width: 100%;">
          <div class="wordwrap" style="word-wrap: normal;"> ABCDEFGHIJKLMNÑOPQRSTUVWXYZ. </div>
          <div class="cod marg0 wAuto"> <u><b>word-wrap:</b> normal;</u> </div>
        </div>
        <div class="flex" style="width: 100%;">
          <div class="wordwrap" style="word-wrap: break-word;"> ABCDEFGHIJKLMNÑOPQRSTUVWXYZ. </div>
          <div class="cod marg0 wAuto"> <u><b>word-wrap:</b> break-word;</u> </div>
        </div>
      </div>

      <style>
        div.overflow , div.overflow2{
          width: 140px;
          height: 100px;
          background-color: lightblue;
          overflow: auto;
          padding: 3px;
          border: solid 1px black;
        }
        div.overflow2{
          white-space: nowrap;
          height: 60px;
        }
        .wordwrap{ 
          border: 1px solid black;
          width: 135px; height: 30px;
          background-color: lightblue;
          text-transform: lowercase;
        }
      </style>
    </fieldset>
  </section>

  <!-- Border y Box-Shadow -->
  <section id="Border & BoxShdw">

    <!-- Border-Radius -->
    <fieldset>
      <legend>  Border-Radius/Style  </legend>
      <div class="flex fWrap">
        <div class="flex" style="width: 100%;">
          <div class="boxsh divBorderRadius" style="margin-top: 15px;"> border-radius: 0 10px 20px 30px; </div>
          <div class="boxsh divCirculo"> border-radius: 50%; </div>
        </div>
        <div id="bordDiv">
          <font class="borderSty" style="border-style: dotted;"><b>border-style:</b> dotted.</font>
          <font class="borderSty" style="border-style: dashed;"><b>border-style:</b> dashed.</font>
          <font class="borderSty" style="border-style: double;"><b>border-style:</b> double.</font>
          <font class="borderSty" style="border-style: groove;"><b>border-style:</b> grooved.</font>
          <font class="borderSty" style="border-style: ridge;"><b>border-style:</b> ridged.</font>
          <font class="borderSty" style="border-style: inset;"><b>border-style:</b> inset.</font>
          <font class="borderSty" style="border-style: outset;"><b>border-style:</b> outset.</font>
        </div>
        <style>
          #bordDiv{
            width: 100%;
            padding: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
          }
          .borderSty{
            padding: 10px;
          }
        </style>
      </div>
      <style>
        .boxsh {
          width: 245px;
          height: 40px;
          padding: 7px;
          border: 1px solid black;
          text-align: center;
          display: table-cell;
          vertical-align: middle;
          background-color: green;
          color: white;
        }

        /* Border-Radius */
        .divBorderRadius {
          border-radius: 0 10px 20px 30px;
          width: 200px;
          height: 25px;
        }

        /* Circulo */
        .divCirculo {
          width: 60px;
          height: 60px;
          border-radius: 50%;
        }
      </style>
    </fieldset>

    <!-- Box-Shadow -->
    <fieldset>
      <legend>  Box-Shadow  </legend>
      <div class="flex fWrap" style="margin-top: 15px;">
        <!-- Shadow -->
        <div class="backgw boxsh" style="box-shadow: 10px 10px 10px 5px grey; color: black;">
          <b>box-shadow:</b> 10px 10px 10px 5px #888; <br>
          <font color="grey">box-shadow: Hriz, Vert, blur, spread, color</font>
        </div>

        <!-- Shadow Inside -->
        <div class="backgw boxsh" style="box-shadow: inset 5px 5px 15px grey, inset -5px -5px 15px grey; color: black">
          <b>box-shadow:</b> inset 5px 5px 15px grey, <br> inset -5px -5px 15px black ;
        </div>
      </div>

      <div class="flex fWrap">
        <!-- Box-Triple Shadow -->
        <div class="BoxTrilpeShadow">
          <b>box-shadow:</b> 0 0 10px 30px rgba(255, 191, 136, 0.742), <br> 30px 0 20px 30px #B0E0E6;
        </div>
        <!-- Transparent -->
        <div class="BoxTransparencia">
          <b>background-color:</b> #9ACD32; <br>
          <b>background: linear-gradient</b>(90deg, <br>
          &nbsp; rgba(38, 23, 179, 0.515) 0%, rgba(16, 129, 133, 0.549) 25%, <br>
          &nbsp; rgba(167, 201, 17, 0.433) 75%, rgba(72, 0, 56, 0.419) 100%); <br>
        </div>
      </div>
      <style>
        .backgw { background-color: #fff; }
        .BoxTrilpeShadow {
          text-align: center;
          vertical-align: middle;
          width: 220px;
          height: 50px;
          margin: 50px 0 50px 20px;
          background-color: #fff;
          box-shadow: 0 0 5px 5px #ff6347, 0 0 8px 20px rgba(255, 191, 136, 0.742), 15px 15px 10px 15px #004048;
        }
        .BoxTransparencia {
          width: 50%;
          height: 60px;
          padding: 15px;          
          margin: 35px 0 0 20px;
          background-color: #9ACD32;
          background: linear-gradient(90deg,
            rgba(38, 23, 179, 0.515) 0%,
            rgba(16, 129, 133, 0.549) 25%,
            rgba(167, 201, 17, 0.433) 75%,
            rgba(72, 0, 56, 0.419) 100%);
          box-shadow: 0 0 25px rgba(19, 8, 80, 0.486),
            inset 0 0 1px rgba(0, 189, 85, 0.829);
        }
      </style>
    </fieldset>
  </section>

  <!-- Backgroud -->
  <section id="Backgroud">
    <style> .deg { width: 50px; height: 50px; } </style>

    <!-- Dergadados Lineales -->
    <fieldset>
      <legend> Dergadados Lineales </legend>
      <div class="flex">
        <div class="flex">
          <div class="ej wAuto"><div class="degradados deg"></div></div>
          <div class="cod"> <b>background:</b><br> linear-gradient(red, black); </div>
          <style> div.degradados { background: linear-gradient(pink, blue); } </style>
        </div> <div class="hr"></div>
        <div class="flex">
          <div class="ej wAuto"><div class="degradadosmulticolor deg"></div></div>
          <div class="cod"> <b>background:</b> linear-gradient <br>(blue 0%, red 30%, black 80%); </div>
          <style> div.degradadosmulticolor { background: linear-gradient(yellow 0%, blue 40%, red 80%); } </style>
        </div>
      </div><br>

      <div class="flex">
        <div class="flex">
          <div class="ej wAuto"><div class="second deg"></div></div>
          <div class="cod"> 
            <b>background:</b> linear-gradient <br>(<u>45deg</u>, black, red, green); <br> <font class="gray">(<u>bottom left</u>, black, red, green)</font> 
          </div>
          <style> div.second { background: -webkit-linear-gradient(45deg, black, red, green); } </style>
        </div> <div class="hr"></div>
        <div class="flex">
          <div class="ej wAuto"> <div class="repeating deg"></div> </div>
          <div class="cod"> <b>background:</b> repeating-linear-gradient <br> (red, black 17px); </div>
          <style> div.repeating { background: repeating-linear-gradient(red, black 17px); } </style>
        </div>
      </div>
    </fieldset>

    <!-- Degradados Radiales -->
    <fieldset>
      <legend> Degradados Radiales </legend>
      
      <div class="flex fWrap">
        <div class="first48 degrad">Ellipse (Default)</div>
        <div class="second48 degrad">Circle</div>
        <div class="first49 degrad">Top Left</div>
        <div class="second49 degrad">In Percentages</div>
        <div class="colorstop degrad">Color Stops</div>
      </div>
      <div class="cod">
        <b>background:</b> -webkit-radial-gradient(<u>position</u>, shape or size, color-stops); <br>
        <div class="gray"><b>position:</b> top, left.. 0% 0%(sup izq), 50% 50%(medio)</div>
      </div>

      <style>
        .degrad {
          height: 80px; width: 100px;
          border: 1px solid black;
          color: #FFF;
          text-align: center;
          display: table-cell;
          vertical-align: middle;
        }
        div.first48 { background: -webkit-radial-gradient(red, yellow, blue); }
        div.second48 { background: -webkit-radial-gradient(circle, red, yellow, blue); }
        div.first49 { background: -webkit-radial-gradient(top left, red, yellow, blue); }
        div.second49 { background: -webkit-radial-gradient(red 5%, yellow 15%, blue 60%); }
        div.colorstop { background: -webkit-radial-gradient(circle, red 40%, yellow 50%, blue 70%); }
      </style>
    </fieldset>

    <!-- Backgrounds -->
    <fieldset>
      <legend> Backgrounds </legend>
      <!-- Background size -->
      <div class="flex fWrap">
        <div class="backsize" style="background-size: 75px 75px;"><b>background-size:</b> 75px</div>
        <div class="backsize" style="background-size: contain;"><b>background-size:</b> contain</div>
        <div class="backsize" style="background-size: cover;"><b>background-size:</b> cover</div>
        <div> 
          <div class="backclip" style="background-clip: padding-box;"> <b>background-clip:</b> padding-box</div>
          <div class="backclip" style="background-clip: content-box;"> <b>background-clip:</b> content-box</div> 
        </div>
      </div>
      <style>
        .backsize {
          height: 115px; width: 150px;
          border: 1px solid #000;
          background: url("http://www.sololearn.com/uploads/css_logo.png") no-repeat 50% 50%;
        }
        .backclip {
          border: 1px solid black;
          padding: 20px; margin: 1px;
          text-align: center;
          background-image: url("http://www.sololearn.com/uploads/css_logo.png");
        }
      </style>

      <!-- Multiple background -->
      <div class="flex">
        <div class="ej wAuto"><div class="multbg"></div></div>
        <div class="cod">
          div.multbg { <font class="gray">Multiple-background</font> <br>
            &nbsp; <b>background-image:</b> url("css_logo.png"), url("fondo.jpg"); <br>
            &nbsp; <b>background-position:</b> right bottom, left top; <br>
            &nbsp; <b>background-size:</b> 50px, 150px; <br>
            &nbsp; <b>background-repeat:</b> no-repeat; <br>
          }
        </div>
        <style>
          div.multbg {
            width: 200px; height: 100px;
            background-image: url("http://www.sololearn.com/uploads/css_logo.png"), url("http://www.sololearn.com/uploads/better-code.jpg");
            background-position: right bottom, left top;
            background-size: 80px, 200px;
            background-repeat: no-repeat;
          }
        </style>
      </div>

      <!-- Backoun Fix -->
      <div class="flex">
        <div class="ej wAuto">
          <div class="backgfx"></div>
        </div>
        <div class="cod">
          .backgfx{ <br>
            &nbsp; <b>background</b>: black url("/Imgs/cat1.png") no-repeat fixed; <br><br>

            &nbsp; <b>background-color:</b> black; <br>
            &nbsp; <b>background-image:</b> url("/Imgs/cat1.png"); <br>
            &nbsp; <b>background-repeat:</b> no-repeat; <br>
            &nbsp; <b>background-attachment:</b> fixed; <br>
            &nbsp; <b>background-size:</b> contain; <br>
          }
        </div>
        <style>
          .backgfx{
            height: 150px; width: 200px;
            background: black url("/Imgs/cat1.png") repeat fixed top;
            background-size: contain;
          }
          @media screen and (max-width: 767px){ .backgfx { height: 100px } }
        </style>
      </div>
    </fieldset>
  </section>

  <!-- transiciones y Transform -->
  <section id="Transition - Transform">

    <!-- Anim Prop -->
    <div class="flex">
      <div class="ej"> <div class="animdurat"></div> </div>
      <div class="cod">
        .div { <br>
          &nbsp; <b>animation:</b> widthChange 2s infinite; <br> }
      </div>
      <div class="cod">
        <font class="aqua">@keyframes</font> widthChange { <br>
          &nbsp; <font class="yellow">from</font> { width: 0px; } <font class="gray">0%</font> <br>
          &nbsp; <font class="yellow">to</font> { width: 250px; } <font class="gray">100%</font>  }
      </div>
      <style>
        div.animdurat {
          height: 50px;
          background-color: green;
          animation: colorchange2 1.2s infinite;
        }

        @keyframes colorchange2 {
          from { width: 50px; } 
          to { width: 150px; }
        }
      </style>
    </div>

    <!-- Transition -->
    <div class="flex">
      <div class="ej">
        <div class="box3d transit"> <font style="font-size: smaller;">Apuntame.</font> </div>
      </div>
      <div class="cod">
        .div { <br> &nbsp; <b>transition:</b> 2s;<br> } 
      </div>
      <div class="cod">
        .div:<font class="purp">hover</font> { <br> &nbsp; <b>width:</b> 350px; <br> }
      </div>
      <style>
        .transit { transition: 2s; }
        .transit:hover{ width: 200px; }
      </style> 
    </div> <br>

    <!-- Scale -->
    <div class="flex">
      <div class="flex">
        <div class="ej wAuto"> <div class="box3d scalerot"></div> </div>
        <div class="cod"> .div { <br> &nbsp; <b>transform:</b> scale(0.5, 0.5); <br> } <font class="gray">transform: none; (Desactivar)</font> </div>
        <style>
          .scalerot { animation: scaleAnim 2s infinite; }
          @keyframes scaleAnim {
            0% { transform: none; }
            50% { transform: scale(0.5, 0.5); }
            100% { transform: none; }
          }
        </style>
      </div>

      <!-- Translate (Mover) -->
      <div class="flex">
        <div class="ej wAuto" style="width: 100px;"><div class="box3d torig"></div></div>
        <div class="cod"> .div{ <br> &nbsp; <b>transform:</b> translate(10px); <br> } </div>
        <style>
          .torig { animation: translateAnim 2s infinite; }
          @keyframes translateAnim {
            0% { transform: none; }
            50% { transform: translate(20px); }
            100% { transform: none }
          }
        </style>
      </div>
    </div>

    <!-- Skew (Torcer) -->
    <div class="flex">
      <div class="flex">
        <div class="ej wAuto"> <div class="box3d skew"></div> </div>
        <div class="cod"> .div{ <br> &nbsp; <b>transform:</b> skew(30deg); <br> } </div>
        <style>
          div.skew {
            margin: 5px;
            animation: skewAnim 2s infinite;
          }
          @keyframes skewAnim {
            0% { transform: none; }
            50% { transform: skew(-25deg); }
            100% { transform: none; }
          }
        </style>
      </div>

      <!-- Rotate (Rotar) -->
      <div class="flex">
        <div class="ej wAuto"> <div class="box3d greendivrot"></div> </div>
        <div class="cod"> .div{ <br> &nbsp; <b>transform:</b> rotate(10deg); <br> &nbsp; <b>transform-origin:</b> top center; <br>} </div>
        <style>
          .greendivrot {
            margin: 5px;
            animation: rotAnim 1.5s infinite linear;
            transform-origin: top center;
          }
          @keyframes rotAnim {
            0% { transform: none; }
            25% { transform: rotate(-20deg); }
            75% { transform: rotate(20deg); }
            100% { transform: none; }
          }
        </style>
      </div>
    </div> <br>

    <!-- 3D Rotation -->
    <div class="flex">
      <div class="ej flex"> 
        <div class="box3d rot3d1">Texto</div>
        <div class="box3d rot3d2">Texto</div>
        <div class="box3d rot3d3">Texto</div>
      </div>
      <div class="cod"> .div{ <br> &nbsp; <b>transform:</b> rotateX(180deg); <font class="gray">rotateY(180deg); rotateZ(180deg);</font> <br> } </div>
      <style>
        .rot3d1{ animation: rot3d1 2s infinite; }
        .rot3d2{ animation: rot3d2 2s infinite; }
        .rot3d3{ animation: rot3d3 2s infinite; }

        @keyframes rot3d1 {
          0% { transform: none; }
          50% { transform: rotateX(180deg); }
          100% { transform: none; }
        }
        @keyframes rot3d2 {
          0% { transform: none; }
          50% { transform: rotateY(180deg); }
          100% { transform: none; }
        }
        @keyframes rot3d3 {
          0% { transform: none; }
          50% { transform: rotateZ(180deg); }
          100% { transform: none; }
        }
      </style>
    </div> <br>

    <!-- 3D Translate -->
    <div class="flex">
      <div class="ej" style="width: auto;"> <div class="empty"> <div class="box3d translate3d"></div> </div> </div>
      <div class="cod" style="width: 30%;"> .fondoGris { <br> &nbsp; <b>perspective:</b> 60px; <br> } </div>
      <div class="cod"> .div { <br> &nbsp; <b>transform:</b> <font class="blue">translateX</font>(10px) <font class="blue">translateY</font>(10px) <font class="blue">translateZ</font>(15px); <br> } </div>
      <style>
        div.empty {
          width: 50px; height: 50px;
          margin: 5px;
          background-color: gray;
          position: relative;
          border: 1px solid black;
          perspective: 60px;
        }
        .translate3d {
          animation: trans3d 2s infinite;
        }

        @keyframes trans3d {
          0% { transform: none; }
          50% { transform: translateX(10px) translateY(10px) translateZ(15px); }
          100% { transform: none }
        }
      </style>
    </div>

    <!-- 3D Persp -->
    <div class="flex">
      <div class="ej" style="width: auto;"> <div class="empty"> <div class="box3d persp3d"></div> </div> </div>
      <div class="cod" style="width: 30%;"> .fondoGris { <br> &nbsp; <b>perspective:</b> 60px; <br> } </div>
      <div class="cod"> .fondoGris { <br> &nbsp; <b>perspective:</b> 60px; <br> } </div>
      <style>
        .persp3d {
          animation: persp3d 2s infinite;
        }

        @keyframes persp3d {
          0% { transform: none; }
          50% { transform: rotateX(35deg); }
          100% { transform: none }
        }
      </style>
    </div>

    <!-- Info -->
    <div class="cod columnas" style="font-size: smaller;">
      <b>ease:</b> lento, rápio, lento. <br>
      <b>linear:</b> misma velocidad. <br>
      <b>ease-in:</b> inicio lento. <br>
      <b>ease-out:</b> termina lento. <br>
      <b>ease-in-out:</b> inicio y final lento. <br><br>

      (animation-direction: *) <br>
      <b>normal:</b> 0% a 100%. <br>
      <b>reverse:</b> 100% a 0%. <br>
      <b>alternate:</b> normal, reversa, normal. <br>
      <b>alternate-reverse:</b> reversa, normal, reversa. <br>
    </div>
  </section>

  <!-- Filtros -->
  <section id="Filtros">

    <!-- Filter Functions -->
    <fieldset>
      <legend>  Filter:  </legend>
      <div class="flex fltAuto">
        <div> Drop-Shadow() <br>
          <img class="fltr" style="filter: drop-shadow(5px 5px 2px green);" src="../logo.png" />
        </div>
        <div> Gray Scale() <br>
          <img class="fltr" style="filter: grayscale(100%);" src="../Imgs/tree.jpg" />
        </div>
        <div> Sepia() <br>
          <img class="fltr" style="filter: sepia(100%);" src="../Imgs/tree.jpg" />
        </div>
        <div> Saturate() <br>
          <img class="fltr" style="filter: saturate(300%);" src="../Imgs/tree.jpg" />
        </div>
        <div> Hue-Rotate() <br>
          <img class="fltr" style="filter: hue-rotate(180deg);" src="../Imgs/tree.jpg" />
        </div>
        <div> Invert() <br>
          <img class="fltr" style="filter: invert(70%);" src="../Imgs/tree.jpg" />
        </div>

        <div> Opacity 70%<br>
          <img class="fltr" style="filter: opacity(70%);" src="../Imgs/tree.jpg" />
        </div>
        <div> Brightness 70% <br>
          <img class="fltr" style="filter: brightness(70%);" src="../Imgs/tree.jpg" />
        </div>
        <div> Brightness 1.9 <br>
          <img class="fltr" style="filter: brightness(1.9);" src="../Imgs/tree.jpg" />
        </div>
        <div> Contrast 140% <br>
          <img class="fltr" style="filter: contrast(140%);" src="../Imgs/tree.jpg" />
        </div>
        <div> blur 5px <br>
          <img class="fltr" style="filter: blur(5px);" src="../Imgs/tree.jpg" />
        </div>
        <div style="position: relative;"> <b>backdrop-filter:</b> blur(5px) <br>
          <img height="110px" src="../Imgs/tree.jpg" />
          <div class="bkdrp"></div>
          <details>
            .fondo{ <br>
              &nbsp; position: relative; <br>} <br>
            .Transparent{ <br>
              <b>&nbsp; backdrop-filter: blur(5px);</b> <br>
              &nbsp; position: absolute; <br>
              &nbsp; top: 50%; left: 50%; <br>
              &nbsp; transform: translate(-50%, -50%); <br> }
          </details>
        </div>
      </div>
    </fieldset>
    <style>
      .fltAuto{
        margin: auto;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        text-align: center;
      }
      .fltr {
        height: 100px;
      }
      .fltr:hover{
        filter: none !important;
      }
      .bkdrp{
        width: 90px;
        height: 90px;
        background-color: #ffffff26;
        backdrop-filter: blur(5px);
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </section>
  
  <p id="textoFix"></p>
</body>
<script src="../index.js"></script>
</html>
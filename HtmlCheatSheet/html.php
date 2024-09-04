<?php

$title = "HTML";
$back_color = "rgba(255, 123, 0, 0.1)";
$shadow1 = "rgba(141, 0, 0, 0.161)";
$shadow2 = "rgba(255, 119, 0, 0.1)";

require("../PHP/config.php");
include_once("../PHP/header.php");
include_once("../PHP/navbar.php");
include("../PHP/cheats.php");

?>
<link rel="stylesheet" href="../HtmlCheatSheet/STYLE.css">

<body>
  <!-- HTML -->
  <section id="HTML">
    <fieldset> <!-- Metadatos -->
      <legend> Metadatos </legend>  
        <div class="cod">
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="lang" content="es"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="description" content="P&aacute;gina principal"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="keywords" content="html, css, sitio web"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="theme-color" content="#1bb566"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="robots" content="no-follow"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="author" content="Nicolas"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="organization" content="CheatsSheets-Org"> <br>
          &lt;<NRed>meta</NRed> <NPurp>name</NPurp>="locality" content="Córdoba, Arg"> <br>
        </div>
    </fieldset>

    <!-- Tipos de textos -->
    <fieldset>
      <legend> Tipos de textos </legend>

      <div class="flex"> <!-- PREformado -->
        <div class="ej"> <pre>            Texto   con       espacio. </pre> </div>
        <div class="cod"> <p><NRed>&lt;pre></NRed> PREformado <NRed>&lt;/pre></p> </div>
      </div>

      <div class="flex"> <!-- Texto Editable -->
        <div class="ej"> <p contenteditable="true"> Este texto es editable.</p> </div>
        <div class="cod"> <p><NRed>&lt;p <NPurp>contenteditable=</NPurp>"<NGreen>true</NGreen>"></NRed> Texto <NRed>&lt;/p></NRed></p> </div>
      </div>

      <div class="flex"> <!-- Marquee -->
        <div class="ej"> <marquee> Texto que se desplaza de un lado al otro. </marquee> </div>
        <div class="cod"> <NRed>&lt;marquee></NRed> Marquee <NRed>&lt;/marquee></NRed> </div>
      </div>
      
      <div class="flex"> <!-- Span - Reforzado -->
        <div class="flex"> <!-- Span -->
          <div class="ej"> font </div>
          <div class="cod"> <NRed>&lt;span></NRed>  <NRed><s>&lt;font></s></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- Reforzado -->
          <div class="ej"> <strong> Importante </strong> </div>
          <div class="cod"> <NRed>&lt;b></NRed> b <NRed>&lt;/strong></NRed></div>
        </div>
      </div>

      <div class="flex"> <!-- Grande - Pequeño -->
        <div class="flex"> <!-- Grande -->
          <div class="ej"> <big> grande </big> </div>
          <div class="cod"> <NRed>&lt;big></NRed> b <NRed>&lt;/big></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- Pequeño -->
          <div class="ej"> <small> Pequeño </small> </div>
          <div class="cod"> <NRed>&lt;small></NRed> S <NRed>&lt;/small></NRed> </div>
        </div>
      </div>

      <div class="flex"> <!-- Sub/Sup Indices -->
        <div class="flex"> <!-- SubIndice -->
          <div class="ej"> Texto <sub> SubIndice </sub> </div>
          <div class="cod"> <NRed>&lt;sub></NRed> SI <NRed>&lt;/sub></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- SupIndice -->
          <div class="ej"> Texto <Sup> SupIndice </Sup> </div>
          <div class="cod"> <NRed>&lt;sup></NRed> SI <NRed>&lt;/sup></NRed> </div>
        </div>
      </div>

      <div class="flex"> <!-- Subrayado - Borrado -->
        <div class="flex"> <!-- Subrayado -->
          <div class="ej"> <ins>Subrayado</ins> </div>
          <div class="cod"> <NRed>&lt;u></NRed> S <NRed>&lt;/ins></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- Borrado -->
          <div class="ej"> <del> Borrado </del> </div>
          <div class="cod"> <NRed>&lt;del></NRed> d <NRed>&lt;/del></NRed> </div>
        </div>
      </div>

      <div class="flex"> <!-- Cursiva - Remarcado -->
        <div class="flex"> <!-- Cursiva -->
          <div class="ej"> <i> Cursiva </i> </div>
          <div class="cod"> <NRed>&lt;i></NRed> I <NRed>&lt;/em></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- Remarcado -->
          <div class="ej"> <mark> Remarcado</mark> </div>
          <div class="cod"> <NRed>&lt;mark></NRed> Ma <NRed>&lt;/mark></NRed> </div>
        </div>
      </div>

      <div class="flex"> <!-- Abr - Acr -->
        <div class="flex"> <!-- Abreviacion -->
          <div class="ej"> <abbr title="Abreviación"> Abr. </abbr> </div>
          <div class="cod"> <NRed>&lt;abbr></NRed> Abr. <NRed>&lt;/abbr></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> <!-- Acronimo -->
          <div class="ej"> <acronym title="Organizacion de las Naciones Unidas"> ONU </acronym> </div>
          <div class="cod"> <NRed>&lt;acronym></NRed> </div>
        </div>
      </div>
      
      <div class="flex"> <!-- Definicion - CortarPalabra -->
        <div class="flex"> <!-- Definicion -->
          <div class="ej"> <dfn title="Es la ciencia que s..."> psicología </dfn> </div>
          <div class="cod"> <NRed>&lt;dfn <NPurp>title=""</NPurp>></NRed><NRed>&lt;/dfn></NRed> </div>
        </div> <div class="hr"></div>
        <div class="flex"> 
          <div class="ej">PalabraMuyLarga<wbr>CortadaPorLaMitad</div>
          <div class="cod">Pal<NRed>&lt;wbr></NRed>abra </div>
        </div>
      </div>
    </fieldset>

    <!-- Imagen -->
    <fieldset>
      <legend> Imagen </legend>
    
      <!-- Imagen con texto alternativo: -->
      <div class="flex">
        <div class="ej wAuto"> 
          <a href="../Imgs/Apple.png" target="_blank"> <img src="../Imgs/Apple.png" alt="Apple" height="50px" title="Apple"> </a>
        </div>
        <div class="cod">
          <NRed>&lt;a</NRed> <font color="purple">href</font> ="<font color="green">../Apple.png</font>"<NRed>></NRed> <br>
          &nbsp; <NRed>&lt;img</NRed> <font color="purple">src=</font> "<font color="green">../Imagen.png</font>" <font color="purple">alt=</font>"Texto alternativo" <font color="purple">title=</font>"descripción"<NRed>> <br> &lt;/a></NRed> <font class="gray"> target="_blank" (abrir en nueva pestaña) </font>
        </div>
      </div> <hr>

      <!-- Mapa -->
      Imagen con Mapa: <u>(Usar DreamWeaver CC)</u>
      <div class="flex fWrap">
        <div class="ej wAuto">
          <img src="../Imgs/imgMap.png" usemap="htmlcheatsheet.html#ejemplo_mapa" height="163px">
          <map name="ejemplo_mapa">
            <area shape="rect" coords="18,16,171,73" href="../Imgs/Apple.png" alt="rectangulo">
            <area shape="circle" coords="263,55,36" href="../Imgs/css_logo.png" alt="circulo">
            <area shape="poly" coords="163,91,213,141,127,141" href="../Imgs/Orange.png" alt="poligono">
          </map>
        </div>
        
        <div class="cod wAuto" style="font-size: 0.9em;">
          <NRed>&lt;img</NRed> <NPurp>src</NPurp>="imgMap.png"  <NPurp>usemap</NPurp>="HTML.html#ejemplo_mapa""<NRed>></NRed> <br><br>
          <NRed>&lt;map</NRed> <NPurp>name</NPurp>="ejemplo_mapa"<NRed>></NRed> <br>
            &nbsp; <NRed>&lt;area</NRed> <NPurp>shape</NPurp>="rect" <NPurp>coords</NPurp>="18,16,171,73" <NPurp>href</NPurp>="Apple.png"> <br>
              <!-- <font class="gray">coorlds(izq, sup, der, inf)</font> <br> -->
            &nbsp; <NRed>&lt;area</NRed> <NPurp>shape</NPurp>="circle" <NPurp>coords</NPurp>="263,55,36" <NPurp>href</NPurp>="css_logo.png"> <br>
              <!-- <font class="gray">(centro-x, centro-y, redia)</font> <br> -->
            &nbsp; <NRed>&lt;area</NRed> <NPurp>shape</NPurp>="poly" <NPurp>coords</NPurp>="163,91,213,141,127,141" <br> <NPurp>href</NPurp>="Orange.png"> <br>
              <!-- <font class="gray">(x1, y1, x2, y2, ..., xN, yN)</font> <br> -->
            <NRed>&lt;/map></NRed> <br>
          <font class="gray"> nohref=""(indica q este area no tiene enlace) </font>
        </div>
      </div>
    </fieldset>

    <!-- Audio, Video, Progress, Iframe -->
    <fieldset>
      <legend> Audio, Video, Progreso, Iframe </legend>
      <!-- Audio -->
      <div class="flex fWrap">
        <div class="wAuto">
          <audio src="audio.mp3" controls style="height: 50px; width: 240px;"> Texto por si el navegador no soporta audio. </audio>
          <div class="cod">&lt;<NRed>audio<font class="purp"> src="<font class="green">aud.mp3</font>" controls autoplay loop</font>> &lt; /audio</NRed>></div>
        </div>
        <div class="wAuto"> <br>
          <progress min="0" max="100" value="75" style="height: 24px; width: 240px;"></progress> <br>
          <div class="cod">
            &lt;<NRed>progress <font class="purp"> min="<font class="green">0</font>" max="<font class="green">100</font>"value="<font class="green">75</font>>  </font> /progress</NRed>>
          </div>
        </div>
      </div> <hr><br>

      <!-- Video - IFrame -->
      <div class="flex fWrap" style="font-size: 0.9em;">
        <div class="wAuto">
          <iframe width="300" height="150" src="https://www.youtube.com/embed/o8kT5c_4PAc" frameborder="0" allowfullscreen></iframe>
          <div class="cod"> &lt;<NRed>iframe</NRed> <font class="purp">src</font>="<font class="green">link</font>" <font class="purp">frameborder</font>="0" <font class="purp">allowfullscreen</font>> &lt;/<NRed>iframe</NRed>> </div>
        </div>
        <div class="wAuto">
          <video controls autoplay loop> <source src="video.mp4" type="video/mp4">Este navegador no soporta audio. </video>
          <div class="cod">&lt;<NRed>video <font class="purp">src="<font class="green">video.mp4</font>" controls autoplay loop</font>> &lt;/video</NRed>> <br></div>
        </div>
      </div>
    </fieldset>
    
    <!-- Listas -->
    <fieldset class="flex fWrap">
      <legend> Listas </legend>

      <!-- Lista desordenada -->
      <div>
        <h3>Desordenada &lt;ul&gt;</h3>
        <ul>
          <li type="disc">Disc</li>
          <li type="circle">Circle</li>
          <li type="square">Square</li>
        </ul>
        <div class="codigo"> <NRed>
          &lt;ul> <br> 
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>disc</NGreen>"> &lt;/li> <br>
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>circle</NGreen>"> &lt;/li> <br>
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>square</NGreen>"> &lt;/li> <br>
          &lt;/ul> </NRed>
        </div>
      </div> <hr>
        
      <!-- Lista  Ordenada -->
      <div>
        <h3>Ordenada &lt;ol&gt;</h3>
        <ol>
          <li type="1">Numeros (1).</li>
          <li type="a">Letras (a-A).</li>
          <li type="I">Num romanos (i-I).</li>
        </ol>
        <div class="codigo"> <NRed>
          &lt;ol> <br>
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>1</NGreen>"> &lt;/li> <br>
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>a</NGreen>"> &lt;/li> <br>
            &nbsp; &lt;li <NPurp>type</NPurp>="<NGreen>I</NGreen>"> &lt;/li> <br>
          &lt;/ol> </NRed>
        </div> 
      </div> <hr>
      
      <!-- Lista descriptiva -->
      <div>
        <h3>Descriptiva &lt;dl&gt;</h3>
        <dl> <dt>Texto a detallar.
          <dd> Texto descriptivo...</dd> </dt>
        </dl> <br>
        <div class="codigo"> <NRed>
          &#60;dl> <br> &nbsp; &#60;dt> <NVar>Texto a detallar.</NVar> <br>
          &nbsp; &nbsp; &#60dd> <NVar>Texto descriptivo...</NVar> &#60;/dd></dd> <br>
          &nbsp; &#60;/dt> <br> &#60;/dl> </NRed>
        </div>
      </div>
    </fieldset>

    <!-- Tabla -->
    <fieldset class="flex">
      <legend>  Tabla </legend>
      <div><br>
        <table border="2" style="width: 100%; height: 100px; background-color: white;">
          <caption> Título </caption>
          <tr><th colspan="4">Colores</th></tr>
          <tr>
            <td bgcolor="red">Rojo</td>
            <td>Azul</td>
            <td>Verde</td>
            <td rowspan="2">Violeta</td>
          </tr>
          <tr>
            <td>Amarillo</td>
            <td colspan="2">Naranja</td>
          </tr>
        </table>

        <p>
          Atributos: BORDER, CELLPADDING, CELLSPACING. <br>
            VALING = alinear verticalmente. (top, bottom, middle) <br>
            ALING = alinear horizontalmente. (right, left, center) <br>
        </p>
      </div>

      <div class="codigo">
        <NRed>&lt;table <font class="purp">border</font>="2"></NRed>  <br>
          &nbsp; <NRed>&lt;caption></NRed> Título <NRed>&lt;/caption></NRed> <br>
          &nbsp; <NRed>&lt;tr>&lt;th <font class="purp">colspan</font>="4"></NRed> Colores <NRed>&lt;/th>&lt;/tr></NRed><br>
          &nbsp; <NRed>&lt;tr></NRed> <br>
            &nbsp; &nbsp; &lt;td <font class="purp">bgcolor</font>="red">Rojo &lt;/td> <br>
            &nbsp; &nbsp; &lt;td> Azul &lt;/td> <br>
            &nbsp; &nbsp; &lt;td> Verde &lt;/td> <br>
            &nbsp; &nbsp; &lt;td <font class="purp">rowspan</font>="2"> Violeta &lt;/td> <br>
          &nbsp; <NRed>&lt;/tr> &lt;tr></NRed> <br>
            &nbsp; &nbsp; &lt;td> Amarillo &lt;/td> <br>
            &nbsp; &nbsp; &lt;td <font class="purp">colspan</font>="2"> Naranja &lt;/td> <br>
          <NRed>&nbsp; &lt;/tr> &lt;/table></NRed>
      </div>
    </fieldset>

    <!-- Links -->
    <fieldset>
      <legend>  Links  </legend>

      <!-- Link Externo: -->
      <div class="flex">
        <div class="ejemplo"><a href="#" target="_blank"> Link Externo: </a></div>
        <div class="cod">
          <NRed>&lt;a</NRed> <font color="purple">href=</font>"<u>https://ejemplo.com</u>" <font color="purple">target=</font>"_blank"<NRed>></NRed>
          Texto del link <NRed>&lt;/a></NRed>
        </div>
      </div>

      <!-- Link Interno: -->
      <div class="flex">
        <div class="ejemplo"><a href="../index.html">Link Interno:</a></div>
        <div class="cod">
          <NRed>&lt;a</NRed> <font color="purple">name=</font>"principio"<NRed>>&lt;/a></NRed>  <br>
        </div>
        <div class="cod">
        <NRed>&lt;a</NRed> <font color="purple">href=</font>"<u>#principio</u>"<NRed>></NRed> ir a index <NRed>&lt;/a></NRed> 
        </div>
      </div>
    </fieldset>

    <!-- Form - Tipos de Entradas -->
    <fieldset>
      <legend>  Formularios (usar en &lt;form> y PHP)  </legend>

      <!-- Text / number -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>text</NRed> / <NRed>number</NRed>">
        </div>
        <div class="box boxizq">
          <input type="text" placeholder="Texto">
          <input type="number" name="" id="" placeholder="123">
        </div>
      </div>

      <!-- Radio / Checkbox -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>radio</NRed> / <NRed>checkbox</NRed>">
        </div>
        <div class="boxizq">
          <div class="box boxder">
            <input type="checkbox" />
            <input type="checkbox" checked />
            <input type="checkbox" />
          </div>
          <div class="box boxder">
            <input type="radio" name="siono" value="no" />NO
            <input type="radio" name="siono" value="yes" checked />YES
          </div>
        </div>
      </div>

      <!-- Button / Color -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>button</NRed> / <NRed>image</NRed> / <NRed>color</NRed>">
        </div>
        <div class="boxizq">
          <div class="box boxder">
            <input type="button" value="Botón">
          </div>
          <div class="box boxder">
            <input type="color" name="" id="" value="#00fff0">
          </div>
            <input type="image" src="../Imgs/login-button.png" alt="Login" width="50px">
        </div>
      </div>

      <!-- Email / Password -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>email</NRed> / <NRed>password</NRed>">
        </div>
        <div class="box boxizq">
          <input type="email" name="" id="" placeholder="ejemplo@hotmail.com">
          <input type="password" placeholder="********">
        </div>
      </div>

      <!-- File -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>file</NRed>">
        </div>
        <div class="box boxizq">
          <input type="file" name="" id="">
        </div>
      </div>

      <!-- Range -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>range</NRed>">
        </div>
        <div class="box boxizq">
          <input type="range" name="" id="">
        </div>
      </div>

      <!-- Search -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>search</NRed>">
        </div>
        <div class="box boxizq">
          <input type="search" name="" id="" placeholder="Buscar">
        </div>
      </div>

      <!-- Tel -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>tel</NRed>">
        </div>
        <div class="box boxizq">
          <input type="tel" name="" id="" placeholder="123-456-789">
        </div>
      </div>

      <!-- Time / Date / Datetime-local -->
      <div class="div">
        <div class="box boxder">
          &lt;input type="<NRed>time</NRed>/<NRed>date</NRed>/<NRed>datetime-local</NRed>">
        </div>
        <div class="box boxizq">
          <input type="time" name="" id="" style="width: 100px;">
          <input type="date" name="" id="" style="width: 100px;">
          <input type="datetime-local" name="" id="" style="width: 200px;">
        </div>
      </div>

      <!-- Week / Month -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>week</NRed> / <NRed>month</NRed>">
        </div>
        <div class="box boxizq">
          <input type="week" name="" id="">
          <input type="month" name="" id="">
        </div>
      </div>

      <!-- Url -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>url</NRed>">
        </div>
        <div class="box boxizq">
          <input type="url" name="" id="" placeholder="https://www.google.com">
        </div>
      </div>

      <!-- Submit / Reset -->
      <div class="div">
        <div class="box boxder">
          &lt; input type="<NRed>submit</NRed> / <NRed>reset</NRed>">
        </div>
        <div class="box boxizq">
          <input type="submit" name="" id="">
          <input type="reset" name="" id="">
        </div>
      </div>

      <hr>

      <!-- TextArea -->
      <div class="div">
        <div class="boxizq">
          <label>Comentarios:</label> <br>
          <textarea name="comentario" id="" value=""></textarea>
        </div><br>
        <div class="box boxder" style="height: auto;">
          <NRed>&lt;label></NRed>Comentarios:<NRed>&lt;label></NRed> <br>
          <NRed>&lt;textarea</NRed> <NPurp>rows</NPurp>="<NGreen>6</NGreen>" <NPurp>cols</NPurp>="<NGreen>40</NGreen>"<NRed>> &lt;/textarea></NRed>
        </div>
      </div> <br><br>

      <!-- datalist -->
      <div class="div">
        <div class="boxizq">
          <input placeholder="Seleccionar o Escribir:" list="Lista">
          <datalist id="Lista">
            <option value="uno"></option>
            <option value="dos"></option>
            <option value="tres"></option>
          </datalist>
        </div>
        <div class="box boxder">
          <NRed>&lt;input</NRed> <NPurp>List=</NPurp>"<NGreen>Lista</NGreen>"<NRed>>
          &lt;datalist <NPurp>id=</NPurp>"<NGreen>Lista</NGreen>">
          &lt;option <NPurp>value=</NPurp>"<NGreen>uno</NGreen>"></NRed>
        </div>
      </div> <br>

      <!-- select / option -->
      <div class="div">
        <div class="box boxizq">
          <label> Escojer Pais: </label>
          <select name="escojerUno">
            <optgroup label="Latinoamerica">
              <option value="Arg">Argentina</option>
              <option value="Col">Colombia</option>
            </optgroup>
            <optgroup label="Norteamerica">
              <option value="EEUU">Estados Unidos</option>
              <option value="Can">Canada</option>
            </optgroup>
          </select>
        </div>
        <div class="box boxder">
          <NRed>&lt;select <NPurp>name=</NPurp>"<NGreen>Lista2</NGreen>">
          &lt;optgroup <NPurp>label=</NPurp>"<NGreen>Lat</NGreen>">
          &lt;option <NPurp>value=</NPurp>"<NGreen>Arg</NGreen>"></NRed>
        </div>
      </div>
      <hr>

      <!-- Formulario POST -->
      <form action="">
        <label for="POST-name">Nombre:</label>
        <input id="POST-name" type="text" name="name" />
        <input type="submit" value="Save" />
      </form>
      <div class="cod">
        &lt;<NRed>form</NRed> <NPurp> action</NPurp>="<NGreen>file.php</NGreen>" <NPurp>method</NPurp>="<NGreen>POST / GET</NGreen>"> <br>
        <NTab></NTab>&lt;<NRed>label</NRed> <NPurp> for</NPurp>="<NGreen>POST-name</NGreen>"> Nombre: &lt;<NRed>/label</NRed>> <br>
        <NTab></NTab>&lt;<NRed>input</NRed> <NPurp> id</NPurp>="<NGreen>POST-name</NGreen>" <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>name</NGreen>" /> <br>
        <NTab></NTab>&lt;<NRed>input</NRed> <NPurp> type</NPurp>="<NGreen>submit</NGreen>" <NPurp>value</NPurp>="<NGreen>Save</NGreen>" /> <br>
        &lt;<NRed>/form</NRed>>
      </div>



    </fieldset>
  </section>

  <!-- Canvas -->
  <section id="Canvas">

    <!-- Concepto Básico -->
    <fieldset>
      <legend>  Concepto Básico  </legend>

      <!-- Mas Info -->
      <!-- <details>
        <summary>Canvas...(más info)...</summary>
        - Los elementos se dibujan programáticamente <br>
        - Los dibujos se realizan con píxeles <br>
        - Las animaciones no están incorporadas <br>
        - Alto rendimiento para operaciones de dibujo basadas en píxeles <br>
        - Dependiente de la Resolución <br>
        - No hay soporte para controladores de eventos <br>
        - Puede guardar la imagen resultante como .png o .jpg <br>
        - Muy adecuado para los juegos de gráficos intensivos <br> <br>
      </details> -->

      <!-- Canvas simple -->
      Canvas es solo contenedor grafico (para mostrar requiere JavaScript).
      <div class="flex">
        <div class="ej wAuto">
          <canvas id="canvas" width="80" height="80" style="margin: auto;"> </canvas>
        </div>
        <div class="cod">
          <NRed> &lt;canvas</NRed> <font class="purp">id=</font>"<font class="green">canvas1</font>" 
            <font class="purp">width=</font>"<font class="green">200</font>" <font class="purp">height=</font>"<font class="green">100</font>"<NRed>></NRed><br>
          <font class="gray">(El Id es necesario para identificarlo en JS).</font>
        </div>
        <div class="cod">
          <font class="purp">var</font> c = document.<font class="blue">getElementById</font> ("<font class="green">canvas1</font>"); <br>
          <font class="purp">var</font> ctx2 = c.<font class="blue">getContext</font>("<font class="green">2d</font>"); <br><br>
          ctx2.fillStyle = "<font class="green">rgba(0, 200, 0, 1)</font>"; <font class="gray">// #0f0</font> <br>
          ctx2.<font class="blue">fillRect</font>(10, 10, 60, 60); <font class="gray">// x, y, width, height</font> <br>
        </div>
      </div>
      <div class="flex">
        <div class="cod">
          <font class="gray">// Linea</font> <br>
          ctx2.lineWidth = 2; <font class="gray">// Tamaño</font>
          ctx2.moveTo(20,20); <font class="gray">// Start</font> <br>
          ctx2.lineTo(60,60); <font class="gray">// End</font> <br>
          ctx2.stroke(); <font class="gray">// finalizar</font>
        </div>
        <div class="cod">
          <font class="gray">// Circulo y Cuadrado</font> <br>
          ctx2.beginPath(); <br>
          ctx2.arc(40, 40, 25, 0, 2 * Math.PI); <br>
          ctx2.rect(20, 20, 40, 40); <br>
          ctx2.stroke();
        </div>
        <div class="cod">
          <font class="gray">// Texto </font> <br>
          ctx2.font = "1em Arial"; <br>
          ctx2.fillStyle = "rgba(0, 0, 0, 1)"; <br>
          ctx2.fillText("Hello World", 15, 10); <br>
          ctx2.stroketext("sin relleno", 10, 10);
        </div>
      </div>
      <script>
        var c = document.getElementById("canvas");
        var ctx2 = c.getContext("2d");        
        
        // Fondo
        ctx2.fillStyle = "rgba(0, 200, 0, 1)";
        ctx2.fillRect(0, 0, 80, 80); // x, y, w, h
        
        // Linea
        ctx2.lineWidth = 2; // Espresor
        ctx2.moveTo(20,20); // Start
        ctx2.lineTo(60,60); // End
        ctx2.stroke(); // finalizar

        // Circulo y Cuadrado
        ctx2.beginPath();
        ctx2.arc(40, 40, 25, 0, 2 * Math.PI); // (x,y,r,start,stop)
        ctx2.rect(20, 20, 40, 40);
        ctx2.stroke();

        // Texto
        ctx2.font = "Arial";
        ctx2.fillStyle = "rgba(0, 0, 0, 1)";
        ctx2.fillText("Hello World", 15, 10);
        // ctx2.stroketext("Sin relleno", 50, 10);
      </script>

      <!-- Translate script -->
      <div class="flex">
        <div class="ej wAuto"> <canvas id="canvas2" width="280" height="100"> </canvas> </div>
        <div class="cod">
          <font class="purp">var</font> c = document.<font class="blue">getElementById</font> ("<font class="green">canvas1</font>"); <br>
          <font class="purp">var</font> ctx3 = c.<font class="blue">getContext</font>("<font class="green">2d</font>"); <br><br>
          ctx3.font = "<font class="green">bold 22px Tahoma</font>"; <br>
          <u>ctx3.<font class="blue">translate</font>(100, 60);</u> <font class="gray">// Coords (x, y)</font> <br>
          <u>ctx3.<font class="blue">rotate</font>((Math.PI / 180) * 25);</u> <br>
          <u>ctx3.<font class="blue">scale</font>(<font class="orange">1, 4</font>);</u> <br>
          ctx3.fillText("<font class="green">Despues</font>", 0, 0); <br>
          <script>
            var c = document.getElementById("canvas2");
            var ctx = c.getContext("2d");

            ctx.font = "bold 14px Tahoma";
            ctx.fillStyle = "rgba(0, 0, 0, .1)"; 
            ctx.fillText("(antes)", 0, 15);
            ctx.translate(100, 60);
            ctx.fillStyle = "#000"; 
            ctx.rotate((Math.PI / 180) * 25);
            ctx.scale(1, 4);
            ctx.fillText("(Despues)", 0, 0);

          </script>
        </div>
      </div>
      
      <!-- Gradient... -->
      <details>
        <summary>Gradient y Img</summary>
          <pre>
            // Create gradient
            var grd = ctx2.createRadialGradient(75, 50, 5, 90, 60, 100);
            grd.addColorStop(0, "red");
            grd.addColorStop(1, "white");

            // Fill with gradient
            ctx2.fillStyle = grd;
            ctx2.fillRect(0, 0, 10, 80);

            // IMG
            var img = document.getElementById("scream");
            ctx.drawImage(img, 10, 10);
          </pre>
      </details>

    </fieldset>
  </section> <br>

  <!-- SVG -->
  <section id="SVG">

    <details>
      <summary>SVG...(más info)...</summary>
      SVG: <br>
      - Los elementos son parte del DOM de la página (Modelo de Objetos del Documento) <br>
      - El dibujo se hace con vectores <br>
      - Efectos, como animaciones son incorporadas <br>
      - Basado en sintaxis XML estándar, que provee mejor accesibilidad. <br>
      - Independiente de la Resolución <br>
      - Soporte para manejadores de eventos <br>
      - No apto para aplicaciones de juegos <br>
      - Es mejor para aplicaciones con áreas grandes de renderización (por ejemplo, Google Maps) <br>

      <a href="https://www.sololearn.com/learning/1014/2200/4369/1" blank>Más info... (sololearn).</a>
    </details> <br>

    SVG define imgs basadas en vectores en formato XML.
    <!-- Circulo y Cuadrado -->
    <div class="flex">
      <div class="ej" style="width: 220px;">
        <svg width="60" height="60"> <circle cx="30" cy="30" r="20" fill="green" /> </svg>
        <svg width="60" height="60"> <rect width="40" height="40" x="10" y="10" fill="red" /> </svg>

        <svg width="60" height="50"> <line x1="10" y1="10" x2="50" y2="40" style="stroke:#000; stroke-linecap:round; stroke-width:7"> </svg>
        <svg width="80" height="40"> <polyline style="stroke-linejoin:miter; stroke:black; stroke-width:5; fill: none;" points="0 0, 40 30, 80 0"> </polyline> </svg>

        <svg width="70" height="55"> <ellipse cx="35" cy="25" rx="35" ry="10" style="fill:blue" /> </svg>
        <svg width="70" height="40"> <polygon points="10 10, 60 40, 50 2" style="fill: pink; stroke:black;" /> </svg>
        
        <svg width="55" height="55"> <path d="M 0 0 L50 40 L50 0 Z" style="stroke:#000;  fill:none;" /> </svg>
        <svg width="50" height="50"> <path d="M0 0 L0 25 L25 25 L25 0 Z" style="stroke:#000;  fill:none;" /> </svg>
      </div>
      <div class="cod">
        <NRed>&lt;svg</NRed> <font class="purp">width</font>="100" <font class="purp">height</font>="100"<NRed>>&lt;/svg></NRed> <br>
          &nbsp; <NRed>&lt;circle</NRed> cx="30" cy="30" r="20" fill="green" <NRed>/></NRed> <br>
          &nbsp; <NRed>&lt;rect</NRed> width="40" height="40" x="10" y="10" fill="red"<NRed> /></NRed> <br><br>

          <!-- Linea y Poly-->
          &nbsp; <NRed>&lt;line</NRed> x1="10" y1="10" x2="50" y2="40" style="stroke:#000; stroke-linecap:round; stroke-width:7"<NRed>></NRed> <br>
          &nbsp; <NRed>&lt;polyline</NRed> style="stroke-linejoin: miter; stroke: black; stroke-width: 5; fill: none;" points="0 0, 40 30, 80 0" <NRed>> &lt;/polyline></NRed> <br><br>

          <!-- Elipse y Poly -->
          &nbsp; <NRed>&lt;ellipse</NRed> cx="30" cy="30" rx="30" ry="10" style="fill:green" <NRed>/></NRed> <br>
          &nbsp; <NRed>&lt;polygon</NRed> points="10 10, 60 40, 50 0" style="fill: green; stroke:black;" <NRed>/></NRed> <br> <br>

          <!-- triangulo hipot -->
          &nbsp; <NRed>&lt;path</NRed> d="M 0 0 L50 50 L50 0 Z" style="stroke:#000;  fill:none;" <NRed>/></NRed> <br>
          &nbsp; <NRed>&lt;path</NRed> d="M0 0 L0 25 L25 25 L25 0 Z" style="stroke:#000;  fill:none;" <NRed>/></NRed> <br>
          <details>
            <div class="codigo">
              (Usar letras Mayusculas para valores absolutos, y minusculas para pos relativa) <br>
              M: mover hacia. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; L: linea hacia. <br>
              H: linea horiz. hacia. &nbsp; &nbsp; V: linea vert. hacia. <br>
              C: curva hacia. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; S: curva suave hacia. <br>
              Q: curv Bézir cuadráti. &nbsp; T: curva Bézier cuadrática suave. <br>
              A: arco elíptico. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Z: cerrar trazado.
            </div>
          </details>
        <NRed>&lt;/svg></NRed>
      </div>
    </div>

    <!-- Animaciones  <animate> -->
    <div class="flex">
      <div class="ej wAuto">
        <svg width="120" height="20">
          <rect width="20" height="20" fill="orange">
            <animate attributeName="x" from="0" to="100" dur="1s" fill="freeze" repeatCount="indefinite" />
          </rect>
        </svg>
      </div>
      <div class="cod">
          &nbsp; <NRed>&lt;rect</NRed> width="20" height="20" fill="orange"> <br>
          &nbsp; <NRed>&nbsp; &lt;animate</NRed> attributeName="x" from="0" to="100" dur="1s" fill="freeze" repeatCount="indefinite"/>  <br>
          &nbsp; <NRed>&lt;/rect></NRed><font class="gray">fill= valor al finalzar (remove(resetea valor), freeze(conserva el valor "to")).</font>
      </div>
    </div>

  </section>

</body>
<script type="text/javascript" src="../index.js"></script>
</html>
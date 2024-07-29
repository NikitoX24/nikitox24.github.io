<?php

$title = "JS";
$back_color = "rgba(0, 255, 0, .03)";
$shadow1 = "rgba(0, 159, 0, 0.3)";
$shadow2 = "rgba(0, 255, 38, 0.1)";

require("../PHP/config.php");
include_once("../PHP/header.php");
include_once("../PHP/navbar.php");
include("../PHP/cheats.php");

?>
<link rel="stylesheet" href="../HtmlCheatSheet/STYLE.css">

<body>
  <!-- Fundamentos -->
  <section id="Fundamentos">

    <fieldset> <!-- Variable -->
      <legend> Variables </legend>
      <div class="flex">
        <div class="cod">
          <NPurp>let</NPurp> a <NPurp>=</NPurp> <NOrg>true</NOrg>; <NGray> // privada.</NGray> <br>
          <NPurp>var</NPurp> b <NPurp>=</NPurp> <NOrg>100</NOrg>; <NGray> // publica.</NGray> <br>
          <NPurp>const</NPurp> c <NPurp>=</NPurp> '<NGreen>hello</NGreen>'; <NGray>// priv + no modif.</NGray> <br>
        </div>
        <div class="cod">
          <NGray> // Literales de plantilla</NGray> <br>
          <NPurp>let</NPurp> <b>nombre</b> <NPurp>=</NPurp> '<NGreen>David</NGreen>'; <br>
          <NPurp>let</NPurp> mensaje <NPurp>=</NPurp> `<NGreen>Welcome <NAqua>${<NVar>nombre</NVar>}</NAqua>!</NGreen>`; <NGray>// (alt+96)</NGray>
        </div>
      </div> <br>

      <b>Metodos de variables</b>
      <div class="cod">
        <NGray>str / int =</NGray> user <NAqua>??</NAqua> "<NGreen>Anonymous</NGreen>"; <NGray>// (si no tiene valor, poner uno)</NGray> <br>
        <NGray>string =</NGray> <NObj>String</NObj>(<NOrg>true</NOrg>); <NGray>// (convertir algun valor a String).</NGray> <br>
        <NGray>int =</NGray> <NObj>Number</NObj>("<NGreen>123</NGreen>"); <NGray>// (convertir algun valor a Number).</NGray> <br>
        <NGray>int =</NGray> +("<NGreen>123</NGreen>"); <NGray>// (convertir algun valor a Number).</NGray> <br>
        <hr>
        <NGray>bool =</NGray> <NBlue>Boolean</NBlue>("<NGreen>asd</NGreen>"); <NGray>// true (si contiene), false (no)</NGray> <br>
        <NGray>bool =</NGray> <NBlue>!!</NBlue>"<NGreen>asd</NGreen>"; <NGray>// true (si contiene), false (no)</NGray> <br>
      </div> <br>

      <b>Metodos de Numeros</b>
      <div class="cod">
        <div class="flex separados">
          <div> <NPurp>let</NPurp> a = <NOrg>1_300_000_000</NOrg>; <NGray>// 1.3m</NGray> </div>
          <div> <NPurp>let</NPurp> a = <NOrg>1.3e9</NOrg>; <NGray>// 1.3m </NGray> </div>
          <div> <NPurp>let</NPurp> b = <NOrg>1.e-4</NOrg>; <NGray>// 0.0001 </NGray> </div>
          <div> <NPurp>let</NPurp> c = <NOrg>0xFF</NOrg>; <NGray>// 255 </NGray> </div>
        </div> <hr>
        <div class="flex separados">
          <div> (255).<NBlue>toString</NBlue>(<NOrg>2</NOrg>) <NGray>// 11111111 </NGray> </div>
          <div> 255..<NBlue>toString</NBlue>(<NOrg>16</NOrg>) <NGray>// ff </NGray> </div>
          <div> (123456).<NBlue>toString</NBlue>(<NOrg>32</NOrg>) <NGray>// 2n9c </NGray> </div>
        </div> <hr>
        <div class="flex separados">
          <div> <NBlue>parseInt</NBlue>("<NGreen>100px</NGreen>"); <NGray>// 100 </NGray> </div>
          <div> <NBlue>parseFloat</NBlue>("<NGreen>12.5em</NGreen>"); <NGray>// 12.5 </NGray> </div>
          <div> <NBlue>parseInt</NBlue>("<NGreen>a123</NGreen>"); <NGray>// NaN </NGray> </div>
        </div> <hr>
        <div class="flex separados">
          <div> Math.<NBlue>floor</NBlue>(<NOrg> 3.1 </NOrg>); <NGray>// 3 </NGray> </div>
          <div> Math.<NBlue>floor</NBlue>(<NOrg> -1.1 </NOrg>); <NGray>// -2</NGray> </div>
        </div>
        <div class="flex separados">
          <div> Math.<NBlue>ceil</NBlue>(<NOrg> 3.1 </NOrg>); <NGray>// 4 </NGray> </div>
          <div> Math.<NBlue>ceil</NBlue>(<NOrg> -1.1 </NOrg>); <NGray>// -1 </NGray> </div>
        </div>
        <div class="flex separados">
          <div> Math.<NBlue>round</NBlue>(<NOrg> 3.1 </NOrg>); <NGray>// 3 </NGray> </div>
          <div> Math.<NBlue>round</NBlue>(<NOrg> 3.5 </NOrg>); <NGray>// 4 </NGray> </div>
        </div>
        <div class="flex separados">
          <div> 1.23456..<NBlue>toFixed</NBlue>(<NOrg>2</NOrg>); <NGray>// "1.23" (string) </NGray> </div>
          <div> +(1.11).<NBlue>toFixed</NBlue>(<NOrg>5</NOrg>); <NGray>// 1.11000 (num) </NGray> </div>
        </div>
      </div> <br>
    
      <b>Map</b>
      <div class="cod">
        <NPurp>let</NPurp> map<NAqua> = new </NAqua> <NObj>Map( )</NObj>; <NGray>// Crear Mapa.</NGray> <br>
        map.<NBlue>set</NBlue>("<NGreen>clave</NGreen>", "<NGreen>valor</NGreen>"); <NGray>// Agregar elemento.</NGray> <br>
        map.<NBlue>get</NBlue>("<NGreen>clave</NGreen>"); <NGray>// Obtener elemento.</NGray> <br>
        map.<NBlue>has</NBlue>("<NGreen>clave</NGreen>"); <NGray>// Bool si tiene.</NGray> <br>
        map.<NBlue>delete</NBlue>("<NGreen>clave</NGreen>"); <NGray>// Eliminar elemento.</NGray> <br>
        map.<NBlue>clear</NBlue>(); <NGray>// Vaciar Map.</NGray> <br>
        map.<NBlue>size</NBlue>; <NGray>// devuelve la cantidad de elementos.</NGray> <br>
        map.<NBlue>keys</NBlue>(); <NGray>// Claves.</NGray> <br>
        map.<NBlue>values</NBlue>(); <NGray>// Valores.</NGray> <br>
      </div>
    </fieldset>

    <script>
      let map = new Map()
      map.set("1", "asd")
      for (let a of map.keys() ){
        console.log(a);
      }
    </script>
    
    <fieldset> <!-- Metodos de Strings -->
      <legend> Metodos de Strings (no se modifican) </legend>
      <div class="cod">
        <NPurp>let</NPurp> texto = "<NGreen>Hola a todos mis amigos, a mis Videos</NGreen>";
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        <NGray>int =</NGray> texto.length; <NGray>// 37</NGray> <br> 
        <NGray>int =</NGray> texto.<NBlue>indexOf</NBlue>("<NGreen>la</NGreen>", <NOrg>1</NOrg>); <NGray>// 2 </NGray> <br>
        <NGray>int =</NGray> texto.<NBlue>lastIndexOf</NBlue>("<NGreen>mis</NGreen>"); <NGray>// 27</NGray> <br>
        <NGray>int =</NGray> texto.<NBlue>search</NBlue>("<NGreen>a</NGreen>"); <NGray>// 3</NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        <NGray>array =</NGray> texto.<NBlue>match</NBlue>("<NGreen>todos</NGreen>"); <NGray>// [todos] (array-obj)</NGray> <br>
        <NGray>array =</NGray> texto.<NBlue>match</NBlue>(/<NGreen>mis</NGreen>/<NOrg>gi</NOrg>); <NGray>// [mis, mis] </NGray> <br>
        <NGray>array =</NGray> texto.<NBlue>split</NBlue>(" ", <NOrg>2</NOrg>); <NGray>// (Array separados por " ", cantidad)</NGray> <br> 
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        <NGray>string =</NGray> texto.<NBlue>at</NBlue>(<NOrg>-3</NOrg>); <NGray>// e</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>charAt</NBlue>(<NOrg>3</NOrg>); <NGray>// a</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>slice</NBlue>(<NOrg>0, 5</NOrg>) ; <NGray>// Leer (start, stop(opcional))</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>substr</NBlue>(<NOrg>5, 11</NOrg>); <NGray>// "a todos mis" (start, cantidad)</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>substring</NBlue>(<NOrg>5, 11</NOrg>); <NGray>// "a todo" (start, index)</NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        <NGray>string =</NGray> texto.<NBlue>replace</NBlue>("<NGreen>mundo", "amigos</NGreen>"); <NGray>// (reemplazar) </NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>trim</NBlue>(); <NGray>// (quitar espacios antes y dps)</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>toUpperCase / toLowerCase</NBlue>(); <NGray>// (transform)</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>concat</NBlue>("<NGreen>_</NGreen>", var); <NGray>// (unir strings)</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>repeat</NBlue>(<NOrg>2</NOrg>); <NGray>// (repetir)</NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        <NGray>bool =</NGray> texto.<NBlue>includes</NBlue>("<NGreen>amig</NGreen>", <NOrg>25</NOrg>); <NGray>// false</NGray> <br>
        <NGray>bool =</NGray> texto.<NBlue>includes</NBlue>("<NGreen>amig</NGreen>"); <NGray>// true</NGray> <br>
        <NGray>bool =</NGray> texto.<NBlue>startsWith</NBlue>("<NGreen>Si</NGreen>"); <NGray>// false</NGray> <br>
        <NGray>bool =</NGray> texto.<NBlue>endsWith</NBlue>("<NGreen>Videos</NGreen>"); <NGray>// true</NGray> <br>
      </div>
    </fieldset>

    <fieldset> <!-- Arrays --> 
      <legend> Arrays </legend>
      Crear:
      <div class="flex">
        <div class="cod"> <NPurp>var</NPurp> myArray <NAqua>= new</NAqua> <NObj>Array</NObj>("<NGreen>a</NGreen>", "<NGreen>b</NGreen>"); </div>
        <div class="cod"> <NPurp>var</NPurp> myArray = <NAqua>new</NAqua> <NObj>Array</NObj>(<NOrg>3</NOrg>); </div>
        <div class="cod"> <NPurp>var</NPurp> myArray = [<NOrg>1</NOrg>, "<NGreen>b</NGreen>", <NRed>true</NRed>]; </div>
      </div><br>

      Metodos de array: (se modifican) <br>
      <div class="cod">
        <!-- ["A", "B", "C", "C"] -->
        <NPurp>let</NPurp> array = ["<NGreen>A</NGreen>", "<NGreen>B</NGreen>", "<NGreen>C</NGreen>", "<NGreen>C</NGreen>"]; <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        array.length; <NGray>// 4</NGray> <br>
        array.length = <NOrg>0</NOrg>; <NGray>// (borrar array) </NGray> <br>
        <NAqua>delete</NAqua>(array[<NOrg>2</NOrg>]); <NGray>// ["A", "B", undefined, "C"]  (borra valor, pero no el elemento)</NGray> <br>
        <NObj>Array</NObj>.<NBlue>isArray</NBlue>(<u>array</u>); <NGray>// true</NGray> <br>
        <NObj>Array</NObj>.<NBlue>from</NBlue>("<NGreen>ABC</NGreen>"); <NGray>// ["A", "B", "C"];</NGray> <br>
        <NPurp>let</NPurp> [one, two, three] = array; <br>
        <NGray>string =</NGray> array.<NBlue>join</NBlue>(" "); <NGray>// (convertir en string y separar por " ")</NGray> <br>
        <NGray>array =</NGray> array.<NBlue>flat</NBlue>(); <NGray>// (unir todos los sub-arrays)</NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->
        
        <b>Buscar</b>: <br>
        <NGray>int =</NGray> array.<NBlue>findIndex</NBlue>(elem => elem == "<NGreen>B</NGreen>"); <NGray>// 1 (buscar 1ro)</NGray> <br>
        <NGray>int =</NGray> array.<NBlue>indexOf</NBlue>("<NGreen>X</NGreen>"); <NGray>// -1 (buscar 1ro)</NGray> <br>
        <NGray>string =</NGray> array.<NBlue>at</NBlue>(-<NOrg>2</NOrg>); <NGray>// (extraer por index)</NGray> <br>
        <NGray>string =</NGray> array.<NBlue>pop</NBlue>(); <NGray>// (extrae/elimina último)</NGray> <br>
        <NGray>string =</NGray> array.<NBlue>push</NBlue>("<NGreen>C</NGreen>"); <NGray>// (agregar último y return length)</NGray> <br>
        <NGray>string =</NGray> array.<NBlue>find</NBlue>(elem => elem == "<NGreen>A</NGreen>"); <NGray>// A (buscar 1ro)</NGray> <br>
        <NGray>array =</NGray> array.<NBlue>slice</NBlue>(<NOrg>1, 3</NOrg>); <NGray>// [B, C]  (leer desde index(1-2 args) )</NGray> <br>
        <NGray>array =</NGray> array.<NBlue>filter</NBlue>(elem => elem == "<NGreen>C</NGreen>"); <NGray>// [C, C] (buscar todos)</NGray> <br>
        <NGray>array =</NGray> array.<NBlue>filter</NBlue>(elem => elem != "<NGreen>A</NGreen>"); <NGray>// [B, C, C] (buscar todos excepto "A")</NGray> <br>
        <NGray>array =</NGray> array.<NBlue>filter</NBlue>(elem => elem == "<NGreen>A</NGreen>" || element == "<NGreen>B</NGreen>"); <NGray>// [A, B] (buscar "A" y "B") ?</NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->

        <b>Modificar</b>: <br>
        <NGray>[-]</NGray> array.<NBlue>splice</NBlue>(<NOrg>2, 1</NOrg>); <NGray>// (elimina un index)</NGray> <br>
        <NGray>[+]</NGray> array.<NBlue>splice</NBlue>(<NOrg>1, 0</NOrg>, "<NGreen>G</NGreen>"); <NGray>// (agregar y/o eliminar alguno/s) (index, borrar cant, nuevo valor)</NGray> <br>
        <NGray>←(-)</NGray> array.<NBlue>shift</NBlue>(); <NGray>// (extrae/elimina el 1ro)</NGray> <br>
        <NGray>←(+)</NGray> array.<NBlue>unshift</NBlue>("<NGreen>A</NGreen>"); <NGray>// (agrega en el 1ro y return length)</NGray> <br>
        <NGray>(-)→</NGray> array.<NBlue>pop</NBlue>(); <NGray>// (extrae/elimina último)</NGray> <br>
        <NGray>(+)→</NGray> array.<NBlue>push</NBlue>("<NGreen>C</NGreen>"); <NGray>// (agregar último y return length)</NGray> <br>
        array.<NBlue>concat</NBlue>(array2); <NGray>// ["A", "B", "C", "C", 1, 2, 3] (unir arrays en un nuevo array) </NGray> <br>
        array.<NBlue>fill</NBlue>("<NGreen>x</NGreen>", <NOrg>2</NOrg>); <NGray>// A, B, x, x... (llenar a partir de un index) </NGray> <br>
        array.<NBlue>fill</NBlue>("<NGreen>x</NGreen>", <NOrg>0</NOrg>, <NOrg>3</NOrg>); <NGray>// x, x, x, C (a partir de , cantidad) </NGray> <br>
        <NGray>[←]</NGray> array.<NBlue>reverse</NBlue>(); <NGray>// (1ro es último, y viceversa)</NGray>  <br>
        <NGray>A-Z</NGray> array.<NBlue>sort</NBlue>(); <NGray>// (odenar asc A-Z) <a href="../Imgs/arraySort.png">Leer más...</a></NGray> <br>
        <!-- ------------------------------------- --> <hr> <!-- ------------------------------------- -->

        <b>Recorrer</b>: <br> <!-- ["A", "B", "C"]; -->
        <NPurp>let</NPurp> array = ["<NGreen>A</NGreen>", "<NGreen>B</NGreen>", "<NGreen>C</NGreen>"]; <br>
        array.<NBlue>map</NBlue>(elem <NPurp>=></NPurp> elem + "<NGreen>#</NGreen>"); <NGray>// ["A#", "B#", "C#"] (recorrer arrays) </NGray> <br>
        array.<NBlue>forEach</NBlue>((elem, i) <NPurp>=></NPurp> {elem + i}); <NGray>// ["A0", "B1", "C2"] ? (recorrer arrays) </NGray> <hr>
        <!-- [1, 2, 3, 4] -->
        <NPurp>let</NPurp> array = [<NOrg>1</NOrg>, <NOrg>2</NOrg>, <NOrg>3</NOrg>, <NOrg>4</NOrg>]; <br>
        <NGray>bool =</NGray> array.<NBlue>some</NBlue>(elem => elem < <NOrg>2</NOrg>); <NGray>// true (alguno es menor q?)</NGray> <br>
        <NGray>bool =</NGray> array.<NBlue>every</NBlue>(elem => elem < <NOrg>2</NOrg>); <NGray>// false (todos son menor q?)</NGray> <br>
        <NGray>int =</NGray> array.<NBlue>reduce</NBlue>((acumulado, actual) <NPurp>=></NPurp> acumulado + actual); <NGray>// 10 (unir anterior(acumulados) con el siguiente) </NGray> <br>
      </div><br>

      <div class="flex">
        <!-- Extraer de DOM y ponerlos en un Array -->
        <div class="w60">
          Extraer de DOM y ponerlos en un Array
          <div class="cod">
            <NPurp>let</NPurp> elementos = <NObj>Array</NObj>.<NBlue>from</NBlue>(document.<NBlue>querySelectorAll</NBlue>("<NGreen>.dias p</NGreen>"));<br>
            <NPurp>var</NPurp> array = elementos.<NBlue>map</NBlue>(dia <NPurp>=></NPurp> dia.textContent); <br>
            console.<NBlue>log</NBlue>(array); <NGray>// ["L", "M", "M" ...] </NGray>
          </div>
        </div>
        <!-- Destructurar Arrays: -->
        <div class="w40">
          Destructurar Arrays:
          <div class="cod">
            <NPurp>let</NPurp> arrDes <NAqua>=</NAqua> ['<NGreen>1</NGreen>', '<NGreen>2</NGreen>', '<NGreen>3</NGreen>']; <br>
            <NPurp>let</NPurp> [one, two, three] <NAqua>=</NAqua> arrDes; <br>
            console.<NBlue>log</NBlue>(one); <NGray>// 1</NGray>
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- Funciones -->
      <legend>  Funciones  </legend>
      <div class="flex">
        <div class="cod w50">
          <!-- Declaración de Función -->
          <NGray>// Declaración de Función </NGray> <br>
          <NPurp>function</NPurp> <NBlue>saludar</NBlue>() { <br>
            &nbsp; console.<NBlue>log</NBlue>("<NGreen>Hola!</NGreen>"); <br> }
          <hr>
          <!-- Expresión de Función -->
          <NGray>// Expresión de Función </NGray> <br>
          <NPurp>let</NPurp> <u>saludar</u>; <br>
          <u>saludar</u> = <NPurp>function</NPurp> () { <br>
          &nbsp; console.<NBlue>log</NBlue>("<NGreen>Hola!</NGreen>"); <br> };
        </div>
        <!-- JS Doc -->
        <div class="cod">
          <NGray>/** <br>
            <NTab></NTab>* Devuelve x elevado a la potencia de n. <br>
            <NTab></NTab>* <br>
            <NTab></NTab>* @param {number} x El número a elevar. <br>
            <NTab></NTab>* @param {number} n La potencia, debe ser un número natural. <br>
            <NTab></NTab>* @return {number} x Devuelve x elevado a la potencia de n. <br>
            <NTab></NTab>*/ <br> 
            </NGray>
            <NPurp>function</NPurp> <NBlue>pow</NBlue>(x, n) { <br> 
              <NTab></NTab> <NGray>// Código...</NGray> <br> }
        </div>
      </div> <hr>

      <div class="flex">
        <div class="cod">
          <NGray>// Funciones de Flechas</NGray> <br>
          <NPurp>let</NPurp> <NBlue>myFunc</NBlue> <NPurp>=</NPurp> () <NPurp>=></NPurp> "<NGreen>Hola!</NGreen>"; <NGray>//sin parametros.</NGray> <br>
          <NPurp>let</NPurp> <NBlue>myFunc</NBlue> <NPurp>=</NPurp> name <NPurp>=></NPurp> "<NGreen>Hola: </NGreen>" + name; <NGray>//con 1 parametro.</NGray> <br>
          <NPurp>let</NPurp> <NBlue>myFunc</NBlue> <NPurp>=</NPurp> (a, b) <NPurp>=></NPurp> a+b; <NGray>//con varios parametros.</NGray> <br>
          <NPurp>let</NPurp> <NBlue>myFunc</NBlue> <NPurp>=</NPurp> (a, b) <NPurp>=></NPurp> { a + b; }; <NGray>// multilínea.</NGray>
        </div>
        <!--  -->
        <div class="cod">
          <!-- <NGray>// Expresión de Funcion de flechas</NGray> <br> -->
          <NPurp>let</NPurp> age = <NBlue>prompt</NBlue>("<NGreen>Edad?</NGreen>", <NOrg>18</NOrg>); <br>
          <NPurp>let</NPurp> <NBlue>welcome</NBlue> = (age < <NOrg>18</NOrg> ) ? <br>
          &nbsp; () => <NBlue>alert</NBlue>("<NGreen>Payaso</NGreen>"): <br>
          &nbsp; () => <NBlue>alert</NBlue>("<NGreen>Calvo!</NGreen>"); <br>
          <NBlue>welcome</NBlue>();
        </div>
      </div> <hr>

      <!-- Enviar-Devolver Array -->
      <b>Funcion con Arrays</b>
      <div class="flex">
        <div class="cod">
          <NGray>// Devolver Array</NGray> <br>
          <NPurp>function</NPurp> <NBlue>MyFunc</NBlue>(...array) { <br>
            &nbsp; console.<NBlue>log</NBlue>(array); <br> } <br><br>
          <NBlue>MyFunc</NBlue>("Ene", "Feb" ...);
        </div>
        <div class="cod">
          <NGray>// Enviar Array</NGray> <br>
          <NPurp>function</NPurp> <NBlue>myFunc</NBlue>( uno, dos ) { <br>
            &nbsp; document<NBlue>.write</NBlue>(uno + dos); <br> } <br>
            <NPurp>var</NPurp> array=["<NGreen>Juan</NGreen>", "<NGreen>David</NGreen>"];<br>
            <NBlue>myFunc</NBlue>(...array);
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- Alert, Prompt, Confirm. -->
      <legend> Alert, Prompt, Confirm. </legend>
      <div class="flex">
        <div class="width100">
          <button onclick="botonalerta1();"> Alert </button>
            <NBlue>Alert</NBlue>("<NGreen>Alerta</NGreen>")
            <script> function botonalerta1() { alert("Esto es una Alerta!"); } </script> <br>
          <button onclick="botonalerta2();"> Prompt </button>
            <NBlue>Prompt</NBlue>("<NGreen>Solicitud</NGreen>")
            <script> function botonalerta2() { alert("Esto es una Solicitud!"); } </script> <br>
          <button onclick="botonalerta3();"> Confirm </button>
            <NBlue>Confirm</NBlue>("<NGreen>Confirm</NGreen>")
            <script> function botonalerta3() { alert("Esto es una Confirmacion!"); } </script> <br>
        </div>
        <div class="cod">
          <NGray>//Prompt</NGray> <br>
            <NPurp>var</NPurp> soli = <NBlue>prompt</NBlue>("<NGreen>Nombre</NGreen>", "<NGreen>Placeholder</NGreen>"); <br>
            document.<NBlue>write</NBlue>("<NGreen>hola</NGreen> "+ soli); <br>
          <NGray>//Confirm</NGray> <br>
            <NPurp>var</NPurp> a = <NBlue>confirm</NBlue>("<NGreen>Necesitas ayuda?</NGreen>") ? "<NGreen>Si</NGreen>" : "<NGreen>No</NGreen>"; <br>
            document.<NBlue>write</NBlue>(a);
        </div>
      </div>
    </fieldset>
    
    <fieldset class="flex"> <!-- SetInterval - SetTimeout  -->
      <legend>SetInterval - SetTimeout</legend>
      <div class="width100">
        <b>SetInterval (Infinito)</b>
        <div class="cod wAuto">
          <NPurp>var</NPurp> x = <NBlue>setInterval</NBlue>(<NBlue>MyFuncion</NBlue>, <NOrg>1000</NOrg>); <br>
          function <NBlue>MyFuncion</NBlue>() { <br>
            &nbsp; <NBlue>clearInterval</NBlue>(x); <br> }
        </div>
      </div>
      <div class="width100"> <!-- SetTimeOut -->
        <b> SetTimeout (1 vez) </b>
        <div class="cod wAuto">
          <NBlue>setTimeout</NBlue>(<NBlue>MyFuncion</NBlue>, <NOrg>1000</NOrg>);  <NGray>// 1seg</NGray> <br>
          function <NBlue>MyFuncion</NBlue>() { <br> &nbsp; <NGray>// Codigo...</NGray> <br> }
        </div>
      </div>
      <div class="width100">
        <b>Promise ES6</b>
        <div class="cod wAuto">
          <NPurp>new</NPurp> <font class="selector">Promise</font>( <br>
            &nbsp; <NPurp>function</NPurp>(<NRed>resolve</NRed>, <NRed>reject</NRed>) { <br>
            &nbsp; <font class="aqua">if</font> (success) <br>
              &nbsp; &nbsp; <NBlue>resolve</NBlue>(result); <br>
            &nbsp; <font class="aqua">else</font> <br>
              &nbsp; &nbsp; <NBlue>reject</NBlue>(<NBlue>Error</NBlue>("<NGreen>failure</NGreen>")); <br>
          });
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- Condicionales IF/Switch -->
      <legend> Condicionales </legend>
      <div class="flex">
        <div class="cod">
          <font class="aqua">if</font> (condicion) { <br>
            &nbsp; <NGray>// Declaraciones si es Verdadero.</NGray> <br>
          } <font class="aqua">else</font> { <br>
            &nbsp; <NGray>// Declaraciones si es Falso.</NGray> <br> } <br>
          Variable <NAqua>=</NAqua> (condicion) <NAqua>?</NAqua> True <NAqua>:</NAqua> False;
        </div>
        <div class="cod" style="font-size: smaller;">
          <font class="aqua">switch</font> ( Expresion ) { <br>
            &nbsp;<font class="aqua">case</font> 1: <br>
              &nbsp; <NGray>// Bloque de Codigo</NGray> <br>
            &nbsp; <font class="aqua">break;</font> <br>
            &nbsp;<font class="aqua">default:</font> <br>
              &nbsp; <NGray>// Bloque de Codigo</NGray> <br>
            &nbsp; <font class="aqua">break;</font> <br>
            }
        </div>
        <div class="cod">
          <NPurp>let</NPurp> age = <NBlue>prompt</NBlue>("<NGreen>Edad?</NGreen>", 18); <br><br>
          <NPurp>let</NPurp> mensaje = (age < <NOrg>18</NOrg>) <NAqua>?</NAqua> '<NGreen>Ilegalisimo</NGreen>' <NAqua>:</NAqua> <br>
          (age < <NOrg>18</NOrg>) <NAqua>?</NAqua> '<NGreen>Payaso!</NGreen>' <NAqua>:</NAqua>  '<NGreen>¡Calvo!</NGreen>'; <br><br>
          console.<NBlue>log</NBlue>(mensaje);
        </div>
      </div>
    </fieldset>
    
    <fieldset> <!-- Bucles For -->
      <legend> Bucle For (ES6) </legend>
      <div class="flex">
        <div class="cod width100">
          <u><b>For In:</b></u> <NGray>//  (Solo para Objetos Literales) </NGray> <br>
          <NPurp>let</NPurp> obj <NPurp>=</NPurp> {a:<NOrg>1</NOrg>, b:<NOrg>2</NOrg>, c:<NOrg>3</NOrg>}; <br>
          <font class="aqua">for</font> (<NPurp>let</NPurp> v <NPurp>in</NPurp> obj) { <br>
            &nbsp; document.<NBlue>write</NBlue>(v); <br> }
        </div>
        <div class="cod width100">
          <u><b>For Of:</b></u> <NGray>// (Solo para Arrays o Strings) </NGray> <br>
          <NPurp>let</NPurp> obj <NPurp>=</NPurp> ["<NGreen>hola</NGreen>", "<NGreen>hi</NGreen>"]; <br>
          <font class="aqua">for</font> (<NPurp>let</NPurp> v <NPurp>of</NPurp> obj) { <br>
            &nbsp; document.<NBlue>write</NBlue>(v); <br> }
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- ForEach -->
      <legend> ForEach (recorrer Arrays) </legend>
      <div class="flex">
        <div class="width100">
          <u><b>ForEach:</b></u>
          <div class="cod">
            <NPurp>var</NPurp> array<NPurp>=</NPurp> [2,3,7,8]; <br><br>
            array.<NBlue>forEach</NBlue>(<NPurp>function</NPurp>(<NRed>el</NRed>) { <br>
              &nbsp; document.<NBlue>write</NBlue>(<NRed>el</NRed> * 2); <br>
            }); <br>
            <NGray>// 4 6 14 16</NGray>
          </div>
        </div>
        <div class="flecha wAuto"></div>
        <div class="width100">
          <u><b>ForEach ES6:</b></u>
          <div class="cod">
            <NPurp>const</NPurp> array <NPurp>=</NPurp> [2,3,7,8];<br><p style="line-height: 10px;"> </p>
            array.<NBlue>forEach</NBlue>(<NRed>v</NRed> <NPurp>=></NPurp> {<br>
              &nbsp; document.<NBlue>write</NBlue>(<NRed>v</NRed> * 2);<br>
            }); <br>
            <NGray>// 4 6 14 16</NGray>
          </div>
        </div>
      </div>
    </fieldset>
  </section>

  <!-- Objetos -->
  <section id="Objetos"> 
    <div class="flex">
      <!-- Crear un Objeto  -->
      <fieldset class="wAuto">
        <legend> Objeto Literal </legend>
        <div class="cod wAuto">
          <NPurp>let</NPurp> person = { <strong>"last name":</strong> "<NGreen>Queen</NGreen>" };
          <hr>
          person["<NGreen>last name</NGreen>"]; <NGray>// (Obtener)</NGray> <br>
          person.<strong>age</strong> = "<NOrg>30</NOrg>"; <NGray>// (Agregar/Cambiar)</NGray> <br>
          <NAqua>delete</NAqua> person.<strong>age</strong>; <NGray>// (Borrar key)</NGray> <br>
          "<NGreen>name</NGreen>" <NAqua>in</NAqua> person; <NGray>// false (Existe key)</NGray> <br>
        </div>
        <div class="cod wAuto">
          <NGray>// Propiedades Calculadas</NGray> <br>
          <NPurp>let</NPurp> <strong>keyName</strong> = "<NGreen>nombre</NGreen>"; <br>
          <NPurp>let</NPurp> person = { [<strong>keyName</strong> + "1"]: "<NGreen>David</NGreen>" }; <br>
        </div>
      </fieldset>

      <!-- Funcion Constructora -->
      <fieldset class="wAuto">
        <legend title="(para navegadores viejos)" style="cursor: help;">Función Constructora</legend>
        <div class="cod wAuto">
          <NPurp>function</NPurp> <NObj>Person</NObj>(name, age) { <br>
            &nbsp; <NAqua>this</NAqua>.name = name; <br>
            &nbsp; <NAqua>this</NAqua>.age = age; <br> }
        </div>
        <!-- Constructor de Objetos -->
        <div class="cod wAuto">
          <NGray>// Constructor de Objetos</NGray> <br>
          <NPurp>let</NPurp> p1 = <NAqua>new</NAqua> <NObj>Person</NObj>("<NGreen>John</NGreen>", <NOrg>42</NOrg>) <br>
          document.<NBlue>write</NBlue>(p1.age) <NGray>//42</NGray> <br>
        </div> <br>
        <!-- Función de un único uso.. -->
        <details>
          <summary>Función de un único uso...</summary>
          <div class="cod">
            <NPurp>let</NPurp> user<NAqua> = new</NAqua> <NPurp>function</NPurp>() { <br>
            <NTab></NTab> <NAqua>this.</NAqua>name = "<NGreen>John</NGreen>"; <br> };
          </div>
        </details>
      </fieldset>

      <Flecha></Flecha>
      
      <!-- Clase -->
      <fieldset class="wAuto">
        <legend>Clase (ES6)</legend>
        <div class="cod wAuto">
          <NPurp>class <NObj>person{</NObj> <br>
          &nbsp; constructor(<NVar>name, age</NVar>){</NPurp> <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.age = age; <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
        <div class="cod wAuto">
          <NPurp>let</NPurp> p1 = <NAqua>new</NAqua> <NBlue>person</NBlue>("<NGreen>John</NGreen>", <NOrg>42</NOrg>) <br>
          document.<NBlue>write</NBlue>(p1.age) <NGray>//42</NGray>
        </div>
      </fieldset>
    </div>

    <!-- Metodos -->
    <fieldset>
      <legend> Metodos / Funciones </legend>
      <div class="flex">
        <!-- Metodo en Objeto -->
        <div class="width100">
          Metodo en Objeto:
          <div class="cod wAuto">
            <NPurp>let</NPurp> person = { <br>
              &nbsp; name: "<NGreen>David</NGreen>", <br>
              &nbsp; age: <NOrg>20</NOrg>, <br>
              <div class="markBlock">
                &nbsp; <NBlue>cumple</NBlue>() { <br>
                  &nbsp; &nbsp; <NAqua>this</NAqua>.age++; <br>
                &nbsp; }
              </div>
            }; <br><br>
            <NGray>// Checkear si existe algo...</NGray> <br>
            person.<NBlue>cumple</NBlue>?.(); <NGray>// si existe ejecuta, sino ignora.</NGray>
          </div>
        </div>

        <!-- Metodo en Constructor -->
        <div class="width100">
          Metodo en Constructor:
          <div class="cod wAuto">
            <NPurp>function</NPurp> <NObj>person(<NVar>name, age</NVar>) {</NObj> <br>
              &nbsp; <NAqua>this</NAqua>.name = name; <br>
              &nbsp; <NAqua>this</NAqua>.age = age; <br>
              <div class="markBlock">
                &nbsp; <NAqua>this</NAqua>.<u>newName</u> = <NBlue>funcion</NBlue> (name); { <br>
                  &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
                  &nbsp;} <br>
              </div> <NObj>}</NObj> <br><br>
            <NPurp>var</NPurp> p = <NPurp>new</NPurp> <NBlue>person</NBlue>("David", 21); <br>
            <div class="markBlock">
              p.<NBlue><u>newName</u></NBlue>("Jhon"); <br>
            </div>
            <NGray>// Ahora (p.name) es Jhon.</NGray>
          </div>
        </div>

        <!-- Metodo fuera del Constructor -->
        <div class="width100">
          Metodo fuera del Constructor:
          <div class="cod wAuto">
            <NPurp>function</NPurp> <NObj>person(<NVar>name, age</NVar>) {</NObj> <br>
              &nbsp; <NAqua>this</NAqua>.name = name; <br>
              &nbsp; <NAqua>this</NAqua>.age = age; <br>
              <div class="markBlock">
                &nbsp; <NAqua>this</NAqua>.yrBirth = <NBlue>bornYear</NBlue>; <br>
              </div><NObj>}</NObj> <br>
            <div class="markBlock">
              <NPurp>function</NPurp> <NBlue>bornYear</NBlue>() { <br>
              &nbsp; <NAqua>return</NAqua> 2024 - this.age; <br> }
            </div> <br>
            <NPurp>var</NPurp> p = <NPurp>new</NPurp> <NBlue><NObj>person</NObj></NBlue>("Nick", 25); <br>
            doc.<NBlue><u>write</u></NBlue>(p.<NBlue>yrBirth</NBlue><NPurp>()</NPurp>); <NGray>//1999</NGray>
          </div>
        </div>
      </div>
    </fieldset>
    
    <!-- Herencias y Assign -->
    <div class="flex">
      <!-- Herencias -->
      <fieldset class="width100">
        <legend> Herencias </legend>
        <div class="cod wAuto">
          <NPurp>class <NObj>person{</NObj> <br>
          &nbsp; constructor(<NVar>name, age</NVar>){</NPurp> <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
        <div class="cod wAuto">
          <NPurp>class <NObj>estudiante{</NObj> <br>
          &nbsp; constructor(<NVar>name</NVar>){</NPurp> <br>
            &nbsp; &nbsp; super(name); <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
      </fieldset>
      <!-- Assign -->
      <fieldset class="width100">
        <legend> assign() </legend>
          <div class="cod columnas">
            <NPurp>let</NPurp> person = { <br>
              &nbsp; name: '<NGreen>Jack</NGreen>', <br>
              &nbsp; age: <NOrg>18</NOrg>, <br>
              &nbsp; sex: '<NGreen>male</NGreen>' <br>
            }; <br>
            <NPurp>let</NPurp> student = { <br>
              &nbsp; name: '<NGreen>Bob</NGreen>', <br>
              &nbsp; age: <NOrg>20</NOrg>, <br>
              &nbsp; xp: '<NGreen>2</NGreen>' <br>
            };
          </div>
          <div class="cod">
            <NPurp>let</NPurp> newStudent = <NObj>Object</NObj>.<NBlue>assign</NBlue>(<NPurp>{}</NPurp>, person, student); <br>
            document.<NBlue>write</NBlue>(newStudent.name); <NGray>// Bob</NGray> <br>
            document.<NBlue>write</NBlue>(newStudent.age); <NGray>// 20</NGray> <br>
            document.<NBlue>write</NBlue>(newStudent.sex); <NGray>// male</NGray> <br>
            document.<NBlue>write</NBlue>(newStudent.xp); <NGray>// 2</NGray>
          </div>
      </fieldset>
    </div>
  </section>

  <!-- DOM -->
  <section id="DOM">

    <!-- Escribir en el Doc -->
    <fieldset>
      <legend> Escribir en el Doc </legend>
      <div class="cod">
        <NBlue><u>document</u></NBlue>.body.<NPurp>innerHTML</NPurp> = "Algun Texto";
      </div>
    </fieldset>

    <!-- Seleccionar Elementos -->
    <fieldset>
      <legend> Seleccionar/Buscar Elementos </legend>

      Buscar y usar <b>ID</b>:
      <div class="flex">
        <div class="cod"> <NPurp>var</NPurp> elem = document.<NBlue>getElementById</NBlue>("<NGreen>id</NGreen>"); </div>
        <div class="cod"> elem.innerHTML = "<NGreen>Hello World!</NGreen>"; </div>
      </div> <br>

      Buscar y usar <b>Class</b>:
      <div class="flex">
        <div class="cod"> 
          <NPurp>var</NPurp> arr = document.<NBlue>getElementsByClassName</NBlue>("<NGreen>className</NGreen>"); <br>
          <NPurp>var</NPurp> arr = document.<NBlue>querySelector</NBlue>("<NGreen>.className</NGreen>");
        </div>
        <div class="cod"> 
          arr[<NOrg>0</NOrg>].innerHTML = "<NGreen>Hiii</NGreen>"; <br>
          arr[<NOrg>1</NOrg>].innerHTML = "<NGreen>Hello</NGreen>";
        </div>
      </div><br>

      Buscar y usar <b>Tag</b>:
      <div class="flex">
        <div class="cod"> 
          <NPurp>var</NPurp> arr = document.<NBlue>getElementsByTagName</NBlue>("<NGreen>tag</NGreen>"); <br>
          <NPurp>var</NPurp> arr = document.<NBlue>querySelectorAll</NBlue>("<NGreen>tag</NGreen>"); <br>
          <NPurp>var</NPurp> arr = document.<NBlue>querySelector</NBlue>("<NGreen>a[class="name"]</NGreen>");
        </div>
        <div class="cod">
          <font class="aqua">for</font> (<NPurp>var</NPurp> x = <NOrg>0</NOrg>; x &lt;arr.length; x++) { <br>
            &nbsp; arr[x].innerHTML = "<NGreen>Hi there!</NGreen>"; <br> }
        </div>
      </div>
    </fieldset>

    <!-- Propiedades y metodos -->
    <fieldset>
      <legend>  Propiedades y metodos  </legend>

      Cambiar valores <u>(Usando CHILDNODES)</u>
      <div class="flex">
        <div class="codigo marg0">
          element.childNodes: <br>
          element.firstChild: <br>
          element.lastChild: <br>
          element.hasChildNodes: <br>
          element.nextSibling: <br>
          element.previousSibling: <br>
          element.parentNode: <br><hr>
          element.className:
        </div>
        <div class="cod">
          <NPurp>function</NPurp> <NBlue>setText</NBlue>() { <br>
            &nbsp;<NPurp>var</NPurp> a = document.getElementById("demo2"); <br>
            &nbsp;<NPurp>var</NPurp> arr = a.<u>childNodes</u>; <br>
            &nbsp;<font class="aqua">for</font> (<NPurp>var</NPurp> x = 0; x < arr.length; x++) { <br>
              &nbsp; arr[x].innerHTML = "<NGreen>new text</NGreen>"; <br>
            &nbsp;} <br> } <br><hr>

            element.className = element.className.<NBlue>replace</NBlue>("<NGreen>viejo</NGreen>", "<NGreen>nuevo</NGreen>"); 
        </div>
      </div>
    </fieldset>

    <!-- Modificar Atributos -->
    <fieldset>
      <legend>  Modificar Atributos  </legend>
      <div class="flex">
        <div> 
          <div class="ej wAuto" id="style" style="color: orange;"> 
            <a href="../Imgs/Orange.png" target="_blank"><img id="myimg" src="../Imgs/Orange.png" alt="orange.png" title="Orange" height="60" /></a> <br>
            Cambiar estilo
          </div>
        </div>
        <div class="cod">
          <NPurp>var</NPurp> _img = document.<NBlue>getElementById</NBlue>("<NGreen>myimg</NGreen>"); <br>
          _img.src = "<NGreen>../Imgs/Apple.png</NGreen>"; <br>
          _img.href= '<NGreen>../Imgs/Apple.png</NGreen>'; <br><br>
          <NPurp>var</NPurp> _text = document.<NBlue>getElementById</NBlue>("<NGreen>mytext</NGreen>"); <br>
          _text.style.color = '<NGreen>#0F0</NGreen>';
        </div>
        <script>
          var _styleText = document.getElementById("style");
          var srcimg = document.getElementById("myimg");
          var _changeSRC = true;

          function changeSRC(){
            if(_changeSRC) {
              srcimg.src = "../Imgs/Apple.png";
              srcimg.href= '../Imgs/Apple.png';
              srcimg.title= 'Apple';
              _styleText.style.color = '#F00';
              _changeSRC = false;
            }
            else {
              srcimg.src = "../Imgs/Orange.png";
              srcimg.href= '../Imgs/Orange.png';
              srcimg.title= 'Orange';
              _styleText.style.color = 'orange';
              _changeSRC = true;
            }
          }
          setInterval(changeSRC, 1000);
        </script>
      </div>
    </fieldset>

    <!-- Elementos -->
    <fieldset>
      <legend> Crear Elementos: </legend>
      <div class="flex">
        <div>
           Crear y borrar Elementos 
          <div class="ejemplo" id="divElement"> Texto. </div>
          <button onclick="createELEMENT()">Crear</button>
          <button onclick="delElem()">Borrar</button>

          <div class="codigo">
            elem.cloneNode(); <NGray>// Clonear.</NGray><br>
            a.replaceChild(esteElem, porEsteElem); <NGray>// Reemplazar</NGray> <br>
            padre.insertBefore(elem, padre.firstChild); <NGray>// Add first</NGray>
          </div>
        </div>
        <div>
          <div class="codigo">
            <NPurp>let</NPurp> p = document.<NBlue>createElement</NBlue>("<NGreen>p</NGreen>");
            <NGray>// Crear un parrafo.</NGray> <br>
            <NPurp>let</NPurp> text = document.<NBlue>createTextNode</NBlue>("<NGreen>Nuevo Texto</NGreen>"); <NGray>// Crear un Texto</NGray> <br>
            p.<NBlue>appendChild</NBlue>(text); <NGray>// Agregar el text al parrafo.</NGray> <br><br>
        
            <NPurp>let</NPurp> div = document.<NBlue>getElementById</NBlue>("<NGreen>div</NGreen>"); <br>
            div.<NBlue>appendChild</NBlue>(p); <NGray>// Agregar el parrafo al div.</NGray> <br><br>

            div.<NBlue>removeChild</NBlue>(parent.lastChild); <NGray>// Borrar</NGray>
          </div>
          <script>
            var parent = document.getElementById("divElement");

            function createELEMENT(){
              getParent();
              var p = document.createElement("p"); // Crear un paragraph
              var text = document.createTextNode("Nuevo Texto Creado!"); // Crear un texto
              p.appendChild(text); // Agregar el text al paragraph.
              parent.appendChild(p); // Agregar el paragraph al div.
            }

            function delElem(){
              getParent();
              parent.removeChild(parent.lastChild);
            }

            function getParent(){
              parent = document.getElementById("divElement");
            }
          </script>
        </div>
      </div>
    </fieldset>

    <!-- Crear Animaciones -->
    <fieldset>
      <legend>  Crear Animaciones  </legend>
      <div class="flex">
        <div class="width100">
          <div id="container1"> <div id="box1"> </div> </div> <br>
          <div class="cod marg0 wAuto">
            <NPurp>var</NPurp> pos = <NOrg>0</NOrg>; <br>
            <NPurp>var</NPurp> box = document.<NBlue>getElementById</NBlue>('<NGreen>box1</NGreen>'); <br>
            <NPurp>var</NPurp> t = <NBlue>setInterval</NBlue>(move, <NOrg>10</NOrg>);
          </div>
        </div>
        <div class="cod">
          <NPurp>function</NPurp> <NBlue>move</NBlue>() { <br>
            &nbsp; <font class="aqua">if</font>(pos >= <NOrg>150</NOrg>) { <br>
              &nbsp; &nbsp; pos = 0; <br>
            &nbsp; } <font class="aqua">else</font> { <br>
              &nbsp; &nbsp; pos += <NOrg>1</NOrg>; <br>
              &nbsp; &nbsp; box.style.left = pos+'<NGreen>px</NGreen>'; <br>
            &nbsp; } <br> }
        </div>
      </div>
      <style>
        #container1 {
          width: 200px; height: 50px;
          background: green;
          position: relative;
          margin: 5px;
        }
        #box1 {
          width: 40px; height: 40px;
          margin: 5px;
          background: red;
          position: absolute;
        }
      </style>
      <script>
        var pos = 0;
        var box = document.getElementById('box1');
        var t = setInterval(move, 10);

        function move() {
          if (pos >= 150) {
            pos = 0;
          }
          else {
            pos += 1;
            box.style.left = pos + 'px';
          }
        }
      </script>
    </fieldset>
  </section>

  <!-- BOM -->
  <section id="BOM">
    <fieldset> <!-- Window -->
    <legend> Window </legend>
      <div class="cod">
        window.name = "Ventanaa"; <br> <br>
        
        <NPurp>let</NPurp> dato = "<NGreen>Name</NGreen>: " + window.name; <NGray>// Nombre de la ventana</NGray> <br>
        <NPurp>let</NPurp> ancho = "<NGreen>Ancho</NGreen>: " + window.outerWidth; <NGray>// incluye scroll</NGray> <br>
        <NPurp>let</NPurp> alto = "<NGreen>Alto</NGreen>: " + window.outerHeight; <NGray>// incluye pestañas y todo</NGray> <br>
        <NPurp>let</NPurp> anchoInt = "<NGreen>Ancho interior</NGreen>: " + window.innerWidth; <NGray>// sin scroll</NGray> <br>
        <NPurp>let</NPurp> altoInt = "<NGreen>Alto interior</NGreen>: " + window.innerHeight; <NGray>// solo interior</NGray> <br>
        <NPurp>let</NPurp> scrollX = "<NGreen>scrollX</NGreen>: " + window.scrollX; <NGray>// Scroll</NGray> <br>
        <NPurp>let</NPurp> scrollY = "<NGreen>scrollY</NGreen>: " + window.scrollY; <NGray>// Scroll</NGray> <br>
        <NPurp>let</NPurp> distancia = "<NGreen>distancia</NGreen>: " + window.screenX; <NGray>// izq pantalla, hasta la ventana</NGray>
      </div>
      <div class="cod">
        ventana = window.<NBlue>open</NBlue>("<NGreen>name.html</NGreen>", "<NGreen>_black</NGreen>", "<NGreen>width=500 height=300</NGreen>"); <NGray>// Abrir</NGray> <br> <br>
      
        ventana.<NBlue>resizeBy</NBlue>(100,100); <NGray>// +100</NGray> <br>
        ventana.<NBlue>resizeTo</NBlue>(100,100); <NGray>// =100</NGray> <br> <br>
      
        ventana.<NBlue>moveBy</NBlue>(500,500); <NGray>// +500</NGray> <br>
        ventana.<NBlue>moveTo</NBlue>(500,500); <NGray>// pos 500, 500</NGray> <br> <br>
      
        ventana.<NBlue>print</NBlue>(); <NGray>// Imprimir</NGray> <br>
        ventana.<NBlue>close</NBlue>(); <NGray>// Cerrar</NGray>
      </div>
      <div class="cod">
        console.log(window.frame().length) <br>
        console.log(window.history) <br>
        console.log(window.navigator) <br>
        console.log(window.screen)
      </div>
    </fieldset>
  </section>

  <!-- Eventos -->
  <section id="Eventos">
    <!-- Tipos - Onload -->
    <div class="flex">
      <!-- tipos -->
      <fieldset class="width100" style="column-count: 2;"> 
      <legend> Tipos de Eventos </legend>
        onfocus - onblur <br>
        onload - onunload <br>
        onclick - onchange <br>
        onkeydown - onkeyup <br>
        onmousedown - onmouseup <br>
        onmouseover - onmouseout <br>
      </fieldset>
      <!-- Onload -->
      <fieldset class="width100">
        <legend> OnLoad (Al cargar la pag.) </legend>
        <div class="cod"> window.<NBlue>onload</NBlue> = <NPurp>function</NPurp>(){ <br> &nbsp; <NGray>// Codigo...</NGray> <br> } </div>
      </fieldset>
    </div>

    <!-- Evento Syntax -->
    <div class="flex">
      <!-- Evento desde HTML -->
      <fieldset class="width100"> 
      <legend> Evento desde HTML </legend>
        <div class="codigo">
          &lt;<NRed>button</NRed> <b><u><NPurp>evento</NPurp></u></b>="<NBlue>myFunc</NBlue>()"> Button &lt;/<NRed>button</NRed>>
        </div>
        <div class="cod">
          <NPurp>function</NPurp> <NBlue>myFunc</NBlue>() { <br> &nbsp; <NGray>// Codigo...</NGray> <br> }
        </div>
      </fieldset>

      <!-- Evento desde JS -->
      <fieldset class="width100"> 
      <legend> Evento desde JS </legend>
        <div class="cod">
          <NPurp>let</NPurp> <u>elemento</u> = document.<NBlue>getElementById</NBlue>('<NGreen>demo7</NGreen>'); <br><br>
          elemento.<b><u><NBlue>evento</NBlue></u></b> = <NPurp>function</NPurp>(){ <br> &nbsp; <NGray>// Codigo...</NGray> <br> }
        </div>
      </fieldset>
    </div>

    <br>

    <!-- AddEventListener -->
    <fieldset>
      <legend> AddEventListener </legend>
      <!-- Crear Borrar -->
      <div class="flex">
        <div class="width100"> Crear Evento:
          <div class="cod wAuto"> element.<NBlue>addEventListener</NBlue>("<NGreen><u>evento</u></NGreen>", <NPurp><u>function</u></NPurp>); </div>
        </div>
        <div class="width100"> Borrar Evento:
          <div class="cod wAuto"> element.<NBlue>removeEventListener</NBlue>("<NGreen>mouseover</NGreen>", <NPurp>myFunction</NPurp>); </div>
        </div>
      </div> <hr>
      
      <!-- Tecla - video -->
      <div class="flex">
        <div class="width100">
          Detectar una tecla pulsada:
          <div class="cod wAuto">
            document.<NBlue>addEventListener</NBlue>('<NGreen>keydown</NGreen>', <NPurp>(<NVar>event</NVar>) => {</NPurp> <br>
              &nbsp; console.<NBlue>log</NBlue>(event.key); <br>
            });
          </div>
        </div>
        <div class="width100">
          (video/audio) play - ended:
          <div class="cod wAuto">
            <NPurp>let</NPurp> video = document.<NBlue>getElementById</NBlue>("<NGreen>vid</NGreen>"); <br>
            video.<NBlue>addEventListener</NBlue>("<NGreen>seeking</NGreen>", <NPurp>function()</NPurp>{ <br>
              &nbsp; <NBlue>alert</NBlue>(this.currentTime) <br> });
          </div>
        </div>
      </div>
    </fieldset>

    <!-- Propagacion de eventos - bubbling & capturing -->
    <fieldset>
      <legend>  Propagacion de eventos - bubbling & capturing </legend>
      <div class="flex">
        <div class="width100">
          Orden en la que se ejecutan las funciones.<br><br>
          <div class="codigo">
            &lt;<NRed>div</NRed>> <br>
            &nbsp; &nbsp;&lt;<NRed>p</NRed>>&lt;/<NRed>p</NRed>> <br>
            &lt;/<NRed>div</NRed>>
          </div>
        </div>
        <div class="width100">
          <u>BUBBLING</u>: <NGray>// primero &lt;p> y luego &lt;div>.</NGray> <br>
          <div class="codigo"> elem.<NBlue>addEventListener</NBlue>("<NGreen>event</NGreen>", <NBlue>myFunc</NBlue>, <font class="red">false</font>); </div>
          <u>CAPTURING</u>: <NGray>// primero &lt;div> y luego &lt;p>.</NGray> <br>
          <div class="codigo"> elem.<NBlue>addEventListener</NBlue>("<NGreen>event</NGreen>", <NBlue>myFunc</NBlue>, <font class="red">true</font>); </div>
        </div>
      </div>
    </fieldset>

    <!-- Image Slider -->
    <fieldset>
      <legend> Image Slider </legend>
      <div class="flex">
        <div class="wAuto">
          <img id="slider" src="../Imgs/1.jpg" height="105px" /> <br>
          <button onclick="prev()"> &lt; Prev </button>
          <button onclick="next()"> Next > </button>
          <div class="cod wAuto">
            <NPurp>let</NPurp> images = [ '<NGreen>1.jpg</NGreen>', '<NGreen>2.jpg</NGreen>', '<NGreen>3.jpg</NGreen>' ]; <br>
            <NPurp>let</NPurp> num = 0; <br>
          </div>
        </div>
        <div class="cod width100">
          <NPurp>let</NPurp> slider = document.<NBlue>getElementById</NBlue>('<NGreen>slider</NGreen>'); <br><br>
          <NPurp>function</NPurp> <NBlue>next</NBlue>() { <br>
            &nbsp; num++; <br>
            &nbsp; if(num >= images.length) { num = 0; } <br>
            &nbsp; slider.src = images[num]; <br> } <br>
          <NPurp>function</NPurp> <NBlue>prev</NBlue>() { <br>
            &nbsp; num--; <br>
            &nbsp; if(num < 0) { num = images.length-1; } <br>
            &nbsp; slider.src = images[num]; <br>
          }
        </div>
      </div>
      <script>
        var images = [ '../Imgs/1.jpg', '../Imgs/2.jpg', '../Imgs/3.jpg' ];
        var num = 0;
        function next() {
          var slider = document.getElementById('slider');
          num++;
          if (num >= images.length) {
            num = 0;
          }
          slider.src = images[num];
        }
        function prev() {
          var slider = document.getElementById('slider');
          num--;
          if (num < 0) {
            num = images.length - 1;
          }
          slider.src = images[num];
        }
      </script>
    </fieldset>

    <!-- validacion de formularios -->
    <fieldset>
      <legend>  Validacion de formularios (js) </legend>

      <!-- Repetir -->
      <div class="flex">
        <div style="width: 100%;">
          <b><u>Repetir Numero.</u></b>
          <form onsubmit="return validate()" method="post">
            Numero: <input type="text" name="num1" id="num1" /> <br>
            Repetir: <input type="text" name="num2" id="num2" /> <br>
            <input type="submit" value="Enviar" />
          </form>
          <div class="codigo">
            &lt;<NRed>form</NRed> <NPurp>onsubmit</NPurp>="<b><NAqua>return</NAqua> <NBlue>validate</NBlue>()</b>" <NPurp>method</NPurp>="post"> <br>
              &nbsp; Numero: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>num1</NGreen>" <NPurp>id</NPurp>="<NGreen>num1</NGreen>" /> <br>
              &nbsp; Repetir: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>num2</NGreen>" <NPurp>id</NPurp>="<NGreen>num2</NGreen>" /> <br>
              &nbsp; &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>submit</NGreen>" <NPurp>value</NPurp>="<NGreen>Submit</NGreen>" /> <br>
            &lt;/<NRed>form</NRed>>
          </div>
        </div>
        
        <div class="cod">
          <NPurp>function</NPurp> <NBlue>validate</NBlue>() { <br>
           &nbsp; <NPurp>var</NPurp> n1 = document.<NBlue>getElementById</NBlue>('<NGreen>num1</NGreen>'); <br>
           &nbsp; <NPurp>var</NPurp> n2 = document.<NBlue>getElementById</NBlue>('<NGreen>num2</NGreen>'); <br>
           &nbsp; <font class="aqua">if</font>(n1.value <NPurp>!=</NPurp> '' <NPurp>&&</NPurp> n2.value <NPurp>!=</NPurp> '') { <br>
            &nbsp; &nbsp; <font class="aqua">if</font>(n1.value <NPurp>==</NPurp> n2.value) { <br>
              &nbsp; &nbsp; &nbsp; <font class="aqua">return</font> <NOrg>true</NOrg>; <br>
            &nbsp; &nbsp; } <br>
            &nbsp; } <br>
            &nbsp; <NBlue>alert</NBlue>("<NGreen>The values should be equal and not blank</NGreen>"); <br>
            &nbsp; <font class="aqua">return</font> <NOrg>false</NOrg>; <br> }
        </div>
        <script>
        function validate() {
          var n1 = document.getElementById('num1');
          var n2 = document.getElementById('num2');
          if(n1.value != '' && n2.value != '') {
            if(n1.value == n2.value) {
              return true;
            }
          }
          alert("Los valores deben ser iguales y no en blanco.");
          return false;
        }
        </script>
      </div>
    </fieldset>
  </section>

  <!-- APIs -->
  <section id="APIs / Otros">
    <!-- Math -->
    <fieldset>
      <legend> Math: </legend>
      <div class="cod">
        function randomNumber(min, max) { <br>
          &nbsp; return Math.floor(Math.random() * (max - min)) + min; <br> }
      </div>
      <details>
        <summary>Metodos de Math</summary>
        abs(x) Returns the absolute value of x <br>
        acos(x) Returns the arccosine of x, in radians <br>
        acosh(x) Returns the hyperbolic arccosine of x <br>
        asin(x) Returns the arcsine of x, in radians <br>
        asinh(x) Returns the hyperbolic arcsine of x <br>
        atan(x) Returns the arctangent of x as a numeric value between -PI/2 and PI/2 radians <br>
        atan2(y, x) Returns the arctangent of the quotient of its arguments <br>
        atanh(x) Returns the hyperbolic arctangent of x <br>
        cbrt(x) Returns the cubic root of x <br>
        ceil(x) Returns x, rounded upwards to the nearest integer <br>
        cos(x) Returns the cosine of x (x is in radians) <br>
        cosh(x) Returns the hyperbolic cosine of x <br>
        exp(x) Returns the value of Ex <br>
        floor(x) Returns x, rounded downwards to the nearest integer <br>
        log(x) Returns the natural logarithm (base E) of x <br>
        max(x, y, z, ..., n) Returns the number with the highest value <br>
        min(x, y, z, ..., n) Returns the number with the lowest value <br>
        pow(x, y) Returns the value of x to the power of y <br>
        random() Returns a random number between 0 and 1 <br>
        round(x) Rounds x to the nearest integer <br>
        sign(x) Returns if x is negative, null or positive (-1, 0, 1) <br>
        sin(x) Returns the sine of x (x is in radians) <br>
        sinh(x) Returns the hyperbolic sine of x <br>
        sqrt(x) Returns the square root of x <br>
        tan(x) Returns the tangent of an angle <br>
        tanh(x) Returns the hyperbolic tangent of a number <br>
        trunc(x) Returns the integer part of a number (x) <br>
      </details>
    </fieldset>

    <!-- Date -->
    <fieldset>
      <legend> Fechas: </legend>

      Metodos de Date:
      <div class="flex">
        <div class="codigo columnas width100">
          getFullYer()      <NGray>// 1999.</NGray> <br>
          getMonth()        <NGray>// 06.</NGray> <br>
          getDate()         <NGray>// 24.</NGray> <br>
          getDay()          <NGray>// Lun.</NGray> <br>
          getHours()        <br>
          getMinutes()      <br>
          getSeconds()      <br>
            getMilliseconds()
        </div>
        <div class="cod">
          <NPurp>var</NPurp> date1 = <NPurp>new</NPurp> <NBlue>Date</NBlue>(); <NGray> // Crear</NGray> <br>
          <NPurp>var</NPurp> hours = date1.<NBlue>getHours</NBlue>(); <br>
          document.<NBlue>write</NBlue>(<u>hours</u>); <br>
          <NGray>// Muestra solo la hora(sin min/seg).</NGray>
        </div>
      </div>
    </fieldset>

    <!-- Almacenamiento -->
    <fieldset>
      <legend>  Almacenamiento (API)  </legend>
      <div class="flex">
        <div class="codigo marg0">
          sessionStorage(); <NGray> //Temporal.</NGray> <br>
          localStorage(); <NGray> //Permanente.</NGray> <br>
          localStorage.<NBlue>clear</NBlue>(); <NGray>(Limpiar)</NGray>
        </div>
        <div class="cod">
          localStorage.<NBlue>setItem</NBlue>("<NGreen>name</NGreen>", "<NGreen>Val</NGreen>"); <NGray>(Guardar)</NGray><br>
          localStorage.<NBlue>getItem</NBlue>("<NGreen>name</NGreen>"); <NGray>(Cargar)</NGray> <br>
          localStorage.<NBlue>removeItem</NBlue>("<NGreen>name</NGreen>"); <NGray>(Borrar)</NGray>
        </div>
      </div>
    </fieldset>
    
    <!-- Dragg & Drop -->
    <fieldset>
      <legend>  Dragg & Drop (API)  </legend>
      <div class="flex">
        <div class="flex width100" style="margin: auto;">
          <div id="box" ondrop="drop(event)" ondragover="allowDrop(event)" style="border:1px solid black;
            width:150px; height:150px; background-color: #b9bebe;">
          </div>
          <img id="image" src="../Imgs/cat1.png" draggable="true" ondragstart="drag(event)" width="150" height="150" alt="" style="cursor: move;"/>
        </div>
        <div class="cod wAuto" style="font-size: smaller;">
          <NPurp>function</NPurp> <NBlue>allowDrop</NBlue>(ev) { <br>
            &nbsp; ev.<NBlue>preventDefault</NBlue>(); <br>
          } <br>
  
          <NPurp>function</NPurp> <NBlue>drag</NBlue>(ev) { <br>
            &nbsp; ev.dataTransfer.<NBlue>setData</NBlue>("text", ev.target.id); <br>
          } <br>
  
          <NPurp>function</NPurp> <NBlue>drop</NBlue>(ev) { <br>
            &nbsp; ev.<NBlue>preventDefault</NBlue>(); <br>
            &nbsp; var data = ev.dataTransfer.<NBlue>getData</NBlue>("text"); <br>
            &nbsp; ev.target.<NBlue>appendChild</NBlue>(document.<NBlue>getElementById</NBlue>(data)); <br>
          }
        </div>
      </div>
      <div class="cod">
        <NRed>&lt;div</NRed> <NPurp>id</NPurp>="box" <NPurp>ondrop</NPurp>="drop(event)"  <NPurp>ondragover</NPurp>="allowDrop(event)" <NRed>&lt;/div></NRed> <br>
        <NRed>&lt;img</NRed> <NPurp>id</NPurp>="image" <NPurp>src</NPurp>="cat1.png" <NPurp>draggable</NPurp>="true" <NPurp>ondragstart</NPurp>="drag(event)" <NPurp>style</NPurp>="cursor: move;"<NRed>/></NRed>
      </div>

      <script>
        function allowDrop(ev) {
          ev.preventDefault();
        }
        function drag(ev) {
          ev.dataTransfer.setData("text", ev.target.id);
        }
        function drop(ev) {
          ev.preventDefault();
          var data = ev.dataTransfer.getData("text");
          ev.target.appendChild(document.getElementById(data));
        }
      </script>
      <style>
        @media screen and (max-width: 767px) {
          #image, #box{
            width: 100px !important;
            height: 100px !important;
          }
        }
      </style>
    </fieldset>
    
    <!-- Copiar al Portapapeles -->
    <fieldset>
      <legend> Copiar al Portapapeles </legend>
      <font id="miTexto">Texto a copiar</font>
      <button class="btn btn-success" onclick="copiarContenido()">Copiar</button>

      <script>
        let texto = document.getElementById('miTexto').innerHTML;
        function copiarContenido(){
          navigator.clipboard.writeText(texto);
        }
      </script>
      <div class="flex">
        <div class="codigo wAuto">
          <<NRed>p</NRed> <NPurp>id</NPurp>="<NGreen>miTexto</NGreen>"> <<NRed>p</NRed>> <br>
          <<NRed>button</NRed> <NPurp>onclick</NPurp>="<NBlue>copiarContenido</NBlue>()"> Copiar <<NRed>/button</NRed>>
        </div>
        <div class="cod width100">
          <NPurp>let</NPurp> texto = document.<NBlue>getElementById</NBlue>("<NGreen>miTexto</NGreen>").innerHTML; <br>
          <NPurp>function</NPurp> <NBlue>copiarContenido</NBlue>() { <br>
            <NTab></NTab> navigator.clipboard.<NBlue>writeText(<NVar>texto</NVar>)</NBlue>; <br>
          }
        </div>
      </div>
      <details>
        <pre>
          < p id="miTexto">Hola Mundo< /p>
          < button class="btn" onclick=" copiarContenido ()">¡Copiar!< /button>
          
            let texto = document.getElementById('miTexto').innerHTML;
            const copiarContenido = async () => {
              try {
                await navigator.clipboard.writeText(texto);
                console.log('Contenido copiado al portapapeles');
              } catch (err) {
                console.error('Error al copiar: ', err);
              }
            }
        </pre>
      </details>
    </fieldset>

  </section>
  
  <br><hr><hr><br><br>

  <!--ES6 -->
  <section id="ES6">

    <u><b>Destructurar Objetos:</b></u>
    <details>
      <pre>
          // Ej 1
              let obj = {h:100, s: true};
              let {h, s} = obj;
              // console.log(h);
              // console.log(s);

          // Ej 2
              let j0, k0;
              ({j0, k0} = {j0: 'Hello ', k0: 'Jack'});
              // console.log(a + b);
          // Ej 3
              let {u0, i0} = {u0: 'Hello ', i0: 'Jack'};
              // console.log(a + b);
          // Ej 4
              var o0 = {_h: 42, _s: true};
              var {_h: foo, _s: bar} = o0;
              //console.log(h); // Error
              // console.log(foo); // 42
          // Ej 5
              var obj_0 = {_id: 42, name: "Jack"};
              let {_id = 10, _age = 20} = obj_0;
              // console.log(id); // 42
              // console.log(age); // 20
      </pre>
    </details>
    <hr>

    <!-- Rest y Spread -->
    <div class="borders">
        REST & SPREAD 
      <details>
        <u><b>Parámetros de REST (descanso):</b></u>
        <div class="codigo">
          <pre>
                  function containsAll(arr) {
                  for (let k = 1; k < arguments.length; k++) {
                      let num = arguments[k];
                      if (arr.indexOf(num) === -1) {
                          return false;
                      }
                  }
                  return true;
                  }
                  let x0_ = [2, 4, 6, 7];
                  console.log(containsAll(x0_, 2, 4, 7));
                  console.log(containsAll(x0_, 6, 4, 9));
                  //
                  function containsAll2(arr, ...nums) {
                  for (let num of nums) {
                      if (arr.indexOf(num) === -1) {
                          return false;
                      }
                  }
                  return true;
                  }
    
                  let x1_ = [2, 4, 6, 7];
                  console.log(containsAll2(x1_, 2, 4, 7));
                  console.log(containsAll2(x1_, 6, 4, 9));
    
              </pre>
        </div>
        <u><b>Parámetros de SPREAD(propagación):</b></u>
        <div class="codigo">
          <pre>
                  function myFunction(w, x, y, z) {
                      console.log(w + x + y + z);
                  }
                  var args = [1, 2, 3];
                  myFunction.apply(null, args.concat(4));
    
    
                  const myFunction = (w, x, y, z) => {
                      console.log(w + x + y + z);
                  };
                  let args = [1, 2, 3];
                  myFunction(...args, 4);
    
    
                  var dateFields = [1970, 0, 1];  // 1 Jan 1970
                  var date = new Date(...dateFields);
                  console.log(date);
    
    
                  var arr = ["One", "Two", "Five"];
                  arr.splice(2, 0, "Three");
                  arr.splice(3, 0, "Four");
                  console.log(arr);
    
    
                  let newArr = ['Three', 'Four'];
                  let arr = ['One', 'Two', ...newArr, 'Five'];
                  console.log(arr);
    
    
                  const obj1 = { foo: 'bar', x: 42 };
                  const obj2 = { foo: 'baz', y: 5 };
                  const clonedObj = { ...obj1 }; // { foo: "bar", x: 42 }
                  const mergedObj = { ...obj1, ...obj2 }; // { foo: "baz", x: 42, y: 5 }
    
    
                  const obj1 = { foo: 'bar', x: 42 };
                  const obj2 = { foo: 'baz', y: 5 };
                  const merge = (...objects) => ({ ...objects });
    
                  let mergedObj = merge (obj1, obj2);
                  // { 0: { foo: 'bar', x: 42 }, 1: { foo: 'baz', y: 5 } }
    
                  let mergedObj2 = merge ({}, obj1, obj2);
                  // { 0: {}, 1: { foo: 'bar', x: 42 }, 2: { foo: 'baz', y: 5 } }
              </pre>
        </div>
      </details>
    </div> <hr>

    <!-- Clases -->
    <div class="borders">
        Clases en ES6
      <details>
        <u><b>Constructor - (al iniciar):</b></u>
        <div class="codigo">
          <pre>
                  class Rectangle0 {
                      constructor(height, width)
                      {
                      this.height = height;
                      this.width = width;
                      }
                  }
                  const square0 = new Rectangle0(5, 5);
                  const poster0 = new Rectangle0(2, 3);
                  console.log(square0.height);
              </pre>
        </div>
        <u><b>Clase nombrada:</b></u>
        <div class="codigo">
          <pre>
                  var Square0 = class Rectangle0
                  {
                      constructor(height, width) {
                      this.height = height;
                      this.width = width;
                      }
                  };
    
                  const square00 = new Square0(5, 5);
                  const poster00 = new Square0(2, 3);
                  console.log(square00.height);
    
              </pre>
        </div>
        <u><b>Clase no nombrada:</b></u>
        <div class="codigo">
          <pre>
                  var Square1 = class
                  {
                  constructor(height, width) {
                      this.height = height;
                      this.width = width;
                  }
                  };
                  const square1 = new Square1(5, 5);
                  const poster1 = new Square1(2, 3);
                  console.log(square1.height);
              </pre>
        </div>
        <u><b>Metodo/Func</b></u>
        <div class="codigo">
          <pre>
                  class Rectangle1 {
                  constructor(height, width) {
                      this.height = height;
                      this.width = width;
                  }
    
                  get area() {
                      return this.calcArea();
                  }
    
                  calcArea() {
                      return this.height * this.width;
                  }
                  }
                  const square01 = new Rectangle1(5, 5);
                  console.log(square01.area); // 25
    
              </pre>
        </div>
        <u><b>Herencia</b></u>
        <div class="codigo">
          <pre>
                  class Animal0 {
                  constructor(name) {
                      this.name = name;
                  }
                  speak() {
                      console.log(this.name + ' makes a noise.');
                  }
                  }
    
                  class Dog0 extends Animal0 {
                  speak() {
                      console.log(this.name + ' barks.');
                  }
                  }
                  let dog0 = new Dog0('Rex');
                  dog0.speak(); // Rex barks.
                  //
                  class Animal1 {
                  constructor(name) {
                      this.name = name;
                  }
                  speak() {
                      console.log(this.name + ' makes a noise.');
                  }
                  }
    
                  class Dog1 extends Animal1 {
                  speak() {
                      super.speak(); // Rex barks.
                      console.log(this.name + ' barks.');
                  }
                  }
                  let dog1 = new Dog1('Rex');
                  dog1.speak(); // Rex makes a noise.
              </pre>
        </div>
      </details>
    </div> <hr>

    <!-- Map y Set -->
    <div class="borders">
        Map & Set
      <details>
        <div class="codigo">
          <pre>
                  let map00 = new Map([["k1","v1"], ["k2", "v2"]]);
                      console.log(map00.size); // 2
    
                      // Metodos
                      // set(key, value)
                      // get(key)
                      // has(key)
                      // delete(key)
                      // clear()
                      // keys()    : Arr de k
                      // value()   : Arr de v
                      // entries() : Arr de [k, v]
    
                      let map2 = new Map();
                      map2.set("k1", "v1").set("k2", "v2");
                      console.log(map2.get("k1")); // v1
                      console.log(map2.has("k2")); // true
                      for (let kv of map2.entries())
                      console.log(kv[0] + " : " + kv[1]); // k1:v1  // k2:v2
                  //
    
                  // SET (obj)
                  let set = new Set([1, 2, 4, 2, 59, 9, 4, 9, 1]);
                  console.log(set.size); // 5 (size devuelve la cant de valores diferentes)
                  // Metodos= Add, delete, has, clear, values.
              </pre>
        </div>
      </details>
    </div> <hr>

    <!-- Otros -->
    <div class="borders">
        Otros 
      <details>
        <h3>Iteradores y Generadores:</h3>
          <div class="codigo">
            <pre>
                  let myIterableObj = {
                    [Symbol.iterator] : function* () {
                    yield 1; yield 2; yield 3;
                    }
                  };
                  console.log([...myIterableObj]); // [ 1, 2, 3 ]
                  //
                  function* idMaker() {
                  let index = 0;
                  while (index < 5)
                    yield index++;
                  }
                  var gen = idMaker();
                  console.log(gen.next().value);
                  console.log(gen.next().value);
                  console.log(gen.next().value);
                  console.log(gen.next().value);
                  console.log(gen.next().value);
                  // Try to add one more console.log, just like the above see what happens.
                  //
                  const arr_ = ['0', '1', '4', 'a', '9', 'c', '16'];
                  const my_obj = {
                    [Symbol.iterator]: function*() {
                    for(let index of arr_) {
                      yield `${index}`;
                    }
                    }
                  };
                  const all = [...my_obj] // Here you can replace the '[...my_obj]' with 'arr'.
                    .map(i => parseInt(i, 10))
                    .map(Math.sqrt)
                    .filter((i) => i < 5) // try changing the value of 5 to 4 see what happens.
                    .reduce((i, d) => i + d); // comment this line while you are changing the value of the line above
                  console.log(all);
            </pre>
          </div>
        <hr>
        <u><b>Módulos:</b></u> <br>
        <u><b>Métodos integrados:</b></u>
      </details>
    </div> <hr>
  </section>

  <script>
    // window.location.replace("#");
  </script>




  
  <p id="textoFix"></p>
<script src="../index.js"></script>
</body>
</html>
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
      <legend> Variables (tipado dinamico) </legend>
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
        <NGray>string =</NGray> texto.<NBlue>trimStart</NBlue>(); <NGray>// (quitar espacios antes)</NGray> <br>
        <NGray>string =</NGray> texto.<NBlue>trimEnd</NBlue>(); <NGray>// (quitar espacios dps)</NGray> <br>
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
      <b>REST y SPREAD</b>
      <div class="flex">
        <div class="cod">
          <NGray>// REST (convertir en array)</NGray> <br>
          <NPurp>function</NPurp> <NBlue>MyFunc</NBlue>(...array) { <br>
            &nbsp; console.<NBlue>log</NBlue>(array); <br> } <br><br>
          <NBlue>MyFunc</NBlue>("Ene", "Feb" ...);
        </div>
        <div class="cod">
          <NGray>// SPREAD (recibir un array)</NGray> <br>
          <NPurp>function</NPurp> <NBlue>myFunc</NBlue>( uno, dos ) { <br>
            &nbsp; document<NBlue>.write</NBlue>(uno + dos); <br> } <br>
            <NPurp>var</NPurp> array = ["<NGreen>Juan</NGreen>", "<NGreen>David</NGreen>"];<br>
            <NBlue>myFunc</NBlue>(...array);
        </div>
      </div> <hr>

      <b>Funcion de Funcion</b>
      <div class="cod">
        <NPurp>const</NPurp> sayHiFromFunction = (fn) <NPurp> =></NPurp> { <br>
          &nbsp; <NAqua>return</NAqua> <NBlue>fn</NBlue>("<NGreen>Miguel</NGreen>") <br>
        } <br>
        <NBlue>sayHiFromFunction</NBlue>((name)) <NPurp> => </NPurp>{ <br>
          console.<NPurp>log</NPurp>(`<NGreen>Hola</NGreen> ${name}`) <br>
        }
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
      <legend> Bucles (ES6) </legend>
      <!-- For -->
      <div class="flex">
        <div class="cod width100">
          <u><b>For In:</b></u> <NGray>//  (Objetos Literales) </NGray> <br>
          <NPurp>let</NPurp> obj <NPurp>=</NPurp> {a:<NOrg>1</NOrg>, b:<NOrg>2</NOrg>, c:<NOrg>3</NOrg>}; <br>
          <font class="aqua">for</font> (<NPurp>let</NPurp> v <NPurp>in</NPurp> obj) { <br>
            &nbsp; document.<NBlue>write</NBlue>(v); <br> }
        </div>
        <div class="cod width100">
          <u><b>For Of:</b></u> <NGray>// (Arrays o Strings) </NGray> <br>
          <NPurp>let</NPurp> obj <NPurp>=</NPurp> ["<NGreen>hola</NGreen>", "<NGreen>hi</NGreen>"]; <br>
          <font class="aqua">for</font> (<NPurp>let</NPurp> v <NPurp>of</NPurp> obj) { <br>
            &nbsp; document.<NBlue>write</NBlue>(v); <br> }
        </div>
      </div>
      <!-- While -->
      <div class="flex">
        <div class="cod width100">
          <u><b>While:</b></u> <br>
          <NAqua>while</NAqua> (condición) { <br>
            &nbsp; <NGray>// comandos...</NGray> <br> }
        </div>
        <div class="cod width100">
          <u><b>While:</b></u> <br>
          <NPurp>let</NPurp> a = <NOrg>1</NOrg>; <br>
          <NAqua>while</NAqua> (a < 10) { <br>
            &nbsp; a++; <br> }
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
          <NGray>// Instanciar</NGray> <br>
          <NPurp>let</NPurp> p1 = <NAqua>new</NAqua> <NBlue>Person</NBlue>("<NGreen>John</NGreen>", <NOrg>42</NOrg>) <br>
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
      
      <!-- Clase -->
      <fieldset class="wAuto">
        <legend>Clase</legend>
        <div class="cod wAuto">
          <NPurp>class <NObj>Person{</NObj> <br>
          &nbsp; constructor(<NVar>name, age</NVar>){</NPurp> <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.age = age; <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
        <div class="cod wAuto">
          <NPurp>let</NPurp> p1 = <NAqua>new</NAqua> <NBlue>Person</NBlue>("<NGreen>John</NGreen>", <NOrg>42</NOrg>) <br>
          document.<NBlue>write</NBlue>(p1.age) <NGray>//42</NGray>
        </div>
        
        <details>
          <summary>Expresiones de Clases...</summary>
          <div class="cod">
            <NGray>// Clase anonima</NGray> <br>
            let Person_A = class{ <br>
              constructor(nombre) { <br>
                this.nombre = nombre; <br>
              } <br>
            } <br>
            let Person_A_01 = new Person_A("Nico"); // Instanciar <br> <br>

            <NGray>// Clase nombrada</NGray> <br>
            let Person_B = class PapelX{ <br>
              constructor(nombre) { <br>
                this.nombre = nombre; <br>
              } <br>
            } <br>
            let Person_B_01 = new Person_B("Nico"); // Instanciar
          </div>
        </details>
      </fieldset>

      <!-- Script Detallado -->
      <script>
        //* Objeto
          let ObjPersona = { 
            nombre: "Nicolas" 
          }
          // console.log(ObjPersona.nombre);

        //* Funcion
          function Libro(titulo){
            this.titulo = titulo;
          }
          let Libro1 = new Libro("Nicolas"); // instanciar
        //////////////////////////////////////////////////////////////////////////////////////

        //*       Clases      *//

        //? Declaración de Clase (Opcion 1)
          class Persona1{
            constructor(nombre) {
              this.nombre = nombre;
            }
          }
          const persona1_A = new Persona1(); // Instanciar

        //? Expresiones de Clases (Opcion 2)
          // Clase anonima 
          let Person_A = class{
            constructor(nombre) {
              this.nombre = nombre;
            }
          }
          let Person_A_01 = new Person_A("Nico"); // Instanciar

          // Clase nombrada
          let Person_B = class PapelX{
            constructor(nombre) {
              this.nombre = nombre;
            }
          }
          let Person_B_01 = new Person_B("Nico"); // Instanciar


        //////////////////////////////////////////////////////////////////////////////////////
        //* Herencias + Get-Set

        // Sub-Clase
          class Deportista{
            constructor(nombre, apellido){
              this.nombre = nombre;
              this.apellido = apellido;
            }
          }
          class Futbolista extends Deportista{
            constructor(nombre, apellido, goles){
              super(nombre, apellido); // Obtener de Padre
              this._goles = goles;
            }
            // Get
            get goles(){
              return this._goles;
            }
            // Set
            set goles(nuevoGoles){
              this._goles = nuevoGoles;
            }
          }
          futbolista_1 = new Futbolista("Leo", "Messi", 5); // Instanciar
          futbolista_1.goles; // Get  =>  5
          futbolista_1.goles = 8; // Set  =>  8
      </script>
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
      <!-- Assign -->
      <fieldset class="wAuto">
        <legend> assign() </legend>
          <div class="cod columnas wAuto">
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
          <div class="cod wAuto">
            <NPurp>let</NPurp> user = <NObj>Object</NObj>.<NBlue>assign</NBlue>(<NPurp>{}</NPurp>, person, student); <br>
            document.<NBlue>write</NBlue>(user.name); <NGray>// Bob</NGray> <br>
            document.<NBlue>write</NBlue>(user.age); <NGray>// 20</NGray> <br>
            document.<NBlue>write</NBlue>(user.sex); <NGray>// male</NGray> <br>
            document.<NBlue>write</NBlue>(user.xp); <NGray>// 2</NGray>
          </div>
      </fieldset>
      <!-- Herencias -->
      <fieldset class="wAuto">
        <legend> Herencias </legend>
        <div class="cod wAuto">
          <NPurp>class <NObj>Person{</NObj> <br>
          &nbsp; constructor(<NVar>name</NVar>){</NPurp> <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
        <div class="cod wAuto">
          <NPurp>class <NObj>Estudiante</NObj> extends <NObj>Person{</NObj> <br>
          &nbsp; constructor(<NVar>name</NVar>){</NPurp> <br>
            &nbsp; &nbsp; super(name); <br>
          &nbsp; <Npurp>}</Npurp> <br>
          <NObj>}</NObj>
        </div>
      </fieldset>
      <!-- Get y Set -->
      <fieldset class="wAuto">
        <legend> Get y Set </legend>
        <div class="cod wAuto">
          <NPurp>class <NObj>Person{</NObj> <br>
          &nbsp; constructor(<NVar>name</NVar>){</NPurp> <br>
            &nbsp; &nbsp; <NAqua>this</NAqua>.name = name; <br>
          &nbsp; <Npurp>}</Npurp> <br>
          &nbsp; <NPurp>get</NPurp> <NBlue>name</NBlue>(){ <NGray>// Get</NGray><br>
          <NTab></NTab> <NAqua>return this.</NAqua>name; <br>
          &nbsp; } <br>
          &nbsp; <NPurp>set</NPurp> <NBlue>name</NBlue>(newName){ <NGray>// Set</NGray> <br>
          <NTab></NTab> <NAqua>this.</NAqua>name = newName; <br>
          &nbsp; } <br>
          <NObj>}</NObj>
        </div>
      </fieldset>
    </div>
  </section>

  <!-- DOM -->
  <section id="DOM">

    <!-- Escribir en el Doc -->
    <fieldset>
      <legend> Escribir en el Doc </legend>
      <div class="flex">
        <div class="cod">
          <NBlue><u>document</u></NBlue>.body.<NPurp>innerHTML</NPurp> = "<NGreen>Algun Texto</NGreen>"; <br> <NGray>(Reemplazar toda la pag.)</NGray>
        </div>
        <div class="cod">
          document<NBlue>.write</NBlue>("<NGreen>Algun Texto</NGreen>");
          <br> <NGray>(Agregar en la pos del script)</NGray>
        </div>
      </div>
    </fieldset>

    <!-- Seleccionar Elementos -->
    <fieldset>
      <legend> Seleccionar/Buscar Elementos </legend>

      Buscar y usar <b>ID</b>:
      <div class="flex">
        <div class="cod"> <NPurp>const</NPurp> elem = document.<NBlue>getElementById</NBlue>("<NGreen>id</NGreen>"); </div>
        <div class="cod"> elem.innerHTML = "<NGreen>Hello World!</NGreen>"; </div>
      </div> <br>

      Buscar y usar <b>Class</b>:
      <div class="flex">
        <div class="cod"> 
          <NPurp>const</NPurp> arr = document.<NBlue>getElementsByClassName</NBlue>("<NGreen>className</NGreen>"); <br>
          <NPurp>const</NPurp> arr = document.<NBlue>querySelector</NBlue>("<NGreen>.className</NGreen>");
        </div>
        <div class="cod"> 
          arr[<NOrg>0</NOrg>].innerHTML = "<NGreen>Hiii</NGreen>"; <br>
          arr[<NOrg>1</NOrg>].innerHTML = "<NGreen>Hello</NGreen>";
        </div>
      </div><br>

      Buscar y usar <b>Tag</b>:
      <div class="flex">
        <div class="cod"> 
          <NPurp>const</NPurp> arr = document.<NBlue>getElementsByTagName</NBlue>("<NGreen>tag</NGreen>"); <br>
          <NPurp>const</NPurp> arr = document.<NBlue>querySelectorAll</NBlue>("<NGreen>tag</NGreen>"); <br>
          <NPurp>const</NPurp> arr = document.<NBlue>querySelector</NBlue>("<NGreen>a[class="name"]</NGreen>");
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
              _styleText.style.color = '#F00 ';
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
    <legend> Browser Object Model </legend>
      <div class="cod">        
        window.name = "<NGreen>Ventana</NGreen>"; <NGray>// Nombre de la ventana</NGray> <br>
        window.location = "<NGreen>https://www.google.com</NGreen>"; <NGray>// ir a otra pag</NGray> <br><br>

        window.outerWidth; <NGray>// incluye scroll</NGray> <br>
        window.outerHeight; <NGray>// incluye pestañas y todo</NGray> <br>
        window.innerWidth; <NGray>// sin scroll</NGray> <br>
        window.innerHeight; <NGray>// solo interior</NGray> <br>
        window.scrollX; <NGray>// Scroll</NGray> <br>
        window.scrollY; <NGray>// Scroll</NGray> <br>
        window.screenX; <NGray>// izq pantalla, hasta la ventana</NGray> <br>
        screen.availHeight; <NGray>// Tamaño Alto pantalla</NGray> <br>
        screen.availWidth; <NGray>// Tamaño Ancho pantalla</NGray><br>
        screen.colorDepth; <NGray>// Profundidad de color pantalla</NGray> <hr>

        navigator.appName / appVersion; <NGray>// Navegador + SO / version</NGray> <br>
        navigator.cookieEnabled; <NGray>// Cookies</NGray> <br>
      </div>
      <div class="cod">
        ventana = window.<NBlue>open</NBlue>(); <NGray>// Abrir Pestaña nueva</NGray> <br>
        ventana = window.<NBlue>open</NBlue>("<NGreen>name.html</NGreen>", "<NGreen>_blank</NGreen>", "<NGreen>width=500 height=300</NGreen>"); <NGray>// Abrir Ventana nueva</NGray> <br> <br>
      
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
      </div>
    </fieldset>
  </section>

  <!-- Eventos -->
  <section id="Eventos">
    <!-- Tipos - Onload -->
    <div class="flex">
      <!-- tipos -->
      <fieldset class="width100" style="column-count: 2;"> 
      <legend> Tipos de Eventos - <a href="../Otros/eventos.html">(Ejemplos)</a></legend>
        onfocus - onblur <br>
        onload - onunload <br>
        onclick - onchange <br>
        onkey down-up-press<br>
        onmouse down-up-move <br>
        mouseover - mouseout <br>
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
          &lt;<NRed>button</NRed> <b><u><NPurp>event</NPurp></u></b>="<NBlue>myFunc</NBlue>()"> Button &lt;/<NRed>button</NRed>>
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
          <u>elemento</u>.<b><NBlue>evento</NBlue></b> = <NPurp>function</NPurp>(){ <br> &nbsp; <NGray>// Codigo...</NGray> <br> }
        </div>
      </fieldset>
    </div>

    <br>

    <!-- AddEventListener -->
    <fieldset>
      <legend> AddEventListener </legend>
      <!-- Crear Borrar -->
      <div class="flex">
        <div>
          <div class="width100"> Crear Evento:
            <div class="cod"> element.<NBlue>addEventListener</NBlue>("<NGreen><u>evento</u></NGreen>", <NPurp><u>function</u></NPurp>); </div>
          </div>
          <div class="width100"> Borrar Evento:
            <div class="cod"> element.<NBlue>removeEventListener</NBlue>("<NGreen>evento</NGreen>", <NPurp>function</NPurp>); </div>
          </div>
        </div>
        <div>
          <div class="width100"> MouseMove:
            <div class="cod"> element.<NBlue>addEventListener</NBlue>("<NGreen><u>mousemove</u></NGreen>", <NPurp><u>function</u></NPurp>(event)<br>
              &nbsp; console.log(event.clientX + event.clientY); <br>
             );
            </div>
          </div>
        </div>
      </div> <hr>
      
      <!-- Tecla - video -->
      <div class="flex">
        <div class="width100">
          Detectar y Prevenir cualquer tecla excepto números:
          <div class="cod wAuto">
            document.<NBlue>addEventListener</NBlue>('<NGreen>keydown</NGreen>', <NPurp>(<NVar>event</NVar>) => {</NPurp> <br>
              &nbsp; <NAqua>if</NAqua>(event.keyCode < <NOrg>48</NOrg> || > <NOrg>57</NOrg>){ <br>
              <NTab></NTab> event.<NBlue>preventDefault</NBlue>(); <br>
              &nbsp; } <br>
            <NPurp>}</NPurp>);
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
      </div> <hr>

      <!-- Evento en tiempo real -->
      Evento en tiempo real: (WebSocket)
      <div>
        <form id="contenedorMensajes">
          <input type="text" id="mensajeIngresado"></input>
          <button type="submit" id="botonenviar">Enviar</button>
        </form>

        <!--  
        <script>
          let socket = new WebSocket("ws://localhost:8080");
          let mensajeingresado = document.getElementById("mensajeIngresado");
          let botonenviar = document.getElementById("botonenviar");

          function mostrarMensajes(contenido) {
            let contenedorMensajes = document.getElementById("contenedorMensajes");
            let elementoMensaje = document.createElement("p");
            elementoMensaje.innerText = contenido;
            contenedorMensajes.appendChild(elementoMensaje);
          }
          botonenviar.onclick = function(){
            let mensaje = mensajeingresado.value;
            mostrarMensajes(mensaje);
            socket.send(mensaje);
          };
          socket.onmessage = function(event){
            let mensaje = event.data;
            mostrarMensajes(mensaje);
          }
        </script>
        -->

        <details>
          <summary>Código...</summary>
          <div class="cod">
            <pre>
                let socket = new WebSocket("ws://http://myserver/HtmlCheatSheet/JS.php");
                  let mensajeingresado = document.getElementById("mensajeIngresado");
                  let botonenviar = document.getElementById("botonenviar");

                  function mostrarMensajes(contenido) {
                    let contenedorMensajes = document.getElementById("contenedorMensajes");
                    let elementoMensaje = document.createElement("p");
                    elementoMensaje.innerText = contenido;
                    contenedorMensajes.appendChild(elementoMensaje);
                  }
                  botonenviar.onclick = function(){
                    let mensaje = mensajeingresado.value;
                    mostrarMensajes(mensaje);
                    socket.send(mensaje);
                  };
                  socket.onmessage = function(event){
                    let mensaje = event.data;
                    mostrarMensajes(mensaje);
                  }
              </pre>
          </div>
        </details>
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
      
      <div class="cod">
        Math.round(Math.random()*5)
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

    <!-- JSON -->
    <fieldset> 
      <legend> JSON </legend>
      <div class="flex">
        <!-- Opcion 1 -->
        <div class="cod">
          <NGray>// Opcion 1</NGray> <br>
          <NPurp>let</NPurp> datosJson; <br>
          <NPurp>let</NPurp> xhr = <NAqua>new</NAqua> <Nblue>XMLHttpRequest</Nblue>(); <br>
          xhr.<Nblue>open</Nblue>("<NGreen>GET</NGreen>", "<NGreen>JSON.json</NGreen>",  true); <br>
          xhr.responseType = "<NGreen>json</NGreen>"; <br>
          xhr.<Nblue>onload</Nblue> = <NPurp>function</NPurp>() { <br>
            &nbsp; <NAqua>if</NAqua>(xhr.status === <NOrg>200</NOrg>){ <br>
              <NTab></NTab> datosJson = xhr.response; <br>
            &nbsp; }<NAqua>else</NAqua>{ <NGray>/* manejar el error */</NGray> } <br>
          } <br>
          xhr.<NBlue>send</NBlue>();
          <!-- Promesas -->
            <!-- Solicitud -->
              <!-- GET    (obtener) -->
              <!-- POST   (enviar) -->
              <!-- PUT    (Actualizar) -->
              <!-- Delete (Eliminar) -->
            <!-- Respuestas -->
              <!-- 200 (completada) -->
              <!-- 201 (elemento creado) -->
              <!-- 204 (respuesta vacia) -->
              <!-- 400 (mal solicitado) -->
              <!-- 401 (no autorizado) -->
        </div>
        <!-- Opcion 2 -->
        <div class="cod">
          <NGray>// Opcion 2 (fetch)</NGray> <br>
          <NPurp>let</NPurp> datosJson; <br><br>
          <NBlue>fetch</NBlue>("<NGreen>JSON.json</NGreen>") <br>
          &nbsp; <NBlue>.then</NBlue>(res<NPurp> => </NPurp> res.<NBlue>json</NBlue>() ) <br>
          &nbsp; <NBlue>.then</NBlue>( (salida) <NPurp> => </NPurp> { <br>
            <NTab></NTab> datosJson = salida; <br>
          }) <br>
          <NBlue>.catch</NBlue>( <NPurp>function</NPurp>(error){ <br>
            &nbsp; <NBlue>alert</NBlue>(error); <br>
          });
        </div>
        <!-- Opcion 3 -->
        <div class="cod">
          <NGray>// (fetch en funcion)</NGray> <br>
          <NPurp>function</NPurp> <NBlue>obtenerDatos</NBlue>(){ <br>
            <NAqua>return</NAqua> <NBlue>fetch</NBlue>("<NGreen>https://api.datos...</NGreen>") <br>
          &nbsp; <NBlue>.then</NBlue>( <NPurp>function</NPurp>(respuesta){ <br>
            <NTab></NTab> <NAqua>return</NAqua> respuesta.json(); <br>
          &nbsp; }) <br>
          &nbsp; <NBlue>.then</NBlue>( datos <NPurp> => </NPurp> console.<NBlue>log</NBlue>(datos) ) <br>
          &nbsp; <NBlue>.catch</NBlue>( error <NPurp> => </NPurp> console.<NBlue>log</NBlue>(error) ) <br>
          } <br>
          <NBlue>obtenerDatos</NBlue>();
        </div>
      </div>

      <!-- POST -->
      <div class="cod">
        
      </div>
    </fieldset>
  </section>


  <!-- Asincronía + Errores -->
  <section id="Asincronía + Errores">

    <fieldset> <!-- Callback -->
      <legend> Callback </legend>
        <div class="flex">
          <div class="cod">
            <NGray>// Callback</NGray> <br>
            <NPurp>function</NPurp> <NBlue>avanzaFila</NBlue>(callback){ <br>
              &nbsp; <NBlue>setTimeout</NBlue>(<NPurp>function</NPurp>(){ <br>
                <NTab></NTab> console.<NBlue>log</NBlue>("<NGreen>Tu turno ha llegado</NGreen>"); <br>
                <NTab></NTab> <NBlue>callback</NBlue>(); <br>
              &nbsp; }, <NOrg>5000</NOrg>); <br>
            } <br>
            <NPurp>function</NPurp> <NBlue>llamada</NBlue>(){ <br>
              &nbsp; console.<NBlue>log</NBlue>("<NGreen>Te presentas a tu turno</NGreen>"); <br>
            } <br>
              <br>
            console.<NBlue>log</NBlue>("<NGreen>Llegas a la fila</NGreen>"); <br>
            <NBlue>avanzaFila</NBlue>(llamada); <br>
            console.<NBlue>log</NBlue>("<NGreen>Te vas a comprar café</NGreen>");
          </div>
          <div class="cod">
            <NGray>// Manejo de Error</NGray> <br>
              <NPurp>function</NPurp> <NBlue>sumar</NBlue>(num1, num2, callback){ <br>
                &nbsp; <NBlue>setTimeout</NBlue>(<NPurp>function</NPurp>(){ <br>
                  <NTab></NTab>  if(<NAqua>typeof</NAqua> num1 != "<NGreen>number</NGreen>" || <NAqua>typeof</NAqua> num2 != "<NGreen>number</NGreen>"){ <br>
                    <NTab></NTab> <NTab></NTab> <NAqua>return</NAqua> <NBlue>callback</NBlue>(<NAqua>new</NAqua> <NBlue>Error</NBlue>("<NGreen> Argumento no válido</NGreen>")); <br>
                  <NTab></NTab> } <br>
                  <NTab></NTab> <NBlue>callback</NBlue>(<NAqua>null</NAqua>, num1 + num2); <br>
                &nbsp; }, <NOrg>1000</NOrg>); <br>
              } <br> <br>
              <NBlue>sumar</NBlue>("p", 50, <NPurp>function</NPurp>(error, resultado){ <br>
                <NAqua>if</NAqua>(error){ <br>
                  &nbsp; console.<NBlue>log</NBlue>(error); <br>
                }<NAqua>else</NAqua>{ <br>
                  &nbsp; console.<NBlue>log</NBlue>(resultado); <br>
                } <br>
              })
          </div>
        </div>
    </fieldset>

    <fieldset> <!-- Promise -->
      <legend> Promise </legend>
      <div class="flex">
        <div class="cod">
          <NGray>// Promise</NGray> <br>
          <NPurp>let</NPurp> miPromesa = <NAqua>new</NAqua> Promise(<NPurp>function</NPurp>(resolve, reject){ <br>
            &nbsp; <NBlue>setTimeout</NBlue>(<NPurp>function</NPurp>(){ <br>
              <NTab></NTab> <NPurp>let</NPurp> error = false; <br>
              <NTab></NTab> <NAqua>if</NAqua> (error){  <br>
              <NTab></NTab> &nbsp; <NBlue>reject</NBlue>("<NGreen>La Promesa ha fallado</NGreen>"); <br>
              <NTab></NTab> } <NAqua>else</NAqua>{  <br>
              <NTab></NTab> &nbsp; <NBlue>resolve</NBlue>("<NGreen>La Promesa se ha cumplido</NGreen>") <br>
              <NTab></NTab> } <br>
            &nbsp; }) <br>
          }); <br>
          miPromesa.<NBlue>then</NBlue>(<NPurp>function</NPurp>(resultado){ <br>
            &nbsp; console.<NBlue>log</NBlue>(resultado); <br>
          }).<NBlue>catch</NBlue>(<NPurp>function</NPurp>(error){ <br>
            &nbsp; console.<NBlue>log</NBlue>(error); <br>
          }) <br><br>

          <details>
            <summary>Otros...</summary>
            <pre>
              <NGray>// Varios Promise </NGray>
              let promesa1 = new Promise(function(resolve, reject){
                setTimeout(resolve, 5000, "Saludos a todos"); 
              });
              let promesa2 = new Promise(function(resolve, reject){
                setTimeout(resolve, 7000, "Otro saludo.");
              });
              Promise.all([promesa1, promesa2]).then(function(valores){
                console.log(valores[0],",", valores[1]);
              })

              <NGray>// Promise + json</NGray>
              function obtenerUsuarios(){
                return new Promise(function(resolve, reject){
                  let xhr = new XMLHttpRequest();
                  xhr.open("GET", "https://jsonplaceholder.typicode.com/users");
                  xhr.onload = function(){
                    if (xhr.status === 200){
                      resolve(JSON.parse(xhr.responseText));
                    }else{
                      reject(xhr.status);
                    }
                  }
                  xhr.send();
                });
              }
              obtenerUsuarios()
              .then(function(usuarios){
                console.log(usuarios);
              })
              .catch(function(error){
                console.error(error);
              })
            </pre>
          </details>
        </div>

        <div class="cod">
          <NGray>// Manejo de Error</NGray> <br>
          <NPurp>function</NPurp> <NBlue>sumar</NBlue>(num1, num2){ <br>
            <NAqua>return new</NAqua> <NObj>Promise</NObj>(<NPurp>function</NPurp>(resolve, reject){ <br>
              &nbsp; <NBlue>setTimeout</NBlue>(<NPurp>function</NPurp>(){ <br>
                &nbsp; <NTab></NTab> if(<NAqua>typeof</NAqua> num1 != "<NGreen>number</NGreen>" || <NAqua>typeof</NAqua> num2 != "<NGreen>number</NGreen>"){ <br>
                  <NTab2></NTab2> <NBlue>reject</NBlue>( <NAqua>new</NAqua> <NBlue>Error</NBlue> ("<NGreen>Argumento no válido</NGreen>")); <br>
                &nbsp; <NTab></NTab> } <NAqua>else</NAqua>{  <br>
                  <NTab2></NTab2> <NBlue>resolve</NBlue>("num1+num2") <br>
                &nbsp; <NTab></NTab> } <br>
              <NTab></NTab> }, <NOrg>1000</NOrg>); <br>
            &nbsp; }) <br>
          } <br><br>
          <NBlue>sumar</NBlue>("p", <NOrg>50</NOrg>)
          .<NBlue>then</NBlue>(<NPurp>function</NPurp>(resultado){ <br>
            &nbsp; console.<NBlue>log</NBlue>(resultado); <br>
          }).<NBlue>catch</NBlue>(<NPurp>function</NPurp>(error){ <br>
            &nbsp; console.<NBlue>log</NBlue>(error); <br>
          })
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- Async - Await -->
      <legend> Async - Await </legend>      
      <div class="flex">
        <div class="cod">
          <NGray>// Async - Await</NGray> <br>
          <NPurp>async function</NPurp> <NBlue>obtenerDatos</NBlue>(){ <br>
            <NTab></NTab> <NPurp>let</NPurp> respuesta <NAqua> = await</NAqua> <NBlue>fetch</NBlue>("<NGreen>https://api.datos...</NGreen>") <br> <br>
            <NTab></NTab> <NPurp>let</NPurp> datos <NAqua> = Await </NAqua> respuesta.<NBlue>json</NBlue>(); <br> <br>
            <NTab></NTab> console.<NBlue>log</NBlue>(datos); <br>
          } <br>
          <NBlue>obtenerDatos</NBlue>();
        </div>
        <div class="cod">
          <NGray>// Manejo de Error</NGray> <br>
          <NPurp>async function</NPurp> <NBlue>sumar</NBlue>(num1, num2){ <br>
            &nbsp; <NAqua>if</NAqua>(<NAqua>typeof</NAqua> num1 != "<NGreen>number</NGreen>" || typeof num2 != "<NGreen>number</NGreen>"){ <br>
              <NTab></NTab> <NAqua>throw new</NAqua> <NBlue>Error</NBlue>("<NGreen>Argumento no válido</NGreen>"); <br>
            &nbsp; } <br>
            &nbsp; <NAqua>return</NAqua> num1+num2; <br>
          } <br>
          <NPurp>async function</NPurp> <NBlue>manejoErrores</NBlue>(){ <br>
            &nbsp; <NAqua>try</NAqua>{ <br>
            <NTab></NTab> <NPurp>let</NPurp> resultado = await <NBlue>sumar</NBlue>("p", 50); <br>
            <NTab></NTab> console.<NBlue>log</NBlue>(resultado); <br>
            &nbsp; } <br>
            &nbsp; <NAqua>catch</NAqua>(error){ <br>
            <NTab></NTab> console.<NBlue>error</NBlue>(error.message); <br>
            &nbsp; } <br>
          } <br>
          <NBlue>manejoErrores</NBlue>(); <br>
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- Metodos Fetch -->
      <legend> Metodos Fetch </legend>
        <div class="cod"> <!-- POST -->
          <NGray>// POST</NGray>
          <pre>
              <NPurp>async function</NPurp> <NBlue>crearPost</NBlue>(titulo, contenido) {
                <NAqua>try</NAqua> {
                  <NPurp>let</NPurp> respuesta = <NAqua>await</NAqua> <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts</NGreen>", {
                    <NRed>method</NRed>: "<NGreen>POST</NGreen>",
                    <NRed>headers</NRed>: {
                      "<b>Content-Type</b>": "<NGreen>application/json</NGreen>",
                    },
                    <NRed>body</NRed>: JSON.<NBlue>stringify</NBlue>({
                      <b>title</b>: titulo,
                      <b>body</b>: contenido,
                      <b>userId</b>: 1,
                    }),
                  })
                  <NAqua>if</NAqua>(!respuesta.ok){
                    <NAqua>throw new</NAqua> <NBlue>Error</NBlue>("<NGreen>Error en la solicitud:</NGreen> " + respuesta.statusText);
                  }
                  <NPurp>let</NPurp> data = <NAqua>await</NAqua>(respuesta.json());
                  console.<NBlue>log</NBlue>("<NGreen>Registro Creado:</NGreen> " , data);
                } <NAqua>catch</NAqua> (error) {
                  console.<NBlue>error</NBlue>("<NGreen>Algo salió mal al crear el registro:</NGreen>", error);
                }
              }
              <NBlue>crearPost</NBlue>("<NGreen>Mi titulo de ejemplo</NGreen>", "<NGreen>Contenido de ejemplo</NGreen>");
          </pre>
        </div>

        <div class="cod"> <!-- GET -->
          <NGray>// GET</NGray>
          <pre>
              <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts/5</NGreen>", {
                <NRed>method</NRed>: "<NGreen>GET</NGreen>",
              })
              .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> respuesta.<NBlue>json</NBlue>())
              .<NBlue>then</NBlue>(data <NPurp> =></NPurp> console.<NBlue>log</NBlue>(data))
              .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>error</NBlue>("<NGreen>Error</NGreen>: ", error));
          </pre>
        </div>

        <div class="cod"> <!-- PUT -->
          <NGray>// PUT</NGray>
          <pre>
              <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts/5</NGreen>", {
                <NRed>method</NRed>: "<NGreen>PUT</NGreen>",
                <NRed>headers</NRed>: {
                  "<b>Content-Type</b>": "<NGreen>application/json</NGreen>",
                },
                <NRed>body</NRed>: JSON.<NBlue>stringify</NBlue>({
                  <b>title</b>: "<NGreen>Nuevo título</NGreen>",
                  <b>body</b>: "<NGreen>Nueva descripcion</NGreen>",
                }),
              })
              .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> respuesta.<NBlue>json</NBlue>())
              .<NBlue>then</NBlue>(data <NPurp> =></NPurp> console.<NBlue>log</NBlue>(data))
              .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>error</NBlue>("<NGreen>Error</NGreen>: ", error));
          </pre>
        </div>

        <div class="cod"> <!-- PATCH -->
          <NGray>// PATCH</NGray>
          <pre>
              <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts/5</NGreen>", {
                <NRed>method</NRed>: "<NGreen>PATCH</NGreen>",
                <NRed>headers</NRed>: {
                  "<b>Content-Type</b>": "<NGreen>application/json</NGreen>",
                },
                <NRed>body</NRed>: JSON.<NBlue>stringify</NBlue>({
                  <b>title</b>: "<NGreen>Nuevo título</NGreen>",
                }),
              })
              .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> respuesta.<NBlue>json</NBlue>())
              .<NBlue>then</NBlue>(data <NPurp> =></NPurp> console.<NBlue>log</NBlue>(data))
              .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>error</NBlue>("<NGreen>Error</NGreen>: ", error));
          </pre>
        </div>

        <div class="cod"> <!-- DEL -->
          <NGray>// DELETE</NGray>
          <pre>
              <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts/5</NGreen>", {
                <NRed>method</NRed>: "<NGreen>DELETE</NGreen>"
              })
              .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> respuesta.<NBlue>json</NBlue>())
              .<NBlue>then</NBlue>(data <NPurp> =></NPurp> console.<NBlue>log</NBlue>(data))
              .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>error</NBlue>("<NGreen>Error</NGreen>: ", error));
          </pre>
        </div>

        <div class="cod"> <!-- Avanzado -->
          <NGray>// Avanzado</NGray>
          <pre>
              <NBlue>fetch</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts</NGreen>", {
                <NRed>method</NRed>: "<NGreen>GET</NGreen>",
                <NRed><u>credentials</u></NRed>: "<NGreen>include</NGreen>",
                <NRed><u>cache</u></NRed>: "<NGreen>force-cache</NGreen>", <NGray>// no-cache, default, reload, only-if-cache</NGray>
                <NRed><u>redirect</u></NRed>: "<NGreen>follow</NGreen>", <NGray>// error, manual</NGray>
                <NRed>headers</NRed>: {
                  "<b>Autorization</b>": "<NGreen>Bearer</NGreen> + token", <NGray>// "Basic " + btoa(user + ";" + password)</NGray>
                  "<b>Content-Type</b>": "<NGreen>application/json</NGreen>",
                },
              })
              .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> respuesta.<NBlue>json</NBlue>())
              .<NBlue>then</NBlue>(data <NPurp> =></NPurp> console.<NBlue>log</NBlue>(data))
              .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>error</NBlue>("<NGreen>Error</NGreen>: ", error));
          </pre>
        </div>
    </fieldset>

    <fieldset> <!-- Axios -->
      <legend> Axios (más potente que fetch)</legend>
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script> <!-- ó "npm install axios" -->

      <div class="cod"> <!-- install / script axion -->
        <<NRed>script</NRed> <NPurp>src</NPurp>="<NGreen>https://unpkg.com/axios/dist/axios.min.js</NGreen>"><<NRed>/script</NRed>> 
        <NGray>// ó "npm install axios"</NGray>
      </div>
      <div class="cod"> <!-- GET -->
        <NGray>// GET</NGray> <br>
        axios.<NBlue>get</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts</NGreen>") <br>
        .<NBlue>then</NBlue>(<NPurp>function</NPurp>(respuesta){ <br>
          &nbsp; console.<NBlue>log</NBlue>(respuesta.data[<NOrg>0</NOrg>].title); <br>
        }) <br>
        .<NBlue>catch</NBlue>(error <NPurp> => </NPurp> console.<NBlue>log</NBlue>(error))
      </div>
      <div class="cod"> <!-- POST -->
        <NPurp>let</NPurp> datos = { <br>
          &nbsp; <NRed>title</NRed>: "<NGreen>Nuevo Post</NGreen>", <br>
          &nbsp; <NRed>body</NRed>: "<NGreen>Mi contenido</NGreen>" <br>
        } <br>
        axios.<NBlue>post</NBlue>("<NGreen>https://jsonplaceholder.typicode.com/posts</NGreen>", datos) <br>
        .<NBlue>then</NBlue>(respuesta <NPurp> =></NPurp> console.<NBlue>log</NBlue>("<NGreen>Post creado!</NGreen> ", respuesta.data)) <br>
        .<NBlue>catch</NBlue>(error <NPurp> =></NPurp> console.<NBlue>log</NBlue>("<NGreen>Error al publicar:</NGreen> " , error)) <br>
      </div>
      <div class="cod"> <!-- Otros -->
        <details>
          <summary>Axios simultáneos + interceptores [...]</summary>
          <pre>
              <NGray>// Axios simultáneos + interceptores</NGray>
              let token = "MiToken";

              axios.interceptors.request.use( <NGray> // interceptor Request</NGray>
                (config)=> {
                  config.headers.Autorization = `Bearer $(token)`;
                  return config
                },(error)=> { return Promise.reject(error) }
              )

              axios.interceptors.response.use( <NGray> // interceptor Respuesta</NGray>
                (respuesta) => {
                  respuesta.data.customField = "Nuevo campo";
                  return respuesta;
                },(error)=> { return Promise.reject(error) }
              )

              let pedido1 = axios.get("https://api.ejemplo.com/data1");
              let pedido2 = axios.get("https://api.ejemplo.com/data2");
              let pedido3 = axios.get("https://api.ejemplo.com/data3");

              function obtenerInfo() {
                axios.post([pedido1, pedido2, pedido3])
                .then(axios.spread((respuesta1, respuesta2, respuesta3)=>{
                  <NGray>// Codigo...</NGray>
                }))
                .catch(error => { <NGray>// Manejar errores</NGray> })
              }
          </pre>
        </details>
      </div>
    </fieldset>

  </section>


  
  <p id="textoFix"></p>
<script src="../index.js"></script>
</body>
</html>
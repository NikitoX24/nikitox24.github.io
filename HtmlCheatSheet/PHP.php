<?php

$title = "PHP";
$color = "#003e1e";

require("../PHP/config.php");
require("../PHP/header.php");

?>

<header>

  <h1 class="titulo">PHP CheatSheet</h1>
  <div class="iconosFlex"> <!-- icons -->
    <a href="HTML.html"><img src="../Imgs/html.png" alt="html" class="icons filtrogris"></a>
    <a href="CSS.html"><img src="../Imgs/css.png" alt="css" class="icons filtrogris"></a>
    <a href="JavaScript.html"><img src="../Imgs/js.png" alt="js" class="icons filtrogris"></a>
    <a href="PHP.html"><img src="../Imgs/php.png" alt="php" class="icons"></a>
  </div>
  <style>
    section {
      background-color: rgba(0, 0, 255, .05);
      box-shadow: inset 0 40px 0 0 rgba(0, 119, 255, 0.164), 
          4px 4px 15px 5px rgba(0, 0, 255, 0.1);}
  </style>
</header>

<style>
  :root{
    --varC: rgb(210, 210, 210);
    --aquaC: rgb(20, 212, 255);
  }
  .cod{
    background-color: rgb(15, 15, 27);
    text-shadow: none;
    color: var(--aquaC);
  }
  NAqua{ color: var(--aquaC); }
  NBlue{ color: rgb(107, 149, 234); }
  NGreen{ color: rgb(209, 255, 139); }
  NVar{ color: var(--varC); }
  NPurp{ color: rgb(194, 122, 194); }
  NRed{ color: rgb(255, 85, 85); }
  NOrg{ color: rgb(254, 146, 38);}
  NGray{ color: gray; }
  NObj{ color: rgb(252, 222, 104); }
</style>

<body>
  <!-- Variables -->
  <section id="Variables y Arrays">
    <fieldset> <!-- Variable -->
      <legend> Variables </legend>

      <div class="columnas">
        Variable
        <div class="cod">
          &lt;?php <br>
          &nbsp; $<NVar>name</NVar> = "<NGreen>John</NGreen>" <br>
          &nbsp; <NBlue>echo</NBlue> $<NVar>name</NVar>; <br>
          ?>
        </div><br>
        Variable como Variable
        <div class="cod">
          $<NVar>a</NVar> = "<NGreen>variable</NGreen>" <br>
          $<NVar>variable</NVar> = "<NGreen>hola mundo!</NGreen>" <br>
          <NBlue>echo</NBlue> $$<NVar>a</NVar>; <NGray>// hola mundo!</NGray>
        </div>
        
        Constante
        <div class="cod">
          <NBlue>define</NBlue>("<NGreen>Mensaje</NGreen>", "<NGreen>Hola Mundo!</NGreen>"); <br>
          <NBlue>echo</NBlue> <NVar>Mensaje</NVar>;
        </div>
        Variable en Funciones
        <div class="cod">
          $<NVar>name</NVar> = "<NGreen>David</NGreen>" <br>
          <NGreen class="purp">function</NGreen> <NBlue>getName</NBlue>() { <br>
            &nbsp; <NGreen class="purp">global</NGreen> $<NVar>name</NVar>; <br>
            &nbsp; <NBlue>echo</NBlue> $<NVar>name</NVar>; <br> } <br>
          <NBlue>getName</NBlue>(); <NGray> // "David"</NGray>
        </div>
      </div> <hr>

      <div class="flex">
        <div class="width100">
          Propiedades:
          <div class="cod wAuto">
            $<NVar>dia</NVar> = "<NGreen>Lunes</NGreen>"; <br>
            <NBlue>echo gettype</NBlue>($<NVar>dia</NVar>); <NGray>// string</NGray> <br>
            <NBlue>echo var_dump</NBlue>($<NVar>dia</NVar>); <NGray>// string(5)"Lunes"</NGray>
          </div>
        </div>

        <div class="width100">
          Convertir:
          <div class="cod wAuto">
            $<NVar>a</NVar> = <NOrg>1.654</NOrg>; <br>
            $<NVar>b</NVar> = (<NPurp>int</NPurp>)$<NVar>a</NVar>;
          </div>
        </div>
      </div>
    </fieldset>
  
    <fieldset> <!-- Arrays -->
      <legend> Arrays </legend>
      Array
      <div class="flex">
        <div class="cod">
          $<NVar>Personas</NVar> = <NBlue>array</NBlue>("<NGreen>David</NGreen>" => "<NGreen>27</NGreen>"); <br>
          $<NVar>Personas</NVar>["<NGreen>David</NGreen>"] = "<NGreen>28</NGreen>";
        </div>
        <div class="cod">
          $<NVar>dia</NVar><NObj>[]</NObj> = "<NGreen>Lunes</NGreen>"; <br>
          $<NVar>dia</NVar><NObj>[]</NObj> = "<NGreen>Martes</NGreen>";
        </div>
      </div> <br>

      Array MultiDimensionales
      <div class="flex">
        <div class="cod">
          $<NVar>Personas</NVar> = <NBlue>array</NBlue> (<br>
          &nbsp; "<NGreen>online</NGreen>" => ["<NGreen>David</NGreen>", "<NGreen>Amy</NGreen>"], <br>
          &nbsp; "<NGreen>offline</NGreen>" => ["<NGreen>John</NGreen>", "<NGreen>Rob</NGreen>"] <br>
          );<br>
          <NBlue>echo</NBlue> $<NVar>Personas</NVar>["<NGreen>online</NGreen>"][<NGreen class="orange">0</NGreen>];
          <NVar>// "David"</NVar>
        </div>
        <div class="cod">
          $<NVar>semana</NVar> = [ <br>
            &nbsp; [<NOrg>10</NOrg>, <NOrg>20</NOrg>, <NOrg>30</NOrg>], <br>
            &nbsp; [<NOrg>40</NOrg>, <NOrg>50</NOrg>, <NOrg>60</NOrg>], <br>
            &nbsp; ["<NGreen>uno</NGreen>", "<NGreen>dos</NGreen>", "<NGreen>tres</NGreen>"] <br>
          ]; <br>
          <NBlue>echo</NBlue> $<NVar>semana</NVar>[<NOrg>2</NOrg>][<NOrg>1</NOrg>] <NGray>// dos</NGray>
        </div>
      </div>
    </fieldset>
  </section>

  <!-- Variables Predefinidas -->
  <section id="Variables Predefinidas">
    <fieldset> <!-- $_Server -->
      <legend>$_Server</legend>
      <div class="flex">
        <div class="cod">
          <NBlue>echo</NBlue> $<NVar>_SERVER</NVar>["<NGreen>SCRIPT_NAME</NGreen>"]; <br>
          <NGray> // /MyServer/HtmlCheatSheet/PHP.html</NGray>
        </div>
        <div class="cod">
          <NBlue>echo</NBlue> $<NVar>_SERVER</NVar>["<NGreen>HTTP_HOST</NGreen>"]; <br>
          <NGray>// localhost</NGray>
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- $_POST $_GET -->
      <legend>$_POST (Encriptado) - $_GET (URL)</legend>
      <!-- $_POST (Mostrar Encriptado) - $_GET (Mostrar en el URL) -->
      <div class="fWrap">
        <div class="flex">
          <div class="ej width100">
            <form action="Php/php.php" method="post">
              Usuario: <input type="text" name="user" /> <br>
              Contraseña: <input type="text" name="password" /> <br><br>
              <input type="submit" name="submit" value="Submit" />
            </form>
          </div>
          <div class="cod width100">
            &lt;<NRed>form</NRed> <NPurp>action</NPurp>="<NGreen>php.php</NGreen>" <NPurp>method</NPurp>="<NGreen><u>post</u></NGreen>"> <br>
              &nbsp; <NVar>Usuario</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>user</NGreen>"/> <br>
              &nbsp; <NVar>Contraseña</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>password</NGreen>" <NPurp>name</NPurp>="<NGreen>password</NGreen>"/> <br>
              &nbsp; &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>submit</NGreen>" <NPurp>name</NPurp>="<NGreen>submit</NGreen>" <NPurp>value</NPurp>="<NGreen>Submit</NGreen>"/> <br>
            &lt;/<NRed>form</NRed>> <hr>
            &lt;<NRed>a</NRed> <NPurp>href=</NPurp>"<NGreen>php.php?myVariable='123'</NGreen>"><NVar>Ej GET</NVar>&lt;/<NRed>a</NRed>>
          </div>
        </div> <br>
        (php.php) <br>
        <div class="cod">
          $<NVar>myVar</NVar> = $<NVar>_GET</NVar>["<NGreen>myVariable</NGreen>"]; <NGray>//Ej GET</NGray> <hr>
          $<NVar>user</NVar> = "<NGreen>Nico</NGreen>"; <NGray>// Usar MySQL</NGray> <br>
          $<NVar>password</NVar> = "<NGreen>123</NGreen>"; <br><br>
      
          if($<NVar>_POST</NVar>['<NGreen>user</NGreen>']==$<NVar>user</NVar> && $<NVar>_POST</NVar>['<NGreen>password</NGreen>']==$<NVar>password</NVar>) { <br>
            &nbsp; <NBlue>session_start</NBlue>(); <br>
            &nbsp; $_<NVar>SESSION</NVar>['<NGreen>usuario</NGreen>'] = "<NGreen>Nico Pasino</NGreen>"; <br>
            &nbsp; $_<NVar>SESSION</NVar>["<NGreen>pais</NGreen>"] = "<NGreen>Argentina</NGreen>"; <br>
            &nbsp; <NBlue>header</NBlue>('<NGreen>location: cuenta.php</NGreen>'); <NGray>//Enviar a otra pag.</NGray> <br>
          } <br>
          else { <br>
            &nbsp; <NBlue>echo</NBlue> "<NGreen>USUARIO o CONTRASEÑA incorrecta.</NGreen>"; <br>
            &nbsp; <NBlue>echo</NBlue> "<NGreen>&lt;a href='index.php'> INTENTAR NUEVAMENTE &lt;/a></NGreen>"; <br>
          }
        </div> <br>
        <div class="flex">
          <div class="cod">
            <NGray>(cuenta.php)</NGray> <br>
            <NBlue>session_start</NBlue>(); <br>
      
            <NBlue>echo</NBlue> "<NGreen>Bienvenido</NGreen> ".$<NVar>_SESSION</NVar>["<NGreen>usuario</NGreen>"]; <br>
            <NBlue>echo</NBlue> "<NGreen>Su pais es:</NGreen> ".$<NVar>_SESSION</NVar>["<NGreen>pais</NGreen>"]; <br>
            <NBlue>echo</NBlue> "<NGreen>&lt;a href='cerrarSesion.php'> Cerrar Sesion &lt;/a></NGreen>";
          </div> <br>
          <div class="cod">
            <NGray>(cerrarSesion.php)</NGray> <br>
            <NBlue>session_start</NBlue>(); <br>
            <NBlue>session_unset</NBlue>(); <br>
            <NBlue>session_destroy</NBlue>(); <br>
            <NBlue>header</NBlue>('<NGreen>location: index.php</NGreen>');
          </div>
        </div>
      </div>
    </fieldset>

    <fieldset> <!-- $_SESSION -->
    <legend> $_SESSION (temporal, acceso a la variable en cualquer lugar)</legend>
      <div class="flex">
        <div class="cod">
          <NBlue>session_start</NBlue>(); <NGray>// Siempre en la 1ra linea.</NGray> <br>
          <NBlue>session_destroy</NBlue>(); <NGray>//Cerrar Sesion.</NGray> <br>
          <NBlue>session_unset</NBlue>(); <NGray>//Borrar variables pero mantener sesion.</NGray>
        </div>
        <div class="cod">
          $<NVar>_SESSION</NVar>["<NGreen>name</NGreen>"] = "<NGreen>John</NGreen>"; <br>
          <NBlue>echo</NBlue> "<NGreen>Nombre: </NGreen>" . $<NVar>_SESSION</NVar>["<NGreen>name</NGreen>"]; <br><br>
        </div>
      </div>
    </fieldset>
    
    <fieldset> <!-- $_COOKIE (Guardar user pc) -->
    <legend> $_COOKIE (User PC) </legend>
      <div class="cod">
        <NBlue>setcookie</NBlue>("<NGreen>user</NGreen>", "<NGreen>$value</NGreen>", <NBlue>time</NBlue>()+(<NOrg>3600</NOrg>), '<NGreen>/</NGreen>', '<NGreen>www..com</NGreen>', $<NVar>_SERVER</NVar>('<NGreen>HTTPS</NGreen>')); <br>
        <NBlue>setcookie</NBlue>(<NVar>name, value, expire(seg), path</NVar><NGray>, domain(opc), secure(opc), httponly(opc)</NGray>); <br><br>

        <NBlue>echo</NBlue> $<NVar>_COOKIE</NVar>["<NGreen>user</NGreen>"];
      </div>
    </fieldset>
  </section>

  <!-- Archivos -->
  <section id="Archivos">
    <fieldset> <!-- Archivos -->
      <legend> Archivos </legend>
      <div class="flex">
        <div class="cod">
          <NGray>// Escribir</NGray> <br>
          $<NVar>myfile</NVar> = <NBlue>fopen</NBlue>("<NGreen>file.txt</NGreen>", "<NGreen>a</NGreen>") or die("<NGreen>Error al abrir!</NGreen>"); <br><br>
          $<NVar>txt</NVar> = "<NGreen>John\n</NGreen>"; <br>
          <NBlue>fwrite</NBlue>($<NVar>myfile</NVar>, $<NVar>txt</NVar>); <br>
          <NVar></NVar>
          $<NVar>myfile</NVar> = <NBlue>fclose</NBlue>("<NGreen>file.txt</NGreen>");
        </div>
        <div class="cod">
          <NGray>// Leer</NGray> <br>
          $<NVar>read</NVar> = <NBlue>file</NBlue>('<NGreen>names.txt</NGreen>'); <br><br>
          foreach ($<NVar>read</NVar> as $<NVar>line</NVar>) { <br>
            &nbsp; <NBlue>echo</NBlue> $<NVar>line</NVar> ."<NGreen>,</NGreen> "; <br>
          }
        </div>
      </div>
    </fieldset>

    <fieldset class="flex"> <!-- Escribir desde form -->
    <legend> Escribir desde form </legend>
      <div class="cod width100"> <br>
        &lt;<NRed>form</NRed> <NPurp>action</NPurp>="<NGreen>php.php</NGreen>" <NPurp>method</NPurp>="<NGreen>POST</NGreen>"> <br>
          &nbsp; &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>asunto</NGreen>"/> <br>
          &nbsp; &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>submit</NGreen>" <NPurp>name</NPurp>="<NGreen>submit</NGreen>"/> <br>
        &lt;/<NRed>form</NRed>>
      </div> <br>
      <div class="cod width100">
        if(<NBlue>isset</NBlue>($<NVar>_POST</NVar>["<NGreen>asunto</NGreen>"])) { <br>
          &nbsp; $<NVar>text</NVar> = $<NVar>_POST</NVar>["<NGreen>asunto</NGreen>"] . "<NGreen>\r\n</NGreen>"; <br>
          &nbsp; $<NVar>archivo</NVar> = <NBlue>fopen</NBlue>('<NGreen>texto.txt</NGreen>', '<NGreen>a</NGreen>'); <br>
          &nbsp; <NBlue>fwrite</NBlue>($<NVar>archivo</NVar>, $<NVar>text</NVar>); <br>
          &nbsp; <NBlue>fclose</NBlue>($<NVar>archivo</NVar>); <br>
        }
      </div>
    </fieldset>

    <fieldset> <!-- Usar archivos php -->
    <legend> Usar archivos php como bloques de código </legend>
      <div class="flex">
        <div class="cod">
          require("<NGreen>header.php</NGreen>"); <NGray>// Obligatorio</NGray> <br>
          require_once("<NGreen>header.php</NGreen>"); <NGray>// Obligatorio 1 vez</NGray> <br><br>
          include("<NGreen>header.php</NGreen>"); <NGray>// Opcional</NGray> <br>
          include_once("<NGreen>header.php</NGreen>"); <NGray>// Opcional 1 vez</NGray>
        </div>
        <div class="cod">
          <NGray>(header.php)</NGray> <br>
          &lt;!<NRed>DOCTYPE</NRed> <NPurp>html</NPurp>> <br>
          &lt;<NRed>html</NRed> <NPurp>lang</NPurp>="<NGreen>es</NGreen>"> <br>
          <<NRed>head</NRed>> <<NRed>title</NRed>><NVar>Título</NVar><<NRed>/title</NRed>> <<NRed>/head</NRed>> <br>
          <<NRed>body</NRed>>
        </div>
      </div>
    </fieldset>
  </section>
  
  <!-- Funciones -->
  <section id="Funciones">
    <fieldset> <!-- Funcion -->
      <legend> Funciones </legend>
      <div class="cod">
        <NPurp>function</NPurp> <NBlue>myFunc</NBlue><NObj>(){ <br>
          &nbsp; <NBlue>echo</NBlue> "<NGreen>asd</NGreen>"; <br>
        } </NObj>
      </div>
      Funciones String.
      <div class="cod">
        <NBlue>strtoupper</NBlue>($<NVar>var</NVar>); <NGray>// Mayuscula.</NGray> <br>
        <NBlue>strtolower</NBlue>($<NVar>var</NVar>); <NGray>// Minuscula.</NGray> <br>
        <NBlue>ucfrirst</NBlue>($<NVar>var</NVar>); <NGray>// Capitalizar.</NGray> <br>
        <NBlue>ucwords</NBlue>($<NVar>var</NVar>); <NGray>// Capitalizar cada palabra.</NGray> <br>
        <NBlue>strlen</NBlue>($<NVar>var</NVar>); <NGray>// cantidad de letras.</NGray> <br>
        <NBlue>strrev</NBlue>($<NVar>var</NVar>); <NGray>// texto de atras para adelante.</NGray>
      </div>
      Funciones de Fechas.
      <div class="cod">
        <NBlue>checkdate</NBlue>(_, _, _); <NGray>// verificar si es correcta la fecha.</NGray> <br>
        <NBlue>date</NBlue>('y - m- d'); <NGray>// Devolver fecha/hora.(L: dia, h: hora ... etc. investigar.)</NGray> <br>
        <NBlue>getdate</NBlue>('year'); <NGray>// Devolver fecha/hora.(seconds, minutes, hours, mday ... etc)</NGray>
      </div>
      Funciones de Control.
      <div class="cod">
        <NBlue>isset</NBlue>(); <NGray>// verifica si la variable está declarada.</NGray> <br>
        <NBlue>empty</NBlue>(); <NGray>// verifica si la variable está vacia.</NGray> <br>
        <NBlue>is_null/is_integer/is_double/is_string</NBlue>(); <NGray>// verifica si la variable...</NGray> <br>
      </div>
    </fieldset>
  </section>

  <!-- Objetos -->
  <section id="Objetos - Clases">
    <fieldset> <!-- Objetos -->
      <legend> Objetos / Clases </legend>

      <!-- Objs -->
      <div class="flex">
        <div class="cod">
          <NGray>//Instanciar y Asignar</NGray> <br>
          <NPurp>class</NPurp> <NObj>Person{</NObj> <br>
            &nbsp; <NPurp>public</NPurp> $<NVar>name</NVar>; <br>
            &nbsp; <NPurp>public function</NPurp> <NBlue>speak</NBlue><NPurp>( ) {</NPurp> <br>
            &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Hola me llamo </NGreen>". $this-><NVar>name</NVar>; <br>
            &nbsp; <NPurp>}</NPurp> <br>
          <NObj>}</NObj> <br><br>
          $<NVar>p1</NVar> = <NOrg>new</NOrg> <NObj>Person( )</NObj>; <NGray> // Instanciar</NGray> <br>
          $<NVar>p1</NVar>-><NVar>name</NVar> = "<NGreen>David</NGreen>"; <NGray> // Asignar </NGray> <br>
          <NBlue>echo</NBlue> $<NVar>p1</NVar>-><NVar>name</NVar>; <NGray> // David</NGray> <br>
          $<NVar>p1</NVar>-><NBlue>speak</NBlue>( ); <NGray> // Hola me llamo <u>David</u></NGray>
        </div>

        <div class="cod">
          <NGray>// Constructor - Desconstructor</NGray> <br>
          <NPurp>class</NPurp> <NObj>Objeto{</NObj> <br>
            &nbsp; <NPurp>public function</NPurp> <NBlue>__construct</NBlue><NPurp>( ) {</NPurp> <br>
              &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Object created!</NGreen>"; <br>
            &nbsp; <NPurp>}</NPurp> <br>
            &nbsp; <NPurp>public function</NPurp> <NBlue>__destruct</NBlue><NPurp>( ) {</NPurp> <br>
              &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Object destroyed!</NGreen>"; <br>
            &nbsp; <NPurp>}</NPurp> <br>
          <NObj>}</NObj> <br><br>
          $<NVar>obj1</NVar> = <NOrg>new</NOrg> <NObj>Objeto( )</NObj>; <NGray> // Object created!</NGray> <br>
          <NBlue>unset</NBlue>($<NVar>obj1</NVar>); <NGray> // Object destroyed!</NGray> <br>
        </div>
      </div> <hr>

      Herencia de clases
      <div class="flex">
        <div class="cod">
          <NPurp>class</NPurp> <NObj>Coder</NObj> <NPurp><u>extends</u></NPurp> <NObj>Person{</NObj> <br>
          &nbsp; <NPurp>public function</NPurp> <NBlue>hablar</NBlue><NPurp>() {</NPurp> <br>
            &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Hola mundo!, by: </NGreen>". $this-><NVar>name</NVar>; <br>
          &nbsp; <NPurp>}</NPurp> <br> <NObj>}</NObj> <br><br>
          $<NVar>p2</NVar> = <NOrg>new</NOrg> <NObj>Coder( )</NObj>; <br>
          $<NVar>p2</NVar>-><NVar>name</NVar> = "<NGreen>Nico</NGreen>"; <br>
          $<NVar>p2</NVar>-><NBlue>speak</NBlue>( ); <NGray> // Hola mundo!, by Nico</NGray>
        </div>
        <div class="cod">
          <NGray>// Final (no permite heredar clases o funciones).</NGray> <br><br>
          <NPurp><u>final</u> class</NPurp> <NObj>myFinalClass { <br> } </NObj> <br><br>
          <NPurp>class</NPurp> <NObj>myClass</NObj> <NPurp>extends</NPurp> <NObj><u>myFinalClass</u> { <br>
            &nbsp; <NGray>//ERROR no se puede heredar una clase "Final"</NGray> <br> }</NObj>
        </div>
      </div> <hr>

      <div class="flex">
        <div class="wAuto">
          Interface (Crear funciones para objetos).
          <div class="cod">
            <NPurp>interface</NPurp> <NObj>MyInterface {</NObj> <br>
              &nbsp; <NPurp>public function <NBlue>hablar</NBlue>( )</NPurp>; <br> <NObj>}</NObj> <br><br>
          
            <NPurp>class</NPurp> <NObj>Person</NObj> <NPurp>implements</NPurp> <NObj>MyInterface {</NObj> <br>
              &nbsp; <NPurp>public function <NBlue>hablar</NBlue>( ){</NPurp> <br>
                &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Hola!</NGreen>"; <br>
              <NObj>}</NObj> <br><br>
              $<NVar>p3</NVar> = <NOrg>new</NOrg> <NObj>Person( )</NObj>; <br>
              $<NVar>p3</NVar>-><NBlue>hablar</NBlue><NObj>( )</NObj>; <NGray>// Hola!</NGray>
          </div>
        </div>
        <div class="wAuto">
          Clases Abstractas (pueden ser heredadas pero no instanciadas). <br>
          <div class="cod columnas">
            <div><NPurp> abstract class <NObj>Fruit{</NObj> <br>
              &nbsp; private <NAqua>$<NVar>color</NVar>;</NAqua> <br><br>
          
              &nbsp; abstract public function <NBlue>eat</NBlue>( ); <br> <br>
          
              &nbsp; public function <NBlue>setColor</NBlue>(<NAqua>$</NAqua><NVar>c</NVar>) { </NPurp><br>
                &nbsp; &nbsp; $this-><NVar>color</NVar> = $<NVar>c</NVar>; <br>
              &nbsp; <NPurp>}</NPurp> <br>
            <NObj>}</NObj></div>
            <div><NPurp>class</NPurp> <NObj>Apple</NObj> <NPurp>extends</NPurp> <NObj>Fruit {</NObj> <br>
              &nbsp; <NPurp>public function <NBlue>eat</NBlue>( ){</NPurp> <br>
                &nbsp; &nbsp; <NBlue>echo</NBlue> "<NGreen>Omnomnom</NGreen>"; <br> &nbsp; <NPurp>}</NPurp>  <br>
              <NObj>}</NObj> <br><br>
              $<NVar>obj</NVar> = <NOrg>new</NOrg> <NObj>Apple( )</NObj>; <br>
              $<NVar>obj</NVar>-><NBlue>eat</NBlue><NObj>( )</NObj>; <NGray>// Omnomnom</NGray></div>
          </div>
        </div>
      </div> 

      Static (define propiedades estáticas y métodos estáticos).
      <div class="cod">
        <NPurp>class</NPurp> <NObj>myClass {</NObj> <br>
          &nbsp; <NPurp>static</NPurp> $<NVar>myProperty</NVar> = <NOrg>42</NOrg>; <br>
          &nbsp; <NPurp>static function</NPurp> myMethod<NPurp>() {</NPurp> <br>
            &nbsp; &nbsp; <NBlue>echo</NBlue> <NPurp>self</NPurp>::$<NVar>myProperty</NVar>; <br>
          &nbsp; <NPurp>}</NPurp> <br>
        <NObj>}</NObj> <br><br>
        
        <NObj>myClass</NObj>::myMethod<NObj>()</NObj>;
      </div> <hr>

    </fieldset>
  </section>

  <!-- Base de Datos -->
  <section id="Base de Datos (SQL)">
    <fieldset> <!-- Conexion y Solicitud -->
      <legend>Conexion y Solicitud</legend>
      <div class="width100">
        index.php
        <div class="cod wAuto">
          include("<NGreen>Conexion.php</NGreen>"); <br>
          $<NVar>solicitud</NVar> = ' <NGray>/* comandos qsl */</NGray> '; <br>
          $<NVar>resultado</NVar> = <NBlue>mysqli_query</NBlue>($<NVar>conexion</NVar>, $<NVar>solicitud</NVar>);
        </div>
      </div>
      <div class="width100">
        Conexion.php
        <div class="cod wAuto">
          $<NVar>conexion</NVar> = <NBlue>mysqli_connect</NBlue>("<NGreen>localhost</NGreen>", "<NGreen>root</NGreen>", "", "<NGreen>baseDatos</NGreen>"); <br>
          <NBlue>mysqli_set_charset</NBlue>($<NVar>conexion</NVar>, "<NGreen>utf8</NGreen>"); <NGray>// opcional ?</NGray>
        </div>
      </div>
      <a href="">(Ver más en el archivo sql.sql).</a>
    </fieldset>

    <fieldset> <!-- Crear Tabla -->
    <legend> Crear una tabla con Columnas/field (DLL) </legend>
      <div class="cod">
        <NGreen><NOrg>CREATE TABLE</NOrg> nombreTabla ( <NGray>-- Crear tabla.</NGray> <br>
          &nbsp; ID <NPurp>int</NPurp> <NOrg>NOT NULL</NOrg> AUTO_INCREMENT, <br>
          &nbsp; Nombre <NPurp>varchar</NPurp> (<NOrg>15</NOrg>), <br>
          &nbsp; Apellido <NPurp>varchar</NPurp> (<NOrg>15</NOrg>), <br>
          &nbsp; Edad <NPurp>int</NPurp>, <br>
          &nbsp; Celular <NPurp>int</NPurp>, <br>
          &nbsp; <NPurp>PRIMARY KEY</NPurp>(ID) <br>
        ) </NGreen><br> 
      </div>
      <div class="cod"> <NVar>
        <NOrg>DROP TABLE</NOrg> <NGreen>nombreTabla;</NGreen> <NGray>-- Borrar Tabla.</NGray> <br>
        <NOrg>ALTER TABLE</NOrg> mytabla RENAME myusuarios; <NGray>-- renombrar tabla.</NGray> <br>
        <NOrg>ALTER TABLE</NOrg> myusuarios CHANGE telefono celular <NPurp>INT</NPurp>(<NOrg>11</NOrg>); <NGray>-- cambiar el nombre a una columna.</NGray> <br>
        <NOrg>ALTER TABLE</NOrg> myusuarios <NOrg>ADD</NOrg> COLUMN (direccion <NPurp>VARCHAR</NPurp>(<NOrg>20</NOrg>)); <NGray>-- agregar nueva columna.</NGray> <br>
        <NOrg>ALTER TABLE</NOrg> myusuarios <NOrg>DROP</NOrg> COLUMN edad; <NGray>-- borrar columna</NGray></NVar>
      </div>
    </fieldset>

    <fieldset> <!-- Enviar a una Tabla -->
    <legend> Enviar un Registro a una Tabla con (DML) </legend>
      <div class="flex">
        <div class="ej width100">
          <form action="Php/uno.php" method="post">
            Nombre: <input type="text" name="nombre"/><br>
            Apellido: <input type="text" name="apellido"/><br>
            Edad: <input type="text" name="edad"/><br>
            Celular: <input type="text" name="celular"/> <br>
            <input type="submit" name="submit" value="Submit"/>
          </form>
        </div>
        <div class="cod width100"> <!-- código del FORM -->
          &lt;<NRed>form</NRed> <NPurp>action</NPurp>="<NGreen>php.php</NGreen>" <NPurp>method</NPurp>="<NGreen><u>post</u></NGreen>"> <br>
            &nbsp; <NVar>Nombre</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>nombre</NGreen>"/> <br>
            &nbsp; <NVar>Apellido</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>apellido</NGreen>"/> <br>
            &nbsp; <NVar>Edad</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>edad</NGreen>"/> <br>
            &nbsp; <NVar>Celular</NVar>: &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>text</NGreen>" <NPurp>name</NPurp>="<NGreen>celular</NGreen>"/> <br>
            &nbsp; &lt;<NRed>input</NRed> <NPurp>type</NPurp>="<NGreen>submit</NGreen>" <NPurp>name</NPurp>="<NGreen>submit</NGreen>" <NPurp>value</NPurp>="<NGreen>Submit</NGreen>"/> <br>
          &lt;/<NRed>form</NRed>>
        </div>
      </div>
      <div class="cod">
        include("<NGreen>Conexion.php</NGreen>"); <br><br>

        $<NVar>nombre</NVar> = $<NVar>_POST</NVar>["<NGreen>nombre</NGreen>"]; <br>
        $<NVar>apellido</NVar> = $<NVar>_POST</NVar>["<NGreen>apellido</NGreen>"]; <br>
        $<NVar>edad</NVar> = $<NVar>_POST</NVar>["<NGreen>edad</NGreen>"]; <br>
        $<NVar>celular</NVar> = $<NVar>_POST</NVar>["<NGreen>celular</NGreen>"]; <br><br>

        $<NVar>solicitud</NVar> = <NGreen>"<NOrg>INSERT INTO</NOrg> datos (Nombre, Apellido, Edad, Celular) 
          <NOrg>VALUES</NOrg>('<NAqua>$</NAqua><NVar>nombre</NVar>', '<NAqua>$</NAqua><NVar>apellido</NVar>', '<NAqua>$</NAqua><NVar>edad</NVar>', '<NAqua>$</NAqua><NVar>celular</NVar>')</NGreen>"; <br><br>

        $<NVar>resultado</NVar> = <NBlue>mysqli_query</NBlue>($<NVar>conexion</NVar>, $<NVar>solicitud</NVar>);
      </div>
    </fieldset>

    <fieldset> <!-- Consultar una tabla -->
      <legend> Consultar y modificar una tabla (DML) </legend>
      <a href="Php/dos.php">ir a la consulta.</a>
      <div class="cod">
        include("<NGreen>Conexion.php</NGreen>"); <br><br>

        $<NVar>solicitud</NVar> = "<NOrg>SELECT</NOrg> * <NOrg>FROM</NOrg> <NGreen>datos</NGreen>"; <NGray>// Solicitar datos.</NGray> <br>
        $<NVar>resultado</NVar> = <NBlue>mysqli_query</NBlue>($<NVar>conexion</NVar>, $<NVar>solicitud</NVar>); <NGray>// resultados de los datos en una variable.</NGray> <br><br>

        while($<NVar>fila</NVar> = <NBlue>mysqli_fetch_array</NBlue>($<NVar>resultado</NVar>)){ <br>
          &nbsp; <NBlue>echo</NBlue> $<NVar>fila</NVar>["<NGreen>Nombre</NGreen>"].", "; <br>
        }
        <hr>
        $<NVar>solicitud</NVar> = "<NGreen>
          <NOrg>UPDATE</NOrg> datos <NOrg>SET</NOrg> Nombre='<NAqua>$</NAqua><NVar>nombre</NVar>', Apellido='<NAqua>$</NAqua><NVar>apellido</NVar>' <NOrg>WHERE</NOrg> id=</NGreen>$<NVar>id</NVar>"; <br>
        $<NVar>resultado</NVar> = <NBlue>mysqli_query</NBlue>($<NVar>conexion</NVar>, $<NVar>solicitud</NVar>); <NGray>// resultados de los datos en una variable.</NGray> <br><br>
      </div>
    </fieldset>

    <fieldset> <!-- Eliminar un registro -->
      <legend> Eliminar un registro/record (DML) </legend>
      <a href="Php/dos.php">ir a la consulta.</a>
      <div class="cod">
        &lt;<NRed>a</NRed> <NPurp>href=</NPurp>"<NGreen>php.php?id='1'</NGreen>"><NVar>Eliminar</NVar>&lt;/<NRed>a</NRed>> <hr>
        <!-- &lt;?php <br> -->
        include("<NGreen>Conexion.php</NGreen>"); <br><br>
        $<NVar>id</NVar> = $<NVar>_GET</NVar>["<NGreen>id</NGreen>"]; <br>
        $<NVar>solicitud</NVar> = "<NOrg>DELETE FROM</NOrg> <NGreen>datos <NOrg>WHERE</NOrg> ID</NGreen>=$<NVar>id</NVar>";<br>
        $<NVar>resultado</NVar> = <NBlue>mysqli_query</NBlue>($<NVar>conexion</NVar>, $<NVar>solicitud</NVar>);
      </div>
    </fieldset>
  </section>
  
  <br><br><br><br><br>
  
  <script type="text/javascript" src="../index.js"></script>

</body>
</html>

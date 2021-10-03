document.write("Inicio de JavaScript.js");



// Imprimir En Web:         document.write("");
document.write("<h4>Hello World!</h4> <hr>");

// Imprimir En Consola:     console.log("");
console.log("Hello from console!");

// Recargar pag x milisegundos
// setTimeout("location.reload(true);", 4000);


// Variables (Respetar Mayusc, Empezar por: "a-z" , "_" , "$" )

  // Tipos de Variables
    // var int = 5;
    // var price = 5.5;
    // var string = "texto con espacio";
    // var boolean = true;
  // 

  // String con Comillas dentro
  var sayHello = 'Hello world! <br> I\'m a JavaScript programmer. <br><hr>';
  document.write(sayHello);
  /* otros:
    \'  = 1 comilla.
    \'' = 2 comillas.
    \\  = backslash.
    \n  = linea nueva.
    \r  = carriage return.
    \t  = tab.
    \b  = backspace.
    \f  = form feed.
  */
//  



// Condicional
  // Syntax
    // variable = (condition) ? True: False; 
  var age = 42;
  var isAdult = (age < 18) ? "Joven": "Viejo";
  document.write(isAdult + "<br><hr>");

  if(age < 18)
  {
    document.write("Menor <br><hr>");
  }
  else if(age == 18)
  {
    document.write("18 <br><hr>");
  }
  else
  {
    document.write("Mayor <br><hr>");
  }
// 

// switch
  var day = 2;
  switch (day) {
    case 1:
      document.write("Monday <br><hr>");
      break;
    case 2:
      document.write("Tuesday <br><hr>");
      break;
    case 3:
      document.write("Wednesday <br><hr>");
      break;
    default:
      document.write("Another day <br><hr>");
  }
// 




/////////////////////
//     BUCLES      //
/////////////////////

  // For
    for (f=1; f<=5; f++) {
      document.write(f + ", ");
    }
    document.write("<hr>");
    
    var o = 0;
    for (; o < 10; ) {
      document.write(o + ", ");
      o++;
    }
    document.write("<hr>");
    
    // Mas de un valor
    for (r=1, text="a"; r<=5; r++) {
      document.write(r + text + ", ");
    }
    document.write("<hr>");

    // For In
    let objsV = {a:1, b:2, c:3};
    for (let v in objsV) {
      document.write(v);
    }

    // For On
    let objsV2 = ["xL", "y", "z"];
    for (let v in objsV2) {
      document.write(v);
    }
  // 

  // While
    var w =0;
    while (w<=10) {
      document.write(w + ", ");
      w++;
    }
    document.write("<hr>");
  // 

  // Do-While
    var d =20;
    do {  
      document.write(d + ", ");
      d++;  
    }
    while (d<=25);
    document.write("<hr>");
  // 

  // Break (terminar bucle)
    for (b = 0; b <= 10; b++) {
      if (b == 5) {
          break; 
      }
      document.write(b + ", ");
    }
    document.write("<hr>");
  // 

  // Continue (saltarse un valor)
    for (c = 0; c <= 10; c++) {
      if (c == 5) {
          continue;
      }
      document.write(c + ", ");
    }
    document.write("<hr>");
  // 
// 




//////////////////
//   FUNCIONES  //
//////////////////


  // Funcion
    function NombreDeLaFuncion() {
      // ...
      document.write("Func <br><hr>");
    }
    NombreDeLaFuncion();
  // 

  // Func con parametros
    function NameFunc(param1, param2, param3) {
      // ...
      document.write(param1 + param2 + param3 + "<br> <hr>");
    }
    NameFunc(1, true, "xd");
  // 

  // Return
    function myFunction(a, b) {
      return a * b;
    }
    var ret = myFunction(5, 6); 
    document.write(ret);
    // 
    function addNumbers(a, b) {
      var resC = a+b;
      return resC;
    }
    document.write( addNumbers(40, 2) );
    document.write("<hr>");
  // 


  // Alert, Promnt(Input), Confirm.

    // Alerta de pagina
    // alert("alerta\n Ok");

    // Entrada del Usuario
    // var user = prompt("Please enter your name");
    // alert(user);

    // Confirm  
    // var result = confirm("Do you really want to leave this page?");
    // if (result == true) {
    //     alert("Thanks for visiting");
    // }
    // else {
    //     alert("Thanks for staying with us");
    // }
  //
//

////////////////
//   Objeto   //
////////////////

  // Obj
    var person = 
    { 
      name: "John",
      age: 31, 
      favColor: "green", 
      height: 183 
    };

    var edad = person.age;
    var nombre = person["name"];

    document.write("edad: " + edad + "<hr>");
  // 



  // Tipo de Objeto - contructor de objeto
    function persona(name, age, color) {
      this.name = name;
      this.age = age;
      this.favColor = color;
    }
  // 

  // Objetos del tipo "person"
    var p1 = new persona("John", 42, "green");
    var p2 = new persona("Amy", 21, "red");
  // 

  // sintaxis de puntos (dot syntax) - Nombre.Propiedad()
    document.write(p1.age + "<br>");
    document.write(p2.name + "<hr>");
  //

  
  // object method
    methodName = function() 
    { 
      /* code lines */ 
      document.write("mothodName() <br> <hr>");
    }
    methodName();


    function person1(name, age) 
    {
      this.name = name;  
      this.age = age;
      this.changeName = function (name) {
          this.name = name;
      }
    }

    var per1 = new person1("David", 21);
    per1.changeName("John");

    document.write(per1.name + "<hr>");
  // 

  // otro ejemplo
    function person2(name, age) {
      this.name= name;  
      this.age = age;
      this.yearOfBirth = bornYear;
    }
    function bornYear() {
      return 2016 - this.age;
    }

    var per2 = new person2("A", 22);

    document.write(per2.yearOfBirth() + "<hr>");
  //
//













//////////////////
//   Core Objs  //
//////////////////

  // Arrays

    var courses = new Array("HTML", "CSS", "JS");
    var courses1 = ["HTML", "CSS", "JS"];

    var course = courses[0]; // HTML
    courses[10]; // Undefined (fuera del array)
    courses[1] = "C++"; //Changes the second element 

    
    // ó crear un array con una cantidad sin definir, y luego definirlas
    var courses2 = new Array(3);
    courses2[0] = "HTML";
    courses2[1] = "CSS";
    courses2[2] = "JS";

    // ó crear un array sin definir la cantidad y luego agregar las necesarias
    var courses3 = new Array();
    courses3[0] = "HTML";
    courses3[1] = "CSS";
    courses3[2] = "JS";
    courses3[3] = "C++";


    // Combinar Arrays "concat()"
    var c1 = ["HTML", "CSS"];
    var c2 = ["JS", "C++"];
    var courses4 = c1.concat(c2);
    
    document.write( "courses[2]: " + courses4[2] + "<hr>");


    // Arrays asociativas
    var person3 = []; //empty array
    person3["name"] = "John";
    person3["age"] = 46;
    document.write(person3["age"] + "<hr>"); // 46
  // 





  // Math Object

    /*
      E = Euler´s constant
      LN2 = Natural log of the value 2
      LN10 = Natural log of the value 10
      LOG2E = The base 2 log of Euler´s constant (E)
      LOG210E = The base 10 log of Euler´s constant (E)
      PI = returns the constant PI
    */
    document.write( Math.PI );

    /*
      Method  -	 Description

      abs(x)	  Returns the absolute value of x
      acos(x)	  Returns the arccosine of x, in radians
      acosh(x)	Returns the hyperbolic arccosine of x
      asin(x)	  Returns the arcsine of x, in radians
      asinh(x)	Returns the hyperbolic arcsine of x
      atan(x)	  Returns the arctangent of x as a numeric value between -PI/2 and PI/2 radians
      atan2(y, x)	Returns the arctangent of the quotient of its arguments
      atanh(x)	Returns the hyperbolic arctangent of x
      cbrt(x)  	Returns the cubic root of x
      ceil(x) 	Returns x, rounded upwards to the nearest integer
      cos(x)	  Returns the cosine of x (x is in radians)
      cosh(x) 	Returns the hyperbolic cosine of x
      exp(x)  	Returns the value of Ex
      floor(x)	Returns x, rounded downwards to the nearest integer
      log(x)  	Returns the natural logarithm (base E) of x
      max(x, y, z, ..., n)	Returns the number with the highest value
      min(x, y, z, ..., n)	Returns the number with the lowest value
      pow(x, y)	Returns the value of x to the power of y
      random()	Returns a random number between 0 and 1
      round(x)	Rounds x to the nearest integer
      sign(x) 	Returns if x is negative, null or positive (-1, 0, 1)
      sin(x)  	Returns the sine of x (x is in radians)
      sinh(x) 	Returns the hyperbolic sine of x
      sqrt(x) 	Returns the square root of x
      tan(x)  	Returns the tangent of an angle
      tanh(x)	  Returns the hyperbolic tangent of a number
      trunc(x)	Returns the integer part of a number (x)
    */


  // Entrada del usuario mediante "Alerta" 
    /*
      var n = prompt("Enter a number", "");
      var answer = Math.sqrt(n);
      alert("The square root of " + n + " is " + answer);
    */
  // 

  // Invocar en ... milisegundos. (1000 ms = 1 segundo)
    function myAlert() {
      alert("Hi");
    }
    // setInterval(myAlert, 3000);
  // 

  // Fecha actual
    var fechaactual = new Date(); //d stores the current date and time
    document.write(fechaactual + "<hr>");

  // Crear Fecha
    /*
      Las fechas de JS se calculan en milisegundos,
      desde el 01 de enero de 1970 a las 00:00:00 hora universal (UTC). 
      JS cuenta los meses de 0(Enero) a 11(dic).
      -Un día contiene 86.400.000 milisegundos.
    */

    // new Date(milliseconds);
    // new Date(dateString);
    // new Date(year, month, day, hours, minutes, seconds, milliseconds);

    
    //Fri Jan 02 1970 00:00:00
    var d1 = new Date(86400000); 

    //Fri Jan 02 2015 10:42:00
    var d2 = new Date("January 2, 2015 10:42:00");

    //Sat Jun 11 1988 11:42:00
    var d3 = new Date(88,5,11,11,42,0,0);

    document.write("Crear fecha 1: " + d1 + "<hr>");
    document.write("Crear fecha 2: " + d2 + "<hr>");
    document.write("Crear fecha 3: " + d3 + "<hr>");
  // 

  // Métodos de fecha
    /*
      getFullYer()  = año.
      getMonth()    = mes.
      getDate()     = dia(num).
      getDay()      = dia(semana).
      getHours()    = hora.
      getMinutes()  = min.
      getSeconds()  = seg.
      getMilliseconds() = ms.

    */
    var datee = new Date();
    var hours = datee.getHours();
    
    document.write("hora: " + hours + "<hr>");
  // 

  // Imprimir Hora actual cada segundo
    /*
    function printTime() {
      var d = new Date();
      var hours = d.getHours();
      var mins = d.getMinutes();
      var secs = d.getSeconds();
      document.body.innerHTML = hours+":"+mins+":"+secs;
      // La propiedad "innerHTML" establece o devuelve el contenido HTML de un elemento, en este caso "body".
    }
    setInterval(printTime, 1000);
    */
  // 
// 


// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 
// 


/////////////////////
//  DOM y Eventos  //
/////////////////////

  // DOM = Document Object Model.
     

  // Seleccionar Elementos

    //finds element by id
    document.getElementById("idDelElemento") 

    //finds elements by class name
    document.getElementsByClassName("nombreDeLaClase") 

    //finds elements by tag name
    document.getElementsByTagName("tagDelElemento")

    
  // Modificanto elementos

    // element innerHTML
      // document.body.innerHTML = "Borrar todo lo del Body y poner este texto";
    

    // EJEMPLOS

      // id
      var elem = document.getElementById("demo"); // <div id="demo">...
      elem.innerHTML = "Hello World!";

      // Class
      var arr =  document.getElementsByClassName("demo"); // <div class="demo">...
      arr[0].innerHTML = "Hi";

      // Tag
      var arr = document.getElementsByTagName("p"); // <p> hi </p>, <p> hello </p>, <p> hi </p>.
      for (var x = 0; x < arr.length; x++) {
        arr[x].innerHTML = "Hi there"; // <p> Hi there </p>, <p> Hi there </p>, <p> Hi there </p>.
      }
    // 
  // 

  // Propiedades y metodos de los elementos del DOM

    /*
      element.childNodes:     returns an array of an element's child nodes.
      element.firstChild:     returns the first child node of an element.
      element.lastChild:      returns the last child node of an element.
      element.hasChildNodes:   returns true if an element has any child nodes, otherwise false.
      element.nextSibling:     returns the next node at the same tree level.
      element.previousSibling: returns the previous node at the same tree level.
      element.parentNode:      returns the parent node of an element.
    */


    // EJEMPLO
      /*
        <div id ="demo2">
          <p> some text </p>
          <p> some other text </p>
        </div>
      */
      function setText() {
        var a = document.getElementById("demo2");
        var arr = a.childNodes;
        for(var x=0;x<arr.length;x++) {
          arr[x].innerHTML = "new text";
        }
      }
      setTimeout(setText, 1000);
      
    //
  // 






  // Modificando Atributos

    /*
      <body>
        <img id="myimg" src="orange.png" alt="" />
      </body>
    */
    var el = document.getElementById("myimg");
    el.src = "/Imgs/Apple.png";



    // otro ej:.  
    /*
      <body>
        <a href="http://www.example.com">Some link</a>
      </body>
    */
    // ( window.onload: to make sure the HTML is loaded)
    window.onload = function(){
      var el = document.getElementsByTagName('a');
      el[0].href= 'http://www.sololearn.com';
    };
  //




  // Modificando Estilos

    // (usar con cuidado) background-color -> backgroundColor.

    /*
      <body>
        <div id="demo3" style="width:200px">some text</div>
      </body>
    */
    // ( window.onload: to make sure the HTML is loaded)
    window.onload = function() {
      var x = document.getElementById("demo3");
      x.style.color = '#6600FF';
      x.style.width = '100px';
    };
  // 





  // Creando Elementos

    // element.cloneNode() clones an element and returns the resulting node.
    // document.createElement(element) creates a new element node.
    // document.createTextNode(text) creates a new text node.

    // Systax
      // Crear texto (pero no está asignado)
        // var node = document.createTextNode("Some new text");

      // Asignar con
        // elemento.appendChild(newNode) // adds a new child node to an element as the last child node.
        // elemento.insertBefore(node1, node2) // inserts node1 as a child before node2.
    // 

    // Ej:.
    // Esto crea un nuevo párrafo y lo agrega al elemento div existente en la página.
    /*
      <body>
        <div id="demo4">some content</div>
      </body>
    */
    window.onload = function() {
      //creating a new paragraph
      var p = document.createElement("p");
      var node = document.createTextNode("Some new text");
      //adding the text to the paragraph
      p.appendChild(node);

      var div = document.getElementById("demo4");
      //adding the paragraph to the div
      div.appendChild(p);
    };
  // 



  // Borrando Elementos

    /*
      <body>
        <div id="demo5">
          <p id="p1">This is a paragraph.</p>
          <p id="p2">This is another paragraph.</p>
        </div>
      </body>
    */
    window.onload = function() {
        var parent = document.getElementById("demo5");
        var child = document.getElementById("p1");
        parent.removeChild(child);
    };
    /*
      An alternative way of achieving the same result would be the use of the parentNode property to get the parent of the element we want to remove:
      var child = document.getElementById("p1");
      child.parentNode.removeChild(child);
    */
  // 




    // Reemplazando Elementos
    /*
      <body>
        <div id="demo6">
          <p id="p1">This is a paragraph.</p>
          <p id="p2">This is another paragraph.</p>
        </div>
      </body>
    */
    window.onload = function() {
      var p001 = document.createElement("p");
      var node001 = document.createTextNode("This is new");
      p001.appendChild(node001);

      var parent001 = document.getElementById("demo6");
      var child001 = document.getElementById("p01");
      parent001.replaceChild(p001, child001);
    };

  // 






  // Creando Animaciones
    /*
      Our box element is inside a container element.
      Note the position attribute used for the elements:
      the container is relative and the box is absolute.
      This will allow us to create the animation relative to the container.
    */

    /*  
      <body>
        <div id="container">
          <div id="box"> </div>
        </div>
      </body>
    */
    /*
      #container {
        width: 200px;
        height: 200px;
        background: green;
        position: relative;
      }
      #box {
        width: 50px;
        height: 50px;
        background: red;
        position: absolute;
      }
    */
    // Syntax
      // var pos = 0;
      // var box = document.getElementById("box");

      // function move() {
      //   pos += 1;
      //   box.style.left = pos+"px"; //px = pixels
      // }
      // setInterval(move, 500);

    // Animacion

    window.onload = function() {
      var pos = 0; 
      var box = document.getElementById('box');
      var t = setInterval(move, 10);

      function move() {
        if(pos >= 150) {
          clearInterval(t);
        }
        else {
          pos += 1;
          box.style.left = pos+'px';
        }
      }
    };
  // 




  // Eventos  

    // Cuando un "evento" ocurre en un elemento, una funcion "handler" se ejecuta.
    /*
      Eventos=
        onclick:
        onload:
        onunload:
        onchange: <input>,<keygen>,<select>,<texarea>.
        onmouseover:
        onmouseout:
        onmousedown:
        onmouseup:
        onblur: al perder focus
        onfocus:
    */

    // Ejemplo.
    // <p onclick= "nombreDeUnaFuncion()"> some text </p>




    // Manejando Eventos (Handling Events)

      // Mostrar alerta al presinar un boton
      /*
        <body>
          <button onclick="show();">Click Me</button>
        </body>
      */
      function show() {
        alert("Hi there");
      }
      



      // Mostrar hora al apretar boton

        // <button id="demo7">Click Me</button>
        window.onload = function() {
          var x = document.getElementById('demo7');
          x.onclick = function () {
            document.body.innerHTML = Date();
          }
        };
      // 





    // Eventos  OnLoad & OnUnload


      // OnLoad desde html
      // <body onload="doSomething()"></body>
      function doSomething(){
      }
      
      // Onload desde js
      window.onload = function(){
      //esto se apricará luego de q la pag se cargue por completo.
      }

      // OnChange
      // <input type="text" id="name" onchange="change()">
      function change() {
        var x001 = document.getElementById('name001');
        x001.value = x001.value.toUpperCase();
      }
    // 







    // Event Listeners

      // Syntax
        // element.addEventListener(evento, funcion, useCapture(opcional));
      
        // El primer parámetro es el tipo de evento (como "clic" o "mousedown").
        // El segundo parámetro es la función a la que queremos llamar cuando se produce el evento.
        // El tercer parámetro es un valor booleano que especifica si se va a utilizar el burbujeo de eventos o la captura de eventos. Este parámetro es opcional y se describirá en la siguiente lección.
      // 

      // Ejemplo
        // element.addEventListener("click0", myFunction0);
        // element.addEventListener("mouseover0", myFunction0);

        // function myFunction0() {
        //   alert("Hello World!");
        // }

        // remover un evento
        // element.removeEventListener("mouseover0", myFunction0);
      // 



      // crear un evento Manipulador q se remueve luego de ejecutarse

        // After clicking the button, an alert with a random number displays and the event listener is removed.

        /*
          <body>
            <button id="demo8">Start</button>
          </body>
        */
        window.onload = function() {
          var btn = document.getElementById("demo8");
          btn.addEventListener("click01", myFunction01);

          function myFunction01() {
            alert(Math.random());
            btn.removeEventListener("click01", myFunction01);
          }
        };
      // 
    //



    // Propagación de eventos - bubbling & capturing

      // En q orden se ejecutan las funciones,
      // si hacemos click en un elemento,
      // q está dentro de otro elemento.

      
      // BUBBLING = desde adentro hacia afuera. (Por defecto = FALSE). - Baja por DOM.
        // elem1.addEventListener("click02", myFunction02, true); 

      // CAPTURING = desde afuera hacia adentro. (TRUE). - Sube por DOM
        // elem2.addEventListener("click02", myFunction02, false);

      // function myFunction02(){      }

    // 
  // 



  // Image Slider

    /*
      <div>
        <button onclick="prev()"> Prev </button>
        <img id="slider" src="http://www.sololearn.com/uploads/slider/1.jpg" width="200px" height="100px"/>
        <button onclick="next()"> Next </button>
      </div>

      <CSS>
        button {
          margin-top:30px;
          float:left;
          height:50px;
        }
        img {
          float:left;
          margin-right:10px;
          margin-left:10px;
        }
      <CSS>
    */

    var images = [
      "http://www.sololearn.com/uploads/slider/1.jpg", 
      "http://www.sololearn.com/uploads/slider/2.jpg", 
      "http://www.sololearn.com/uploads/slider/3.jpg"
    ];

    function next()
    {
      var slider = document.getElementById("slider");
      num++;
      if(num >= images.legth)
      {
        num = 0;
      }
      slider.src = images[num];
    }

    function prev()
    {
      var slider = document.getElementById("slider");
      num--;
      if (num < 0) {
        num = images[num];
      }
    }
  // 


  // Validación de formularios
    /*
      <form onsubmit="return validate()" method="post">
        Number: <input type="text" name="num1" id="num1" />
        <br />
        Repeat: <input type="text" name="num2" id="num2" />
        <br />
        <input type="submit" value="Submit" />
      </form>
    */

    function validate() {
      var n1 = document.getElementById('num1');
      var n2 = document.getElementById('num2');
      if(n1.value != '' && n2.value != '') {
        if(n1.value == n2.value) {
          return true;
        }
      }
      alert("The values should be equal and not blank");
      return false;
    }

  // 
// 















////////////////////
//  ECMAScript 6  //  (ES, ES5, ES6(add POO)) 
////////////////////  (no soporta en navs muy viejos)

  // var & let
    var aa = 10; // publica fuera del {}
    let bb = true;  //privada dentro del {}
    const cc = 'hello'; // privado y no se puede modificar
  // 

  // Literales de plantilla en ES6
    // antes 
    let nameLet = 'David';
    let msgLet = 'Welcome ' + nameLet + '!';
    console.log(msgLet);

    // Ahora
    let nameLet2 = 'David';
    let msgLet2 = `Welcome ${nameLet2}!`;
    console.log(msgLet2);
  // 

  // For
    // For In
    let objsV01 = {a:1, b:2, c:3};
    for (let v in objsV01) {
      // document.write(v);
    }

    // For On
    let objsV02 = ["xL", "y", "z"];
    for (let v of objsV02) {
      // document.write(v);
    }
  // 



  // Funciones
    // Antes
    function add(x, y) {
      var sum = x+y;
      document.write(sum);
    }
    
    // Ahora
    const add0 = (x, y) => {
      let sum = x+y;
      document.write(sum);
    }

    // Funcion simple con 1 argumento
    const saludar = x => "Bienvenido " + x;

    document.write(saludar("Nico") + "<hr>");  // Bienvenido Nico

    // Funcion simple sin argumento
    const x0 = () => document.write("Hola");
  // 




  // Bucles
    // ForEach (recorrer Arrays)

    // Antes
    var arrFE = [2,3,7,8];

    arrFE.forEach(function(el) {
      document.write(el * 2);
    });
    document.write("<hr>");
    
    // Ahora
    const arrFE2 = [2,3,7,8];

    arrFE2.forEach(v => {
      document.write(v * 2);
    });
    document.write("<hr>");
  // 

  // Parametros predeterminados
    // Antes
    function testES6(a, b=3, c=42){
      return a + b + c;
    }
    document.write(testES6(5)); // 50
    document.write("<hr>");

    // Ahora
    const test = (a, b = 3, c = 42) => {
      return a + b + c;
    }
    console.log(test(5)); //50 
    // 

  // Objetos
    //Ej 1 
    let tree = {
      height: 10,
      color: 'green',
      grow() { 
        this.height += 2;
      }
    };

    tree.grow();
    console.log(tree.height); // 12

    // Ej 2
    let height = 5;
    let health = 100;

    let athlete = {
        height, // height: height,
        health // health: health
    };

    console.log(athlete.height); // 5

    // Ej 3
    var a = {x: 1, x: 2, x: 3, x: 4};
    console.log(a.x); // 4
  // 

  // Nombre de propiedad calculados
    // Ej.1
    let prop = 'name';
    let id = '1234';
    let mobile = '08923';

    let user = {
      [prop]: 'Jack',
      [`user_${id}`]: `${mobile}`
    };

    // Ej.2
    var i = 0;
    var a = {
      ['foo' + ++i]: i,
      ['foo' + ++i]: i,
      ['foo' + ++i]: i
    };

    // Ej. 3
    var param = 'size';
    var config = {
        [param]: 12,
        ['mobile' + param.charAt(0).toUpperCase() + param.slice(1)]: 4
    };
  // 

  // Object.assign()
    let person00 = {
      name: 'Jack',
      age: 18,
      sex: 'male'
    };
    let student00 = {
        name: 'Bob',
        age: 20,
        xp: '2'
    };

    let newStudent = Object.assign({}, person00, student00);

    // console.log(newStudent.name); // Bob
    // console.log(newStudent.age); // 20
    // console.log(newStudent.sex); // male
    // console.log(newStudent.xp); // 2

    // 
    let person01 = {
      name: 'Jack',
      age: 18
    };

    let newPerson01 = person01;
    newPerson01.name = 'Bob';

    // console.log(person.name); // Bob
    // console.log(newPerson.name); // Bob

    // 
    let person02 = {
      name: 'Jack',
      age: 18
    };

    let newPerson02 = Object.assign({}, person02);
    newPerson02.name = 'Bob';

    // console.log(person.name); // Jack
    // console.log(newPerson.name); // Bob

    // 
    let person03 = {
      name: 'Jack',
      age: 18
    };

    let newPerson03 = Object.assign({}, person03, {name: 'Bob'});

    // console.log(newPerson.name); // Bob
  // 




  // >>> Destructurar Arrays <<< //
    // Ej 1
      let arrDes = ['1', '2', '3'];

      let [one, two, three] = arrDes;
      
      // console.log(one); // 1
      // console.log(two); // 2
      // console.log(three); // 3
    
    // Ej 2
      let aDes = () => {
        return [1, 3, 2];
      };
      
      [one, ,two] = aDes();
      
      // console.log(one); // 1
      // console.log(two); // 2

    // Ej 3
      let _a, _b, _c = 4, _d = 8;

      [_a, _b = 6] = [2]; // a=2, b=6.
      // console.log(a); // 2
      // console.log(b); // 6

      [_c, _d] = [_d, _c]; // c=8, d=4.
      // console.log(c); // 8
      // console.log(d); // 4
  // 



  // Destructurar Objetos
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

    // 
  // 

  // Parámetros de descanso
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
    console.log(containsAll(x, 2, 4, 7));
    console.log(containsAll(x, 6, 4, 9));

    // 
    function containsAll(arr, ...nums) {
      for (let num of nums) {
        if (arr.indexOf(num) === -1) {
            return false;
        }
      }
      return true;
    }
    
    let x1_ = [2, 4, 6, 7];
    console.log(containsAll(x, 2, 4, 7));
    console.log(containsAll(x, 6, 4, 9));
  // 

  // The Spread Operator
    // https://www.sololearn.com/learning/1024/2978/6475/1
  // 

  // Clases en ES6
    // constructor - (al iniciar)
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

      // Clase nombrada
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
    
      // Clase no nombrada
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

      // Metodo/Func
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
      
      // Herencia 
      // 
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
    // 
  
    // MAP (obj)
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
    // 

    // PROMISES (por tiempo)
      // Antes js
      setTimeout(function() {
        console.log("Work 1");
        setTimeout(function() {
            console.log("Work 2");
        }, 1000);
      }, 1000);
      console.log("End");

      // Ahora ES6
      new Promise(function(resolve, reject) {
        // Work
        if (success)
            resolve(result);
        else
            reject(Error("failure"));
      }); 

    // Iteradores y Generadores
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








document.write("Final de JavaScript.js");
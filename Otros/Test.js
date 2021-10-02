document.write("JavaScript <br>");



var a = document.getElementById("xd");
a.innerHTML = "asd";







/////////////////////
//  DOM y Eventos  //
/////////////////////

  // DOM = Document Object Model.
     

  // Seleccionar Elementos

    //finds element by id
    document.getElementById("idDelElemento") // <elem id="idDelElemento">

    //finds elements by class name
    document.getElementsByClassName("nombreDeLaClase") 

    //finds elements by tag name
    document.getElementsByTagName("tagDelElemento")

    
    // Modificanto elementos

      // document.body.innerHTML = "Some text";
      // element.innerHTML (modificar el contenido)

      // EJEMPLOS

        // id 
        var elem = document.getElementById("demo"); // <div id="demo">...
        elem.innerHTML = "Hello World!";

        // Class (encuentra todos los elementos por nombre clase y retorna en array)
        var arr = document.getElementsByClassName("demo"); // <div class="demo">...
        arr[0].innerHTML = "Hi";

        // Tag
        var arr2 = document.getElementsByTagName("p"); // <p> hi </p>, <p> hello </p>, <p> hi </p>.
        for (var x = 0; x < arr2.length; x++) {
          arr2[x].innerHTML = "Hi there"; // <p> Hi there </p>, <p> Hi there </p>, <p> Hi there </p>.
        }
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
          <div id ="demo">
            <p> some text </p>
            <p> some other text </p>
          </div>
        */
        // function setText() {
        //   var a = document.getElementById("demo");
        //   var arr3 = a.childNodes;
        //   for(var x=0;x<arr3.length;x++) {
        //     arr3[x].innerHTML = "new text";
        //   }
        // }
      // 
    //
  // 




  document.write("holaaa");

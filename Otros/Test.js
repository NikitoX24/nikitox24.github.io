document.write("Inicio de JavaScript. <br>");


var a = document.getElementById("xd");
a.innerHTML = "ASD";





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

// document.body.innerHTML = "Some text";

// var millisec = new Date(milliseconds);
// var datestr = new Date(dateString);
// var dattte = new Date(year, month, day, hours, minutes, seconds, milliseconds);


// EJEMPLO
  /*
    <div id ="demo1">
      <h6> some text </h6>
      <h6> some other text </h6>
    </div>
  */
  function setText() {
    var a = document.getElementById("demo1");
    var arr3 = a.childNodes;
    for(var x=0;x<arr3.length;x++) {
      arr3[x].innerHTML = "new text";
    }
  }
  setText();
// 


document.write("Final de JavaScript.");
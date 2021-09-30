document.write("Hello! - Desde JavaScript <hr>");


function Hora()
{
  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes();
  var s = d.getSeconds();
  document.write("hora: " + h+":"+m+":"+s+ "<hr>");
}

Hora();
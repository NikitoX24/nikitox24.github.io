function printTime() {
  var d = new Date();
  var hours = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  var horaPS = document.getElementById("HoraPS");
  horaPS.innerHTML = "Hora: " + hours+":"+mins+":"+secs;
}
setInterval(printTime, 1000);


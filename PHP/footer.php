
<!-- Hora -->
<div id="HoraPS" class="centred">Hora: 00:00:00</div>
<script>
  printTime();
  function printTime() {
    var d = new Date();
    var hours = d.getHours();
    var mins = d.getMinutes();
    var secs = d.getSeconds();
    if(secs < 10) { secs = "0"+secs }
    if(mins < 10) { mins = "0"+mins }
    var horaPS = document.getElementById("HoraPS");
    horaPS.innerHTML = "Hora: " + hours+":"+mins+":"+secs;
  }
  setInterval(printTime, 1000);
</script>

<!-- Footer -->
<footer>
  <div class="copyright"> © 2022 My Blog. All rights reserved. </div>
</footer>

<!-- JavaScript -->
<script src="../index.js"></script>

</body>
</html>
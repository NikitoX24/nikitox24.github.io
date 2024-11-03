export default function Footer() {
  printTime();
  function printTime() {
    let d = new Date();
    let hours = d.getHours();
    let mins = String(d.getMinutes()).padStart(2, "0");
    let secs = String(d.getSeconds()).padStart(2, "0");
    var horaPS = document.getElementById("HoraPS");
    horaPS.innerHTML = `Hora: ${hours}:${mins}:${secs}`;
  }
  setInterval(printTime, 1000);
}

export let footer = (/*html*/`<footer>
    <div id="HoraPS" class="centred">Hora: 00:00:00</div>
    <div id="copyright">© 2022 My Blog. All rights reserved.</div>
  </footer>
`);
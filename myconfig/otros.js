export default function otros(){
  let TextoFix = document.querySelector("#textoFix");
  let Section = document.querySelectorAll("section");
  const GoUp = document.getElementById("up");

  // Go Up
  GoUp?.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });

  // section hover - textoFix
  Section?.forEach(elem => {
    elem.addEventListener("mouseenter", () => {
      TextoFix.innerHTML = elem.id;
    });
  })

  // section name
  Section?.forEach ( elem => {
    let h1 = document.createElement("h1"); // Crear un h1.
    let text = document.createTextNode(elem.id); // Crear el Texto.
    h1.appendChild(text); // Agregar el text al párrafo.
    elem.insertBefore(h1, elem.firstChild); // Agregar el h1 a Section.
  })

  // <NTab> (espacio) cambiar los nbsp
  document.querySelectorAll("NTab").forEach  (elem => elem.innerHTML = "&nbsp; ".repeat(2));
  document.querySelectorAll("NTab2").forEach (elem => elem.innerHTML = "&nbsp; ".repeat(4));
}

// HoraPS
export function horaPS() {
  printTime();
  function printTime() {
    let d = new Date();
    let hours = d.getHours();
    let mins = String(d.getMinutes()).padStart(2, "0");
    let secs = String(d.getSeconds()).padStart(2, "0");
    const horaPS = document.getElementById("HoraPS");
    horaPS.innerHTML = `Hora: ${hours}:${mins}:${secs}`;
  }
  setInterval(printTime, 1000);
}

export const textoFix = /*html*/`
  <p id="textoFix">${titulo}</p>
  <a id="up"> &#9650; </a>
`;


export let footer = (/*html*/`
  <footer>
    <div id="HoraPS" class="centred">Hora: 00:00:00</div>
    <!-- <div id="copyright">© 2022 My Blog. All rights reserved.</div> -->
  </footer>
  <style>
    /* GO UP */
    #up{
      font-size: 3em;
      color: black;
      position: fixed;
      cursor: pointer;
      bottom: 20px;
      right: 10px;
      text-decoration: none;
      filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.7));
      transition: all 200ms;
    }
    #up:hover{
      font-size: 4em;
      filter: drop-shadow(0 0 5px black);
    }

    /* copyright */
    #copyright {
      font-size: 8pt;
      text-align: right;
      padding-bottom: 10px;
      color: grey;
      bottom: 1px;
      right: 10px;
    }
    
    /* HoraPS */
    #HoraPS{
      font-size: 1.5em;
      font-weight: 900;
      position: fixed;
      bottom: 0;
      left: 5px;
    }
    
    /* TextoFix */
    #textoFix{
      margin: 0;
      right: 0;
      bottom: 0;
      font-size: 1em;
      position: fixed;
      font-family: Arial;
      background-color: rgba(66, 66, 66, 0.5);
      padding: 5px;
      border-radius: 5px;
      border: 1px solid black;
    }
  </style>
`);
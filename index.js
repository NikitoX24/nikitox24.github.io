class Menu extends HTMLElement {
  constructor() {
    super();
    this.innerHTML =/*html*/`
    <div>
      <nav><ul>
        <li><a href="../index.html"> <img src="../logo.png" height="25px"></a></li>
        <li><a href="https://nikitox24.github.io/Main/"> INICIO(GitHub) </a></li>
        <li><a href="https://github.com/NikitoX24/Main"> GITHUB </a></li>
        <li><a href="https://github.com/NikitoX24?tab=repositories"> REPOSITORIOS </a></li>
        <li><a href=#> (arriba) </a></li>
      </ul></nav>
    </div>
    <style>
      nav {
        padding: 7px 0;
        min-width: 100%;
        position: fixed;
        top: -23px;
        z-index: 1;
      }
      nav ul {
        background: linear-gradient(90deg, 
          rgba(255, 255, 255, 0.5) 0%,
          rgba(255, 255, 255, 0.8) 25%, 
          rgba(255, 255, 255, 0.8) 75%, 
          rgba(255, 255, 255, 0.5) 100%);
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.1),
        inset 0 0 1px rgba(255, 255, 255, 0.6);
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      nav ul li {
        display: inline-block;
      }
      nav ul li a {
        padding: 7px;
        color: #000000;
        font-size: 18px;
        font-family: Arial;
        text-decoration: none;
        display: block;
      }
      li a:hover{
        color: red;
        transform: scale(1.1);
      }
    </style>
    `
  }
}
customElements.define("menu-component", Menu);

// #region (Mostrar Seccion (hover) y h1 )
let textoFix = document.querySelector("#textoFix");
let Section = document.querySelectorAll("section");

for (let i = 0; i < Section.length; i++) {
  Section[i].addEventListener("mouseenter", function() {
    textoFix.innerHTML = Section[i].id;
  });
}

window.onload = function(){
  for (let i = 0; i < Section.length; i++) {
    let h1 = document.createElement("h1"); // Crear un parrafo.
    let text = document.createTextNode(Section[i].id); // Crear el Texto.
    h1.appendChild(text); // Agregar el text al parrafo.
    Section[i].insertBefore(h1, Section[i].firstChild); // Agregar el h1 a Section.
  };
}
//#endregion

// <NTab> (espacio) TODO: cambiar los nbsp
let tabs = document.querySelectorAll("NTab");
for (let i = 0; i < tabs.length; i++) {
  tabs[i].innerHTML = "&nbsp; &nbsp;";
}
let tabs2 = document.querySelectorAll("NTab2");
for (let i = 0; i < tabs2.length; i++) {
  tabs2[i].innerHTML = "&nbsp; &nbsp; &nbsp; &nbsp;";
}
import navbar_module from "./navbar.js";
import cheats_module from "./cheats.js";
import otros_module, {textoFix, footer, horaPS} from "./otros.js";
import index_module from "./index.js";



const navDiv = document.querySelector(".navBar");
if (navDiv) navDiv.innerHTML += navbar_module;

const cheatDiv = document.querySelector(".cheats");
if (cheatDiv) cheatDiv.innerHTML += cheats_module();

const footerDiv = document.querySelector(".footer");
if (footerDiv){
  footerDiv.innerHTML += footer;
  horaPS();
}

let otrosDiv = document.querySelector(".otros");
if (otrosDiv){
  otrosDiv.innerHTML += textoFix;
  otros_module();
}


const tituloIcon = document.querySelectorAll(".TituloIcon");
if (tituloIcon) index_module();

var minombree= "nico"
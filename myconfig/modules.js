// import styles_module from "./STYLES.js";
import navbar_module from "./navbar.js";
import cheats_module from "./cheats.js";
import otros_module, {textoFix} from "./otros.js";
import footer_module, {footer} from "./footer.js";

// document.querySelector(".stylesModule").innerHTML = styles_module();
document.querySelector(".navBar").innerHTML += navbar_module();
document.querySelector(".cheats").innerHTML += cheats_module();

let footerDiv = document.querySelector(".footer").innerHTML += footer;
if (footerDiv) footer_module();

let otrosDiv = document.querySelector(".otros").innerHTML += textoFix;
if (otrosDiv) otros_module();
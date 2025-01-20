// User Settings
let blackTeme = true;

//  /   (raiz)
//  ./  (aqui) 
//  ../ (atras) 

// Dir / Carpetas
const server_dir = "/"; // "http://myserver/"; 
const index = server_dir;
const logo = server_dir + "logo.png";
const imgs_dir = server_dir + "Imgs/";
const cheat_dir = server_dir + "machetes/";
const otros_dir = server_dir + "Otros/";

// Logos
const logo_25px = '<img src="' + server_dir + 'logo.png" height="20px">';
const git_logo  = '<img src="' + imgs_dir   + 'github-logo.png" height="15px">';

// Titulos
var titulo;
const t_index = "Index";
const t_html =  "HTML";
const t_css =   "CSS";
const t_js =    "JavaScript";
const t_php =   "PHP";
const t_bs =    "BootStrap";

// nombre de archivos
const index_fname = "index.html";
const html_fname = "html.html";
const css_fname = "css.html";
const js_fname = "js.html";
const php_fname = "php.html";
const bootstrap_fname = "bootstrap.html";

// CheatSheets
const html_dir = cheat_dir + html_fname;
const css_dir =  cheat_dir + css_fname;
const js_dir =   cheat_dir + js_fname;
const php_dir =  cheat_dir + php_fname;
const bs_dir =   cheat_dir + bootstrap_fname;



// OnClick de Cheats.js (iconos cheats)
function loadHTML() { window.location.href = html_dir }
function loadCSS()  { window.location.href = css_dir }
function loadJS()   { window.location.href = js_dir }
function loadPHP()  { window.location.href = php_dir }
function loadBS()   { window.location.href = bs_dir }

// OnClick de Index
function loadTest()       { window.location.href = "test.html" }
function loadTestJson()   { window.location.href = otros_dir + "testJson/test.html" }
function loadCuentasPHP() { window.location.href = otros_dir + "CuentasPHP/index.php" }
function loadCuentas()    { window.location.href = otros_dir + "CuentasJS/index.html" }
function loadConvert()    { window.location.href = otros_dir + "ConvertirTexto.html" }
function loadVText()      { window.location.href = otros_dir + "VideoText.html" }
function loadMC()         { window.location.href = otros_dir + "MC.html" }

function loadAhorcado()   { window.location.href = otros_dir + "Ejercicios/Ahorcado.html" }
function loadTateti()     { window.location.href = otros_dir + "Ejercicios/TaTeTi.html" }









// obtener el nombre del archivo
function getFileName() {
  let titulo = document.URL;
  const i = titulo.lastIndexOf("/");
  titulo = titulo.slice(i+1);

  switch ( titulo ) {
    case index_fname:
    case "":
     return t_index;
    case html_fname:
     return t_html;
    case css_fname:
      return t_css;
    case js_fname:
      return t_js;
    case php_fname:
      return t_php;
    
    default:
      return "Título";
   }
}
// Cambiar el icono de la pag
+function changeFavicon() {
  let link = document.querySelector("link[rel~='icon']");
  if (!link) {
    link = document.createElement('link');
    link.rel = 'icon';
    document.head.appendChild(link);
  }
  link.href = logo; // url logo.png
}();

titulo = getFileName();
document.title = titulo; // (Cambiar Titulo pag)






// blackTeme = false;



// COLORES
let background_color;
let back_color = "rgba(255, 255, 255, 0.5)"; // div
let shadow1 = "rgba(255, 255, 255, 0.8)"; // legend
let shadow2 = "rgba(255, 255, 255, 0.3)"; // sombra
let linkColor = "#FFF";
let fontColor;

background_color ? blackTeme = "rgb(24, 57, 43)" : "beige";

if (titulo == t_html){
  if (blackTeme) {
    background_color = "rgb(57, 33, 24)";
    back_color = "rgba(200, 50, 50, 0.1)";
    shadow1 = "rgb(185, 60, 20)";
    shadow2 = "rgba(120, 60, 0, 0.2)";
    linkColor = "#AAF";
  }
  else{
    back_color = "rgba(255, 123, 0, 0.1)";
    shadow1 = "rgba(141, 0, 0, 0.161)";
    shadow2 = "rgba(255, 119, 0, 0.1)";
    linkColor = "#F00";
  }
}
else if (titulo == t_css || titulo == t_php){
  if (blackTeme) {
    background_color = "rgb(24, 30, 57)";
    back_color = "rgba(0, 0, 255, .05)";
    shadow1 = "rgb(27, 70, 125)";
    shadow2 = "rgba(20, 20, 255, 0.1)";
    linkColor = "#00F";
  }
  else{
    back_color = "rgba(0, 0, 255, .05)";
    shadow1 = "rgba(0, 119, 255, 0.164)";
    shadow2 = "rgba(0, 0, 255, 0.1)";
    linkColor = "#00F";
  }
}
else{ // (titulo == t_js || titulo == t_index)
  if (blackTeme) {
    background_color = "rgb(24, 57, 43)";
    back_color = "rgba(0, 255, 0, .02)";
    shadow1 = "rgba(27, 125, 80, 1)";
    shadow2 = "rgba(0, 255, 38, 0.1)";
    linkColor = "#0F0";
  }else{
    back_color = "rgba(0, 255, 0, 0)";
    shadow1 = "rgba(0, 159, 0, 0.4)";
    shadow2 = "rgba(0, 255, 38, 0.1)";
    linkColor = "#FFF";
  }
}





document.write(/*html*/`
  <style>
    section {
      background-color: ${back_color};
      box-shadow: inset 0 40px 0 0 ${shadow1}, 4px 4px 15px 5px ${shadow2};
    }
    @media screen and (max-width: 767px){
      section { box-shadow: inset 0 27px 0 0 ${shadow1} !important; }
    }
  </style>
`);

// TEMA OSCURO
if (blackTeme) {
  fontColor = "rgb(210, 210, 210)";
  const codBackground = "rgb(15, 15, 27)";
  
  document.write(/*html*/`
    <style>
      body{
        background-color: ${background_color};
        color: ${fontColor};
      }
      .cod{
        background-color: ${codBackground};
        text-shadow: none;
        color: ${fontColor};
      }
      summary { color: ${linkColor}; }
      .boxder{ 
        background-color: ${codBackground};
        color: ${fontColor};
      }
      
      NVar  { color: ${fontColor}; }
      NBlue { color: rgb(107, 149, 234); }
      NGreen{ color: rgb(209, 255, 139); }
      NPurp { color: rgb(194, 122, 194); }
      NGray { color: rgba(150, 150, 150, 0.5); }
      NRed  { color: rgb(255, 85, 85); }
      NAqua { color: rgb(20, 212, 255); }
      NOrg  { color: rgb(254, 146, 38);}
      NObj  { color: rgb(252, 222, 104); }
    </style>
  `);
}

// TEMA CLARO
else { 
  fontColor = "#000";
  document.write(/*html*/`
    <style>
      body{ background-color: ${background_color}; }
      .cod{ color: ${fontColor}; }
    
      NVar{  color: ${fontColor}; }
      NBlue{ color: rgb(0, 62, 219); }
      NGreen{ color: green; }
      NPurp{ color: rgb(142, 0, 142) }
      NGray{ color: rgba(98, 98, 98, 0.6); }
      NRed{  color: rgb(212, 0, 0);    text-shadow: .2px .2px black; }
      NAqua{ color: rgb(20, 212, 255); text-shadow: 0 0 5px rgb(0, 13, 110); }
      NOrg{  color: rgb(180, 133, 44); text-shadow: .3px .3px rgb(255, 0, 0);}
      NObj{  color: rgb(255, 217, 0);  text-shadow: 0 0 10px rgba(0, 0, 0, 0.461);}
      b{     text-shadow: .5px .5px 12px black; }
    </style>
  `);
}








// Mostrar codigo al hacer click
function onclick_ShowCode(valor, idCodDiv){
  const CodDiv = document.querySelector('.'+idCodDiv); // div donde mostrar
  CodDiv.innerHTML = (CodDiv.innerHTML ? "" : valor); // mostrar/ocultar
} // onclick="onclick_ShowCode(__scriptConCodigo, '_classDiv')"

// Mostrar codigo al hacer click (legends)
function onclick_ShowCont(idCodDiv){
  const CodDiv = document.querySelector('#'+idCodDiv); // id contenido
  CodDiv.style.display = (CodDiv.style.display=="none" ? "block" : "none"); // mostrar/ocultar
} // onclick="onclick_ShowCont('_IDDiv')"
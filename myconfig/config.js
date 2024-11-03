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
const otros_dir = server_dir + "otros/";

// Logos
const logo_25px = '<img src="' + server_dir + 'logo.png" height="25px">';
const git_logo  = '<img src="' + imgs_dir   + 'github-logo.png" height="25px">';

// Titulos
let titulo;
const t_index = "Index";
const t_html =  "HTML";
const t_css =   "CSS";
const t_js =    "JavaScript";
const t_php =   "PHP";

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
function changeFavicon(logoURL) {
  let link = document.querySelector("link[rel~='icon']");
  if (!link) {
    link = document.createElement('link');
    link.rel = 'icon';
    document.head.appendChild(link);
  }
  link.href = logoURL; // url logo.png
}
changeFavicon(logo);

titulo = getFileName();
document.title = titulo; // (Cambiar Titulo pag)








// COLORES
let background_black_color = "rgb(24, 57, 43)";
let back_color = "rgba(255, 255, 255, 0.5)";
let shadow1 = "rgba(255, 255, 255, 0.8)";
let shadow2 = "rgba(255, 255, 255, 0.3)";
let linkColor = "#FFF";

if (titulo == t_html){
  back_color = "rgba(255, 123, 0, 0.1)";
  shadow1 = "rgba(141, 0, 0, 0.161)";
  shadow2 = "rgba(255, 119, 0, 0.1)";
  linkColor = "#F00";
}
if (titulo == t_css || titulo == t_php){
  back_color = "rgba(0, 0, 255, .05)";
  shadow1 = "rgba(0, 119, 255, 0.164)";
  shadow2 = "rgba(0, 0, 255, 0.1)";
  linkColor = "#00F";

  let a = "#021024"
  let b = "#052659"
  let c = "#5483B3"
  let d = "#7da0ca"
  let e = "#c1e8ff"
}
if (titulo == t_js){
  if (blackTeme) {
    back_color = "rgba(0, 255, 0, .02)";
    shadow1 = "rgba(27, 125, 79, 1)";
    shadow2 = "rgba(0, 255, 38, 0.1)";
    linkColor = "#FFF";
  }else{
    back_color = "rgba(0, 255, 0, 0)";
    shadow1 = "rgba(0, 159, 0, 0.4)";
    shadow2 = "rgba(0, 255, 38, 0.1)";
    linkColor = "#FFF";
  }
}

// Colores de Códigos
if (blackTeme) {
  document.write(/*html*/`
    <style>
      :root{
        --varC: rgb(210, 210, 210);
        --aquaC: ;
      }
      body{
        background-color: ${background_black_color};
        color: var(--varC);
      }
      .cod{
        background-color: rgb(15, 15, 27);
        text-shadow: none;
        color: var(--varC);
      }
      NAqua { color: rgb(20, 212, 255); }
      NBlue { color: rgb(107, 149, 234); }
      NGreen{ color: rgb(209, 255, 139); }
      NVar  { color: var(--varC); }
      NPurp { color: rgb(194, 122, 194); }
      NRed  { color: rgb(255, 85, 85); }
      NOrg  { color: rgb(254, 146, 38);}
      NGray { color: gray; }
      NObj  { color: rgb(252, 222, 104); }
    </style>
  `);
}

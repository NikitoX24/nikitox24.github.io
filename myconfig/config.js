// User Settings
let blackTeme = true;

//  /   (raiz)
//  ../ (atras) 

// Dir / Carpetas
const server_dir = "/"; // "http://myserver/"; 
const index =  server_dir;
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


// CheatSheets
const html_dir = cheat_dir + "html.html";
const css_dir =  cheat_dir + "css.html";
const js_dir =   cheat_dir + "js.html";
const php_dir =  cheat_dir + "php.html";
const bs_dir =   cheat_dir + "Bootstrap.html";



// OnClick de Cheats.php (iconos cheats)
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




// inhabilitar menu contextual
// document.oncontextmenu = function(){return false};
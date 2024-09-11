// User Settings
let tema = "claro";

// Dir / Carpetas
const server_dir = "../"; // _SERVER["HTTP_HOST"]."/";
const index = server_dir + "index.html";
const imgs_dir = server_dir + "imgs/";
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
const html_dir = cheat_dir + "HTML.html";
const css_dir =  cheat_dir + "CSS.html";
const js_dir =   cheat_dir + "JS.html";
const php_dir =  cheat_dir + "php.html";
const bs_dir =   cheat_dir + "Bootstrap.html";



// OnClick de Cheats.php (iconos cheats)
function loadHTML() { window.location.href = html_dir }
function loadCSS()  { window.location.href = css_dir }
function loadJS()   { window.location.href = js_dir }
function loadPHP()  { window.location.href = php_dir }
function loadBS()   { window.location.href = bs_dir }

// OnClick de Index
function loadTest()   { window.location.href = "test.html" }
function loadCuentas(){ window.location.href = otros_dir + "CuentasEJ/index.php" }
function loadConvert(){ window.location.href = otros_dir + "ConvertirTexto.html" }
function loadMC()     { window.location.href = otros_dir + "MC.html" }
function loadVText()  { window.location.href = otros_dir + "VideoText.html" }
function loadSocial() { window.location.href = otros_dir + "social.html" }

function loadAhorcado() { window.location.href = otros_dir + "Ejercicios/Ahorcado.html" }
function loadTateti()   { window.location.href = otros_dir + "Ejercicios/TaTeTi.html" }

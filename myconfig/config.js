// Dir / Carpetas
var server_dir = "../"; // _SERVER["HTTP_HOST"]."/";
var imgs_dir = server_dir + "imgs/";
var cheat_dir = server_dir + "machetes/";

// Logos
var logo_25px = '<img src="' + server_dir + 'logo.png" height="25px">';
var git_logo = '<img src="' + imgs_dir + 'github-logo.png" height="25px">';

 // CheatSheets
var html_dir = cheat_dir + "HTML.html";
var css_dir =  cheat_dir + "CSS.html";
var js_dir =   cheat_dir + "JS.html";
var php_dir =  cheat_dir + "php.html";

var bs_dir =  cheat_dir + "Bootstrap.php";



// OnClick de Cheats.php (iconos cheats)
function loadHTML() { window.location.href = html_dir; }
function loadCSS()  { window.location.href = css_dir; }
function loadJS()   { window.location.href = js_dir; }
function loadPHP()  { window.location.href = php_dir; }
function loadBS()   { window.location.href = bs_dir; }


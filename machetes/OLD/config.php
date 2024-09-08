<?php

// Dir / Carpetas
$server_dir = "../"; // $_SERVER["HTTP_HOST"]."/";
$imgs_dir = $server_dir."imgs/";
$cheat_dir = $server_dir."HtmlCheatSheet/";

// Logos
$logo_25px = '<img src="'.$server_dir.'logo.png" height="25px">';
$git_logo = '<img src="'.$imgs_dir.'github-logo.png" height="25px">';

// CheatSheets
$html_dir = $cheat_dir."HTML";
$css_dir =  $cheat_dir."CSS";
$js_dir =   $cheat_dir."JS";
$php_dir =  $cheat_dir."php";

$bs_dir =  $cheat_dir."Bootstrap.php";


// OnClick de Cheats.php
echo '
<script>
  function loadHTML() { window.location.href = "'.$html_dir.'"; }
  function loadCSS() { window.location.href = "'.$css_dir.'"; }
  function loadJS() { window.location.href = "'.$js_dir.'"; }
  function loadPHP() { window.location.href = "'.$php_dir.'"; }

  function loadBS() { window.location.href = "'.$bs_dir.'"; }
</script>
';
?>
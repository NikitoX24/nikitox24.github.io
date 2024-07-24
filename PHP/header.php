<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="no-follow">
  <?php
    echo '<link rel="icon" href="'.$server_dir.'logo.png">';
    echo '<meta name="theme-color" content="'.$color.'">'; 
    echo '<title>'.$title.'</title>';
    echo '<link rel="stylesheet" href="'.$cheat_dir.'STYLE.css">'; // no funka en index - ¿? - pero en php si - ¿?
  ?>
</head>

<a id="up" href=#> &#9650; </a>

<!-- Nav-Bar -->
<div id="navbar">
  <nav><ul><?php
    echo '<li><a href="'.$server_dir.'index.html">'.$logo_25px.'</a></li>';
    echo '<li><a href="https://nikitox24.github.io/MyServer/">'.$git_logo.' Index GitHub </a></li>';
    echo '<li><a href="https://github.com/NikitoX24/Main">'.$git_logo.' My GitHub </a></li>';
    ?><br>
  </ul></nav>
</div>

<body>


<!-- NO FUNCIONA IMPORTAR UN CSS - ¿por q? -->
<style>

  .round-index{
    -webkit-border-radius: 24px;
    border-radius: 7px;
    border: 1px solid grey;
    max-width: 350px;
    padding: 5px;
    box-shadow: 10px 10px 5px 5px rgba(136, 136, 136, 0.207);
    background-color: rgba(0, 0, 0, 0.281);
    margin: auto;
    margin-top: 60px;
  }
  
  /* fix underline in Icons */
  .round-index a{ text-decoration: none; }

  /* copyright */
  .copyright {
    font-size: 8pt;
    text-align: right;
    padding-bottom: 10px;
    color: grey;
    position: fixed;
    top: 98%;
    right: 10px;
  }

  
  .centred, form{
    text-align: center; 
  }

  /* icons Index */
  .icons_index{
    height: 100px;
    margin: 3px;
  }
  .icons_index:hover{
    height: 105px;
    margin: 0;
  }


  /* ------------ */
  /* -- Header -- */

  #HoraPS{
    font-size: 1.7em;
    font-weight: 900;
    position: fixed;
    top: 96%;
    left: 10px;
  }

  /* GO UP */
  #up{
    font-size: 3em;
    color: black;
    position: fixed;
    top: 40px;
    right: 10px;
    text-decoration: none;
  }
  #up:hover{
    font-size: 4em;
  }

  /* NAV-BAR */
  #navbar {
    padding: 7px 0;
    min-width: 100%;
    position: fixed;
    top: -23px;
    left: 0;
    z-index: 1;
  }
  #navbar nav ul {
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
  #navbar nav ul li {
    display: inline-block;
  }
  #navbar nav ul li a {
    padding: 7px;
    color: #000000;
    font-size: 18px;
    font-family: Arial;
    text-decoration: none;
    display: block;
  }
  #navbar li a:hover{
    color: blue;
    transform: scale(1.1);
  }
</style>
<!-- Nav-Bar -->
<div id="navbar">
  <nav><ul><?php
    echo '<li><a href="'.$server_dir.'index.php">'.$logo_25px.'</a></li>';
    echo '<li><a href="https://nikitox24.github.io/MyServerOLD/">'.$git_logo.' OLD SV GitHub </a></li>';
    echo '<li><a href="https://github.com/NikitoX24/Main">'.$git_logo.' This Repo. </a></li>';
    echo '<li><a href="https://github.com/NikitoX24">'.$git_logo.' My GitHub </a></li>';
    ?>
  </ul></nav>
</div>

<!-- Espacio q ocupa el Nav -->
<div style="height: 60px;"></div>

<!-- Go-Up icon -->
<a id="up" href=#> &#9650; </a>

<!-- CSS NavBar -->
<style>
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
    margin-top: 1em;
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
  
  /* GO UP */
  #up{
    font-size: 3em;
    color: black;
    position: fixed;
    bottom: 20px;
    right: 10px;
    text-decoration: none;
    filter: drop-shadow(1px 1px 2px gray);
  }
  #up:hover{
    font-size: 4em;
    filter: drop-shadow(0 0 10px gray);
  }
</style>
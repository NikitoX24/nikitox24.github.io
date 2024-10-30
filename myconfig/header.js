titulo = document.title;


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
    // RGB: (0, 99, 18)
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




// Nav-Bar 
document.write(/*html*/`
  <div id="navbar">
    <nav><ul>
      <li><a href="${index}">${logo_25px}</a></li>
      <li><a href="https://nikitox24.github.io">${git_logo} server.io </a></li>
      <li><a href="https://github.com/NikitoX24/Main">${git_logo} This Repo. </a></li>
      <li><a href="https://github.com/NikitoX24">${git_logo} My GitHub </a></li>
    </ul></nav>
  </div>

  <!-- Go-Up icon -->
  <a id="up" href=#> &#9650; </a>

  <style>
    :root{
      --color1: ${shadow1};
      --color2: ${shadow2};
      --link: ${linkColor};
    }
    #navbar {
      /* padding: 7px 0;
      min-width: 100%;
      position: fixed;
      top: -23px;
      left: 0; */
      z-index: 1;
    }
    #navbar nav ul {
      background: linear-gradient(90deg,
        var(--color2) 0%,
        var(--color1) 25%,
        var(--color1) 75%,
        var(--color2) 100%);
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      justify-content: space-between;
       /* margin-top: 1em; */
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
      color: var(--link);
      transform: scale(1.1);
    }
    
    /* GO UP */
    #up{
      font-size: 3em;
      color: black;
      position: fixed;
      bottom: 40px;
      right: 40px;
      text-decoration: none;
      filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.4));
      transition: all 200ms;
    }
    #up:hover{
      font-size: 4em;
      filter: drop-shadow(0 0 10px gray);
    }
  </style>
`);

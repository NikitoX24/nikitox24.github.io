// Nav-Bar 
export default /*html*/`
  <div style="height: 50px"></div>
  <div id="navbar">
    <nav><ul>
      <li>${logo_25px}<a href="${index}"> INICIO </a></li>
      <!-- <li><a href="https://nikitox24.github.io"> nikitox24.github.io </a></li> -->
      <!-- <li><a href="https://github.com/NikitoX24/Main">${git_logo} Repositorio </a></li> -->
      <li>${git_logo}<a href="https://github.com/NikitoX24"> My GitHub </a></li>
      <!-- <li><a href="/Test.html"> Testing </a></li> -->
    </ul></nav>
  </div>

  <style>
    :root{
      --color1: ${shadow1};
      --color2: ${shadow2};
      --link: ${linkColor};
    }
    #navbar {
      padding-block: 10px;
      min-width: 100%;
      position: fixed;
      top: -23px;
      left: 0; 
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
      margin-top: 12px;
      height: 40px;
    }
    #navbar nav ul li {
      display: inline-block;
      display: flex;
      align-items: center; 
      justify-content: space-around;
      width: auto;
      <!-- background-color: red; -->
    }
    #navbar nav ul li a {
      padding-block: 0px;
      padding-inline: 10px;
      color: rgba(255, 255, 255, 0.7);
      font-size: 16px;
      font-family: Verdana;
      text-decoration: none;
    }
    #navbar li:hover{
      color: var(--link);
      transform: scale(1.05);
      filter: drop-shadow(2px 2px 5px black);
    }
  </style>
`;
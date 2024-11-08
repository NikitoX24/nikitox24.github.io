// Nav-Bar 
export default /*html*/`
  <div style="height: 50px"></div>
  <div id="navbar">
    <nav><ul>
      <li><a href="${index}">${logo_25px} </a></li>
      <li><a href="https://nikitox24.github.io">${git_logo} server.io </a></li>
      <li><a href="https://github.com/NikitoX24/Main">${git_logo} This Repo. </a></li>
      <li><a href="https://github.com/NikitoX24">${git_logo} My GitHub </a></li>
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
    }
    #navbar nav ul li {
      display: inline-block;
    }
    #navbar nav ul li a {
      padding: 7px;
      color: #000000;
      font-size: 15px;
      font-family: Arial;
      text-decoration: none;
      display: block;
    }
    #navbar li a:hover{
      color: var(--link);
      transform: scale(1.1);
    }
  </style>
`;
class Menu extends HTMLElement {
  constructor() {
    super();
    this.innerHTML = `
    <div>
      <nav><ul>
        <li><a href="../index.html"> <img src="/Imgs/logo.png" height="30px";"></a></li>
        <li><a href="https://nikitox24.github.io/Main/"> INICIO(GitHub) </a></li>
        <li><a href="https://github.com/NikitoX24/Main"> GITHUB </a></li>
        <li><a href="https://github.com/NikitoX24?tab=repositories"> REPOSITORIOS </a></li>
        <li><a href=#> (arriba) </a></li>
      </ul></nav>
    </div>
    <style>
      nav {
        padding: 10px 0;
        min-width: 100%;
        position: fixed;
        top: -23px;
        z-index: 1;
      }
      nav ul {
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
      nav ul li {
        display: inline-block;
      }
      nav ul li a {
        padding: 10px;
        color: #000000;
        font-size: 18px;
        font-family: Arial;
        text-decoration: none;
        display: block;
      }
      li a:hover{
        color: red;
        transform: scale(1.1);
      }
    </style>
    `
  }
}

customElements.define("menu-component", Menu);
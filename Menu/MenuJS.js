class Menu extends HTMLElement{
    constructor() {
    super();
    this.innerHTML = `
    <div>
        <nav><ul>
            <li><a href="../index.html"> INICIO(Local) </a></li>
            <li><a href="https://nikitox24.github.io/Main/"> INICIO(GitHub) </a></li>
            <li><a href="https://github.com/NikitoX24/Main"> GITHUB </a></li>
            <li><a href="https://github.com/NikitoX24?tab=repositories"> REPOSITORIOS </a></li>
        </ul></nav>
    </div>
    <style>
        nav {
            padding: 10px 0;
            min-width: 100%;
            position: fixed;
            top: -20px;
        }
        nav ul {
            background: linear-gradient(90deg, 
            rgba(255, 255, 255, 0) 0%, 
            rgba(255, 255, 255, 0.2) 25%, 
            rgba(255, 255, 255, 0.2) 75%, 
            rgba(255, 255, 255, 0) 100%);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.1),
            inset 0 0 1px rgba(255, 255, 255, 0.6);
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
        a:hover{
            color: red;
        }
    </style>
    `
    }
}

customElements.define("menu-component", Menu);
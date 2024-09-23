// HTML
// `<my-component name="Bart" surname="Simpson"></my-component>`  

// JS
class componente extends HTMLElement{
  constructor() {
    super();
    this.name; // Variable
    this.surname; // Variable
  }

  // Lista de Atributos q se pueden cambiar
  static get observedAttributes(){ 
    return ["name", "surname"];
  }

  // Poder utilizar o cambiar los Atributos
  attributeChangedCallback(nameAtr, oldValue, newValue){ 
    switch (nameAtr) {
      case "name":
        this.name = newValue;
        break;
    
      case "surname":
        this.surname = newValue;
        break;
    }
  }

  // función de lo q hace el componente
  connectedCallback(){
    this.innerHTML = /*html*/`
      <h1> Hola ${this.name} ${this.surname}! </h1>
    `;
    this.style.color = "blue";
  }
}

window.customElements.define("my-component", componente)

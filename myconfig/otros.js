export let textoFix = '<p id="textoFix"></p>';

export default function otros(){
  let textofix = document.querySelector("#textoFix");
  let Section = document.querySelectorAll("section");

  // section hover - textofix
  Section.forEach(elem => {
    elem.addEventListener("mouseenter", function() {
      textofix.innerHTML = elem.id;
    });
  })

  // section name
  Section.forEach ( elem => {
    let h1 = document.createElement("h1"); // Crear un h1.
    let text = document.createTextNode(elem.id); // Crear el Texto.
    h1.appendChild(text); // Agregar el text al parrafo.
    elem.insertBefore(h1, elem.firstChild); // Agregar el h1 a Section.
  })

  // <NTab> (espacio) cambiar los nbsp
  const tabs = document.querySelectorAll("NTab");
  tabs.forEach ( elem => elem.innerHTML = "&nbsp; &nbsp;")
  const tabs2 = document.querySelectorAll("NTab2");
  tabs2.forEach (elem => elem.innerHTML = "&nbsp; &nbsp; &nbsp; &nbsp;")
}

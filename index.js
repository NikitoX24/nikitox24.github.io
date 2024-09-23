
// #region (Mostrar Seccion (hover) y texto h1 )
let textoFix = document.querySelector("#textoFix");
let Section = document.querySelectorAll("section");

for (let i = 0; i < Section.length; i++) {
  Section[i].addEventListener("mouseenter", function() {
    textoFix.innerHTML = Section[i].id;
  });
}

window.onload = function(){
  for (let i = 0; i < Section.length; i++) {
    let h1 = document.createElement("h1"); // Crear un h1.
    let text = document.createTextNode(Section[i].id); // Crear el Texto.
    h1.appendChild(text); // Agregar el text al parrafo.
    Section[i].insertBefore(h1, Section[i].firstChild); // Agregar el h1 a Section.
  };
}
//#endregion

// <NTab> (espacio) cambiar los nbsp
let tabs = document.querySelectorAll("NTab");
for (let i = 0; i < tabs.length; i++) {
  tabs[i].innerHTML = "&nbsp; &nbsp;";
}
let tabs2 = document.querySelectorAll("NTab2");
for (let i = 0; i < tabs2.length; i++) {
  tabs2[i].innerHTML = "&nbsp; &nbsp; &nbsp; &nbsp;";
}




// FOOTER
document.write('<br><br><br><br><br>');

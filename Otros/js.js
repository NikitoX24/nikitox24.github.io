
let array = ["Z", "A", "B", "C", "C"];
a = array.filter(elem => elem == "A" || elem == "B");
console.log(a);













/* function change() {
  // obtener texto y quitar espacios.
  let texto = document.querySelector("#Texto").value.trim();
  
  // texto convertido.
  let nuevoTexto = texto;
  let resultado;
 
  // Arrays por Lineas.
  let arrLineas = texto.split("\n");
  
  // recorrer lineas.
  for (let linea = 0; linea < arrLineas.length; linea++) {
    // if(!arrLineas[linea].startsWith("<")) continue;
    
    // separar por espacios.
    arrLineas[linea] = texto.split(" ");
    
    // obtener y quitar "<elem".
    let elemento = arrLineas[linea][0].replace("<","");
    arrLineas[linea][0] = ""; // eliminar?
    
    // atributos
    //arrLineas[linea][1]
    
    
    
    
    
    
    
    
    // etapa final
    // nuevoTexto = elemento + ...
    // nuevoTexto = ;
  }





  let h1 = document.querySelector("#resultado");
  resultado = nuevoTexto;
  //let resultado = typeof arrLineas[0];
  //let resultado = arrLineas[0][0];
  
  console.log(resultado);
  h1.innerHTML = resultado;
  //navigator.clipboard.writeText(resultado);
}


////////////////////////////////////////////////////////////




    // obtener texto hasta el primer espacio
    // let elemento = texto.substring(1,arrLineas[i].search(" "))
  
    // cambiar < por &lt;
    //for (let iT = 0; iT < arrLineas[linea].length; iT++) {
    //  nuevoTexto = nuevoTexto.replace("<","&lt;");
    //} */
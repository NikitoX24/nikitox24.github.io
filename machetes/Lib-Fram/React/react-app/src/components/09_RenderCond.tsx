// Truthy y Falsy (0, "", false, null, undefined, etc).
// Short Circuit Operator (si es true, ejecuta lo de la derecha)

// let array = [];
// {array.length && "Array Vacio"}      //? muestra 0.
// {array.length == 0 && "Array Vacio"} //? muestra "Array Vacio".

function Main() {
  const lista = ["Bart", "Homero", "Lisa"];

  // Operador Ternario (if - else)
  const RenderCond = lista.length
    ? <h1>*Mostrar contenido*</h1>
    : <h1>Sin contenido a mostrar</h1>;

  // Short Circuit Operator (if) - (solo si se cumple la condicion o si la variable está definida)
  const RenderCond2 = lista.length !== 0 && <h1>*Mostrar solo si hay algo en la lista*</h1>;

  return (
    <div>
      {RenderCond}
      {RenderCond2}
    </div>
  );
}
export default Main;

/*   
// Operador Ternario
  const verificarSesion = sesion ? "Bienvenido" : "Iniciar Sesion";

// Function
const verificarSesion = (sesion: boolean) => {
  if (sesion === true) {
    return <h1>Bienvenido</h1>
  }
  return <h1>Iniciar Sesion</h1>
} 
*/
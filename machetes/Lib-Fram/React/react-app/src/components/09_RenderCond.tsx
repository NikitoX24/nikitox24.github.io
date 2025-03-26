// Short Circuit Operator (si es true, se ejecuta)
// FALSE: (!== 0, "", false, null, undefined, etc).

export default function RenderCond() {
  const lista = ["Bart", "Homero", "Lisa"];

  // Operador Ternario (if - else)
  const RenderCond = lista.length ? "Verdadero" : "Falso";

  // Short Circuit Operator (if)
  const RenderCond2 = lista.length !== 0 && <h1>"*Si hay algo en la lista*"</h1>;

  return (
    <div>
      <h1>{RenderCond}</h1>
      {RenderCond2}
    </div>
  );
}


// ----------------------  Uso de 0  ----------------------- //

// let array = [];
// {array.length && "Array Vacio"}      //! muestra 0.
// {array.length == 0 && "Array Vacio"} //* muestra "Array Vacio". 
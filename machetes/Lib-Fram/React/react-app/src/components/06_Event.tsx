// https://youtu.be/yIr_1CasXkM?t=4034&si=hzLblvXrXBdilq2H

// ---------------------------------------------------- //
// const lista = ["Bart", "Homero", "Lisa"];
// return <List data={lista} />;
// ---------------------------------------------------- //



// Evento inLine
export function List3({ data }: {data: string[]}) {
  return (
    <ul>
      {data.map((elemento) => (
        <li onClick={ /* Evento */ () => console.log("Click") /* Evento */} key={elemento}>
          {elemento}
        </li>
      ))}
    </ul>
  );
}

// Evento por Función
export function List4({ data }: {data: string[]}) {
  
  function handleClick() { 
    console.log("Click")
  }

  return (
    <ul>
      {data.map((elemento) => (
        <li onClick={/* Evento */handleClick/* Evento */} key={elemento}>
          {elemento}
        </li>
      ))}
    </ul>
  );
}

// Evento por Función + parámetros
export function List5({ data }: {data: string[]}) {
  
  function handleClick(texto: string) { 
    console.log(texto); 
  }
  
  return (
    <ul>
      {data.map((elemento) => (
        <li onClick={ /* Evento */() => handleClick(elemento)/* Evento */ } key={elemento}>
          {elemento}
        </li>
      ))}
    </ul>
  );
}
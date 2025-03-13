// useState (State Hook) funcion para cambiar una variable

// https://youtu.be/yIr_1CasXkM?t=4450&si=NoMlv4S1tDyuzGQV

import { useState } from "react";

function List({ data }: {data: string[]}) {
  const [index, setIndex] = useState(1); // (1 = valor inicial)
  
  function handleClick(i: number) { 
    setIndex(i); // Al hacer click cambiar el estado
  }
  
  return (
    <ul className="list-group">
      {data.map((elemento, i) => (
        <li onClick={() => handleClick(i)}
          className={`list-group-item ${index == i ? "active" : ""}`} // cambiar css
          key={elemento}>
        {elemento} </li>
      ))}
    </ul>
  );
}

export default List;
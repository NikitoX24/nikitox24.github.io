// import List from "./components/08_FuncProp";

// function handleSelect (elemento: string){
//   console.log("Imprimiendo", elemento);
// }

// return <List data={list} onSelect={handleSelect}


import { useState } from "react";

type Props = {
  data: string[];
  onSelect?: (elemento: string) => void; // especificar q es una funccion
};

function List({ data, onSelect }: Props) {
  const [index, setIndex] = useState(0); // hook

  // funcion para cambiar el seleccionado
  const handleClick = (i: number, elemento: string) => { 
    setIndex(i);
    onSelect?.(elemento); // si existe, ejecutar...
  } 

  return (
    <ul className="list-group">
      {data.map((elemento, i) => (
        <li onClick={() => handleClick(i, elemento)}
          className={`list-group-item ${index == i ? "active" : ""}`} // poner como activo
          key={elemento}>
        {elemento} </li>
      ))}
    </ul>
  );
}

export default List;
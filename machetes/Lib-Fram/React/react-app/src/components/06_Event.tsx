// https://youtu.be/yIr_1CasXkM?t=4034&si=hzLblvXrXBdilq2H

// ---------------------------------------------------- //
// const lista = ["Bart", "Homero", "Lisa"];
// return <List data={lista} />;
// ---------------------------------------------------- //


// import { MouseEvent } from "react";

type Props = {
  data: string[];
};

export default function List({ data }: Props) {
  function handleClick(elem: string){
    console.log(elem)
  }

  return (
    <ul>
      {data.map((elemento) => (
        <li onClick={() => handleClick(elemento)} key={elemento}> {elemento} </li>
      ))}
    </ul>
  );
}
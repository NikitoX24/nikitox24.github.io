// return <Card> <h1>hola</h1> </Card>;

import { ReactNode } from "react"; // para usar el tipo "componente/elemento" como parámetro.

export default function Card(props: {children: ReactNode}) { // <- asignar tipo
  const { children } = props;
  return (
    <>
      {children}
      {children}
    </>
  );
}

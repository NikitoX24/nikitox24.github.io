//  App.tsx //
/* import { CardBody } from "./components/04_2_ChildrenProp";
function App() {
  return <Card>
    Hola Mundo!
    <fragmentName />
  </Card>;
} */

import { ReactNode } from "react";

interface CardBodyProps {
  children: ReactNode; // Fragment
  // children: string; // texto
}

export function Card(props: CardBodyProps) {
  const { children } = props;
  return (
    <div>
      {children}
    </div>
  );
}
export default Card;


export function FragmentName() {
  return (
    <>
      <h1>Esto es un Fragmento</h1>
    </>
  );
}
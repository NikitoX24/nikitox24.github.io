//  App.tsx //
/* import { CardBody } from "./components/04_1_MultiProps";
function App() {
  return <CardBody title={"Hola Mundo!"} text={"Texto a enviar..."} />;
} */

interface CardBodyProps {
  title: string;
  text: string;
  opcional?: string; // (Opcional)
}

export function CardBody(props: CardBodyProps) {
  const { title, text } = props;
  return (
    <div>
      <h5> {title} </h5>
      <p> {text} </p>
    </div>
  );
}

export default CardBody;
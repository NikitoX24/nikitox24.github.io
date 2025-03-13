// return <Card body = {"Hola Mundo!"} />



// --------------------  Opcion 1  (interface / type) -------------------- //
interface myProps {
  body: string;
  text?: boolean; // opcional
}
export default function Card(props: myProps) {
  const { body, text } = props; // desestructurar las props
  return (
    <>
      <h5> {body} </h5>|
      <p> {text} </p>
    </>
  );
}


// --------------------  Opcion 2 -------------------- //
export function Card2(props: { body: string, text?: boolean }) { 
  const { body, text } = props; // desestructurar las props
  return (
    <>
      <h5> {body} </h5>
      <p> {text} </p>
    </>
  );
}


// --------------------  Opcion 3 -------------------- //
export function Card1({ body, text }: { body: string, text?: boolean }) {
  return (
    <>
      <h5> {body} </h5>
      <p> {text} </p>
    </>
  );
}
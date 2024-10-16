//  App.tsx //
// return <Card body = {"Hola Mundo!"} />

interface myProps {
  body: string; // asignar un tipo
}
function Card(props: myProps) {
  const { body } = props; // destructurar las props
  return <h1> {body} </h1>; // usar la prop
}
export default Card;
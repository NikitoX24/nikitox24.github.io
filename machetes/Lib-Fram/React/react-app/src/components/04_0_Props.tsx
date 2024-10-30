//  App.tsx //
// return <Card body = {"Hola Mundo!"} />


// Opcion 1 (varias props)
interface myProps {
  body: string; // asignar un tipo
  estado: boolean; // asignar un tipo
}
export default function Card(props: myProps) {
  const { body, estado } = props; // destructurar las props
  return <h1> {body + estado} </h1>; // usar las props
}



// Opcion 2 (una sola prop)
export function Card2(props: {body: string}) { 
  const { body } = props; // destructurar las props
  return <h1> {body} </h1>; // usar la prop
}
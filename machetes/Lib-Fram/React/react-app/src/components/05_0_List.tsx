// return <List/>;


// -----------------  Opción 1  ----------------- //
const lista = ["Bart", "Homero", "Lisa"];

export default function List() {
  return (
    <ul>
      {lista.map((elemento) => (
        <li key={elemento}>{elemento}</li> // key = id
      ))}
    </ul>
  );
}

// -----------------  Opción 2  ----------------- //
const products  = [
  { title: 'Pera', id: 1 },
  { title: 'Banana', id: 2 },
  { title: 'Manzana', id: 3 },
];

const listItems = products.map(product =>
  <li key={product.id}> {product.title} </li>
);

export function List2() {
  return ( <ul>{listItems}</ul> );
}


// ----------------  Opción 3   (recibir lista por parametros)  ------------ //
export function List3({ data }: {data: string[]}) {
  return (
    <ul>
      {data.map((elemento) => (
        <li> {elemento} </li>
      ))}
    </ul>
  );
}
// APP.tsx

// return <List />;

const products  = [
  { title: 'Pera', id: 1 },
  { title: 'Banana', id: 2 },
  { title: 'Manzana', id: 3 },
];

const listItems = products.map(product =>
  <li key={product.id}>
    {product.title}
  </li>
);

export default function List() {
  return (
    <ul>{listItems}</ul>
  );
}
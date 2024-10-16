// APP.tsx

// return <List/>;


const lista = ["Bart", "Homero", "Lisa"];

function List() {
  return (
    <ul>
      {lista.map((elemento) => (
        <li key={elemento}>{elemento}</li> // key = id
      ))}
    </ul>
  );
}

export default List;
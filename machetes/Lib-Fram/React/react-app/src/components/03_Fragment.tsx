export default function Fragment() {
  return (
    <div>
      <FragmentBody />
    </div>
  );
}

function FragmentBody() {
  return (
    <>
      <h1>Esto es un Fragmento</h1>
      <p>dentro de un componente</p>
    </>
  );
}
export default function Component(){
  return (
    <>
      <Button/>
      <Button/>
    </> 
  ); 
}

// componente
export function Button(){
  const texto = "Botón"; // variable
  return (
    <button> {texto} </button>
  );
}
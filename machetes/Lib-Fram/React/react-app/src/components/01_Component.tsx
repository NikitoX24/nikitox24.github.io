// JSX (codigo html en js/ts) => Babel => React.createElement 
export default function Component(){
  const nombre = "Nicolas"; // variable

  return (
    <>
      <h1> Hola {nombre}! </h1> 
      <p> esto es un componente. </p> 
    </> 
  ); 
}
// recomendado instalar libreria (styled-components)
// npm install styled-components
// en caso de error... (npm install @types/styled-components)

import styled from "styled-components";

// Crear un atributo css
type BtnProps = {
  isLoading: boolean;
}
// Estilos con JS (styled-Comp)
const Btn = styled.button<BtnProps>`
  background-color: ${props => props.isLoading ? "gray" : "red"};
  padding: 15px 30px;
`;

function Main() {
  return <Btn isLoading={false}> Botón </Btn>
}
export default Main;
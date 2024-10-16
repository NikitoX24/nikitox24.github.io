// Al darle click, cambiar por secondary (desactivado) 
// Cambiar el texto por "Cargando..." (tiene q ser children)

import { ReactNode, useState } from "react";

interface Props {
  children: ReactNode;
}

function ButtonF(props: Props) {
  const {children} = props;
  const [state, setState] = useState(false);
  
  const handleClick = () => setState(!state)

  return (
      <button
        type="button" 
        className={`btn btn-${state ? "secondary" : "primary"}`}
        disabled={state}
        onClick={() => handleClick()}
      > {state ? "Cargando..." : children} </button>
  );
}
export default ButtonF;
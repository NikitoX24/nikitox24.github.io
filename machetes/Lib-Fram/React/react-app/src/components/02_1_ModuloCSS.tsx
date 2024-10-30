// Uso de modulos css de un archivo aparte con la extencion .module.css
import styles from "./Button/Button.module.css";

function Style() {
  const v = true;
  
  return ( 
    <div>
      {/* una sola clase */}
      <p className={ styles.unaClase }> una sola clase </p>             
      
      {/* Varias Clases + RenderCond*/}
      <p className={ [styles.button, `${v && styles.otraClase}`].join(" ") }>varias clases</p> 
    </div>
   )
}
export default Style;
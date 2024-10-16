// Uso de modulos css de un archivo aparte con la extencion .module.css
import styles from "./Button/Button.module.css";

function Style() {
  return ( 
    <div>
      <p className={ styles.unaClase }> una sola clase </p>             {/* una sola clase */}
      <p className={ [styles.button, styles.otraClase].join(" ") }>varias clases</p> {/* Varias Clases */}
    </div>
   )
}
export default Style;
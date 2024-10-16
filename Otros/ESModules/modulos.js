import { variable, restar,  Math } from "./export.js"; // importar por seleccion
import { name as nombre} from "./export.js"; // renombrar
import * as todo from "./export.js"; // importar todo
import Default from "./export.js"; // importar default
import default2, { restar as rest} from "./export.js"; // importar default + otros

// importar variables y funciones
console.log(variable);
console.log(nombre);
console.log(restar(5, 5));

// importar una clase
const math = new Math(); // primero instanciar la clase.
console.log(math.double(4)); // funcion de una clase.

// importal default
console.log(Default.restar(10, 9));
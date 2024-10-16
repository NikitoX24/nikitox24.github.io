// exportar variables
export const variable = 25;
export let name = "Nico";

// exportar funciones
export function restar(a, b) {
  return a - b;
}

// exportar clases con funciones
export class Math {
  double(x) {
    return x * x
  }
}

// exportar por defecto
export default {
  name: "nico",
  age: 25,
  restar // exportar tambien otras funciones / variables
}
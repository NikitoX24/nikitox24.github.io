// https://youtu.be/-xDZwb-PY0M 
// HolaMundo
//!!!!!!!!!!!!!!!!!!!! Leer Readme.md !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!!!!! Leer Readme.md !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!!!!! Leer Readme.md !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//!!!!!!!!!!!!!!!!!!!! Leer Readme.md !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

let mensaje: string = "Hola Mundo"

mensaje = "Chanchito feliz"

console.log(mensaje);


// number
  let numeros = 76_000_000

// Function
  function funcion(param: any) {
    return param
}

// Arrays
  let animales: string[] = ["ch", "fz", "fp"]
  let nums: number[] = [1, 2, 3]
  let nums2: Array<number> = []
  let checks: boolean[] = []

// tuplas
  // lista de elementos ordenados
  let tuplas: [number, string] = [1, "chanchito feliz"] 

// Enum
  enum Talla { Chica, Mediana, Grande, ExtraGrande }     // 0, 1, 2, 3
  enum Talla2 { Chica= 1, Mediana, Grande, ExtraGrande } // 1, 2, 3, 4
  enum Talla3 { 
    Chica = "s", 
    Mediana = "m", 
    Grande = "l", 
    ExtraGrande = "xl" 
  }

  const enum LoadingState {Idle, Loading, Success, Error} // no se muestra en js (codigo reducido)


// Objetos
  type Persona = {
    readonly id: number, // (No Editable)
    nombre?: string // (Opcional)
    talla: Talla3
  }
  // crear un objeto persona
  const objeto: Persona = {
    id: 1,
    talla: Talla3.Mediana
  }

  // Crear un array de personas
  const arr: Persona[] = [] 
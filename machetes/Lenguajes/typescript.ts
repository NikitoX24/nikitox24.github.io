
// @ts-check



// midudev

//? En typescript se asignan automaticamente los tipos
//? Evitar escribir tipos (anotacion - tipar)

//* Inferencia de datos - se auto-tipea (ya no se puede cambiar de tipo)
let persona = 'miguel'
  // persona = 2 //! da error, por q no se puede convertir en otro tipo.

//* Anotacion de tipos - tipar
let numero: number = 2

  // any (ya no se va a convertir en otro tipo, ignora el tipo, pierde el autocomplete)
  let any: any = "hola"

  // unknow (no se sabe q tipo es)
  let unknow: unknown = "hola" //! puede ser peligroso)

/* -------------------------------------------------------------------------------- */

//*   Funciones 
  // Opcion 1
  function saludar({name, age}: {name: string, age: number}) {
    console.log(`Hola ${name}, tienes ${age} años`)
  }
  saludar({name: "nico",age: 25})

  // Opcion 2
  function saludar2(persona: {name: string, age: number}) {
    const {name, age} = persona
    console.log(`Hola ${name}, tienes ${age} años`)
  }
  saludar2({name: "nico",age: 25})

//*   Funcion Return   
  // Funcion //?                                            _______/ tipar el return (opcional)
  function suma2({num1, num2}: {num1: number, num2: number}):number {
    return num1 + num2  // devuelve number
  }

  // Arrow Function //?                 ______/ tipar return
  const sumar = (a: number, b: number): number => {
    return a+b
  }

//*   Funcion como funcion
  // tipar el return  //?         _____/ param   _______/ tipar return (opcional)
  const sayHiFromFunction2 = (fn: (name: string) => void) => {
    return fn("Miguel")
  }
  sayHiFromFunction2((name) => {
    console.log(`Hola ${name}`)
  })

/* -------------------------------------------------------------------------------- */

// Template union types
type HexadecimalColor = `#${string}`; // este tipo solo permite variables con un # al principio //! solo typescript

// Union Types
type HeroPowerScale = "low" | "medium" | "Higth";
type numOrText = number | string;

// Type Alias (Crear nuestro propio Type)
type Hero = {
  readonly id?: number; //! (solo lectura para TypeScript)
  name: string;
  age: number;
  isActive?: boolean; //? ( ? -> parametro opcional )
  powerScale?: HeroPowerScale; // usar Union Types
}

let Hero: Hero = {
  name: "thor",
  age: 1500
};

function createHero(name:string, age:number): Hero {
  return { name, age, isActive : true};
}

const thor = createHero("Thor", 1500);

const ironman = Object.freeze(createHero("Tony", 40)); // Solo lectura, no se puede modificar


thor.id?.toString(); //? si tiene un id(por q es opcional) ajecutar, sino no

thor.id ?? 1; // var por defecto

// ------------------------------------------------------------------------

// Intersection types
  type Opciones1 = {
    name: string
    age: number
  }

  type Opciones2 = {
    isActive: boolean
    power: HeroPowerScale
  }

  type Personaje = Opciones1 & Opciones2; // Unir dos typos en uno



// Type Indexing
  type HeroProp = {
    isActive: boolean
    address: {
      planet: string,
      city: string
    }
  }
  const addressHero: HeroProp["address"] = {
    planet: "Earth",
    city: "Madrid"
  }

  // type from value y typeof
  const address = {
    planet: "Earth",
    city: "Madrid"
  }

  type Address = typeof address;

  const addressTwich: Address = {
    planet: "mars",
    city: "Twitch"
  }


// Arrays
const languages: string[] = [];

const languages3: (string | number)[] = [];





// Matrices y tuplas
  type CellValue = "X" | "O" | "";
  type GameBoard = [
    [CellValue, CellValue, CellValue], 
    [CellValue, CellValue, CellValue], 
    [CellValue, CellValue, CellValue]
  ]

  const gameBoard: GameBoard = [
    ["X", "O", "X"],
    ["O", "O", ""],
    ["X", "", "X"]
  ]

  // 
  type RGB = [number, number, number];
  const rgb: RGB = [0, 255, 0];







// ---------------------------------------------
// Video 2 MiDu


// Enums
const enum Weap_Type{
  sword,
  pickaxe,
  axe
}

let player_weap = Weap_Type.sword;

if (player_weap == Weap_Type.sword){
  // tiene una espada
} else if (player_weap == Weap_Type.pickaxe){
  // tiene un pico
} else if (player_weap == Weap_Type.axe){
  // tiene un hacha
}
 



// Aserciones de Tipos 
/* const canvas = document.querySelector("canvas");

if (canvas instanceof HTMLCanvasElement) { // comprobar q es un canvas
  co nst ctx = canvas.getContext("2d");
}
*/









// Types (Opcion 1)
type Productos = {
  id: string
  name: string
  price: number
}

const producto: Productos = {
  id: "1",
  name: "Remera",
  price: 30
}

// Interfaces (Opcion 2)
  interface Producto {
    id: number
    name: string
    price: number
    empresa?: "indonesia" // nunca va a cambiar
    saludar?: () => void // metodos (void no nevuelve nada)
  }

    // extencion de Interface
    interface Zapatilla extends Producto{
      talla: number
    }

  // Interface dentro de Interface
  interface CarritoDeCompras{
    totalPrice: number
    productos: (Producto | Zapatilla)[]
  }

    // Interface con funciones
    interface CarritoOps {
      add: (product: Producto) => void,
      remove: (id: number) => void,
      clear: () => void,
    }
  

    const carrito: CarritoDeCompras = {
      totalPrice: 100,
      productos: [ { id: 1, name: "Remera", price: 20, talla: 12 } ]
    }

  // Implementacion de una Interface
  const hero: Producto = {
    id: 1,
    name: "Remera",
    price: 30,
  }




// (si el parametro pueden ser de dos tipos, usar If para evitar errores)

  interface Mario{
    nombre: string,
    company: "Nintendo",
    saltar: () => void
  }
  interface Sonic{
    nombre: string,
    company: "Sega",
    correr: () => void
  }
  
  type PersonajeJugar = Mario | Sonic
  
  // Narrowing 
  function functionNarrw (_personaje: PersonajeJugar){
    if(typeof _personaje.nombre == "string"){
      return _personaje.company
    }
  }

  // Type Guard
  function check(_personaje: PersonajeJugar): _personaje is Sonic {
    return (_personaje as Sonic).correr !== undefined
  }

  function jugar(_personaje: PersonajeJugar) {
    if (check(_personaje)){
      _personaje.correr()
    }
  }


// Propiedades Privadas en una Clase
/* class Clase1 {
  #powerScore: number // Privado 
  private powerScore: number // Privado
}
 */
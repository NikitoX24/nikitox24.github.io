
// https://csharpcheatsheet.es/

// Tipos de datos
int entero = 25;
char letra = "a";
string cadena = "Nico";
bool boleano = true;
float float7 = 1.0000000;
double double16 = 1.0000000000000000;
long numberoLargo = 123456789L;

// metodos strings
string a = "Some text";
a.length; // 9
a.IndexOf("t"); // 5
a=a.Insert(0, "This is "); // "This is some text"
a=a.Remove(0); // "ome text"
a=a.Replace("Some", "Any"); // "Any text"


// Interpolación 
string interpolacion = $"Hello, my name is {cadena} and I am {entero} years old.";

// Entrada - Salida
console.ReadLine(); // entrada
console.WriteLine("Hola"); // salida

// convertir
int number  = int.Parse("123"); // int
int entero  = convert.ToInt16("123"); // Int16-32-64
float flot  = (float)variable; // float
double doble = convert.ToDouble(1); // double
bool boleano = convert.ToBoolean("True"); // bool




/* --------------------
				Arrays
 ----------------------*/

int[] numbers = { 1, 2, 3, 4, 5 }; // Array (NO se puede modificar)
int[,] multidim = new int[ 3, 4 ]; // Array Multidimensional sin valores - tabla (3-filas, 4-columnas)
int[,] x = { {3,7}, {0,8}, {4,2} };  // Array Multidimensional con valores
x[2, 0]; // 4

int[][] jagged = new int[][] { // array dentro de array
  new int[] {1, 8, 2, 7, 9},  
  new int[] {2, 4, 6},
  new int[] {33, 42}
}
jagged[2][1] // 42

var person = (Name: "Alice", Age: 30); // Tupla
List<int> numbers = new List<int>() { 1, 2, 3 }; // Lista - coleccion (SI se puede modificar)
Dictionary<string, string> capitals = new Dictionary<string, string>() { // Diccionario
		{ "France", "Paris" },
		{ "Japan", "Tokyo" }
};

record User(string Name, int Age); // Records
User user1 = new User("Alice", 30);

// Metodos de Arrays
Array.ForEach(num, num => Console.WriteLine(num)); // Array.FerEach()
arr.Length; // cant elem
arr.Rank; // cant dimens? 
Array.Sort(arr); // ordenar
Array.Reverse(arr); // ordenar inverso
Array.IndexOf(arr, elemento); // Buscar el primer elem en un array
Array.Find(arr, x => x > 20); // Buscar con un criterio (Predicate<T>) => Return (elem)
Array.Exists(arr, x => x > 20); // Buscar con un criterio (Predicate<T>) => Return (bool)

// LINQ (Language Integrated Query) (Metodos para arrays)
using System.Linq;
var numbers = new List() { 1, 2, 3, 4, 5 };
var evenNumbers = numbers.Where(n => n % 2 == 0); // Condicion para cada elem.
var cuadrados = numbers.Select(x => x * x); // funcion para cada elem.
int suma   = numbers.Sum(); // suma de todos los valores
int maximo = numbers.Max(); // valor maximo
int minimo = numbers.Min(); // valor minimo
double promedio = numbers.Average(); // valor promedio

numeros.Where().Select().Sum(); // combinar varios metodos
int[] nuevoArray = numeros.Where(x => x != elementoAEliminar).ToArray(); // Eliminar un elemento del array









/* ------------------------
				Condicionales
 ------------------------*/

if (true) { // Código
} else if { // Código
} else { // Código
}

// switch
switch (valor)
{
	case < 0.0:
		Console.WriteLine($"{valor} es Muy Bajo");
		break;

	case > 15.0:
		Console.WriteLine($"{valor} es Muy Alto.");
		break;

	case double.NaN:
		Console.WriteLine("Fallo de Valor.");
		break;

	default:
		Console.WriteLine($"{valor} default.");
		break;
}

/* --------------------
				Bucles
 ----------------------*/

//  FOR
for(int i = 0; i < 10; i++) {
	Console.WriteLine(i);
}

// WHILE
while(condition) { /* Código */ }

// DO-WHILE
do { /* Código */ }while(condition);


// FOREACH
foreach (var item in my_array) { /* codigo */ }
// Array.FerEach()
Array.ForEach(numeros, numero => Console.WriteLine(numero));


// ---  Parallel For  --- //
Parallel.For(0, 10, i => {
	// ejecución paralela, usa múltiples núcleos del procesador.
});
						 
// Parallel Foreach
Parallel.ForEach(collection, item => {
	// ejecución paralela, usa múltiples núcleos del procesador.
});




/* -------------------------
			Metodos / Funciones
--------------------------*/

// Funcion simple con return
int nombreMetodo(int a, int b) {
	return a * b;
}

// Expresiones Lambda (función anónimas para trabajar con arrays, eventos, etc)
List<int> numbers = new List<int> { 1, 2, 3, 4, 5 };
var filtered = numbers.FindAll(x => x > 2);

// OUT (asignar valores en una funcion)
void GetValues(out int a, out int b) {
	a = 5; 
	b = 10;
}
GetValues(out int myA, out int myB);

// pasar una variable y cambiar su valor
void Func(ref int x){
   x = x*x;
}
int a= 3;
Func(ref a); // ahora a es 9








/* -------------------------
          Clases
--------------------------*/

// Clases y Objetos
public class Car {
	public string Brand { get; set; }
	public void Drive() {
		Console.WriteLine("Driving");
	}
}
Car myCar = new Car();
myCar.Brand = "Toyota";
myCar.Drive();

// Herencia y Polimorfismo
public class Vehicle {
		public virtual void Drive() {
				Console.WriteLine("Driving a vehicle");
		}
}
public class Car : Vehicle {
		public override void Drive() {
				Console.WriteLine("Driving a car");
		}
}

// Interfaces
public interface IDriveable {
		void Drive();
}

public class Car : IDriveable {
		public void Drive() {
				Console.WriteLine("Driving a car");
		}
}

// Generics
// (escribir clases y métodos con un marcador de posición para el tipo)
public class GenericList<T> {
	void Add(T input) { }
}
var list = new GenericList<int>();
list.Add(1);



// _______________________________________________________________________
// _______________________________________________________________________



//  try - Catch
try {
		// Código que puede generar excepciones
} catch (Exception ex) {
		// Manejo de la excepción
		Console.WriteLine(ex.Message);
}

// Throw
if (someCondition) {
		throw new InvalidOperationException("Algo salió mal");
}


// LINQ (Language Integrated Query)
/* método para consultar (bases de datos, archivos XML, colecciones) */
var numbers = new List() { 1, 2, 3, 4, 5 };
var evenNumbers = numbers.Where(n => n % 2 == 0);



// Manejo de StatusCode
// (cómo se debe proceder con la respuesta de solicitud HTTP en aplicaciones web.)
HttpResponseMessage response = await httpClient.GetAsync(url);
if (response.IsSuccessStatusCode) {
		// Procesar respuesta
} else {
		// Manejar errores o estados de respuesta no exitosos
}

/* -------------------------
					ASYNC
--------------------------*/

// Async y Await
public async Task GetNumberAsync() {
		await Task.Delay(1000);
		return 5;
}

// Task (operación asincrónica. para no bloquear el hilo principal.)
public async Task<int> CalculateValueAsync() {
		await Task.Delay(1000); // Simula un trabajo asincrónico
		return 42;
}

// Thread (realizar múltiples tareas a la vez en procesos separados.)
Thread myThread = new Thread(new ThreadStart(WorkMethod));
myThread.Start();

void WorkMethod() {
		// Código a ejecutar en el hilo
}

// Async Streams y IAsyncEnumerable
/* (permiten representar secuencias de datos que se obtienen de manera asíncrona, 
ideal para trabajar con flujos de datos en tiempo real) */
public async IAsyncEnumerable<int> GetNumbersAsync() {
		for (int i = 0; i < 10; i++) {
				await Task.Delay(100);
				yield return i;
		}
}








// _______________________________________________________________________
// _______________________________________________________________________



// Métodos de Extensión (crear un metodo para cualquier string) // TODO: 
public static class StringExtensions {
		public static int WordCount(this string str) {
				return str.Length;
		}
}
string text = "Hola mundo";
int count = text.WordCount();


// NULL y ? TODO:
int? nullableInt = null;
int result = nullableInt?.GetValueOrDefault() ?? -1;


// Pattern Matching
// verificar el tipo de un objeto y enlazar variables a sus propiedades en una única declaración.
object obj = "Hello World";
if (obj is string s) {
		Console.WriteLine($"String of length {s.Length}");
}



// Atributos y Anotaciones de Datos
// información adicional, utilizados en la serialización de datos y en frameworks ORM.
[Serializable]
public class MyClass {
		[Required]
		public string Name { get; set; }
}


// Entity Framework y ORM (manipular base de datos)
using (var context = new MyDbContext()) {
		var users = context.Users.ToList();
		// Trabajar con la lista de usuarios
}

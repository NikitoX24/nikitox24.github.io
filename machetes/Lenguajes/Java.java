import java.util.Scanner;
import javax.swing.*;

public class Java {
  public static void main(String[] args) {

  // Imprimir
    System.out.println(" ");

  // Variables
    String saludo = "hola"; // string
    int a = 1;              // int
    double b = 1.1;         // doble
    char c = 'a';           // char
    final int valor = 50;   // const

  // Entradas
    String tu_nombre; // String
    Scanner entrada = new Scanner(System.in);
    tu_nombre = entrada.next();

    int tu_edad; // Int
    Scanner entrada2 = new Scanner(System.in);
    tu_edad = entrada2.nextInt();

  // JOPTIONPANE
    String nombre; int edad;
    nombre = JOptionPane.showInputDialog(null, "Ingrese su nombre..");
    String edad2 = JOptionPane.showInputDialog(null, "Ingrese su edad..");
    edad = Integer.parseInt(edad2);
    JOptionPane.showMessageDialog(null, "Nombre: "+ nombre + "\n"+ "Edad: "+ edad);

  // Casting (convertir)
    // str -> int
    int numeroEntero = Integer.parseInt("123");

    // int -> str
    String numText = String.valueOf(456);

    // doble -> int
    int dobleEntero = (int)25.50;

    // int -> doble
    double enteroDoble = (double)78;


  // Arrays
    int[] array = new int[5];
    int[] array_numeros = {1, 2, 3, 4};

    // metodos Arrays
    Arrays.toString(array_numeros); // string
    Arrays.sort(array_numeros); // Ordenar
    Arrays.equals(array_numeros, array); // Comparar
    Arrays.fill(array, 1); // LLenar 
    Arrays.copyOf(array, 6); // Copiar y establecer cantidad (opcional)


  // Matrices 
    int[][] matrices = new int[3][3]; // 3x3
    matrices[0][0]; = 1;





  // Condicionales
    if (saludo == "a"){
      System.out.println(a);
    }else if (false){
    }else {
    }

  // Switch
    int dia = 2;
    switch(dia){
      case 1:
        System.out.println("Lunes");
        break;
      case 2:
        System.out.println("Martes");
        break;
      default:
        System.out.println("Numero incorrecto!");
        break;        
    }

  // Rule Switch (mejorada)
    int dia2 = 2;
    switch(dia2) {
      case 1 -> System.out.println("Lunes");
      case 2 -> System.out.println("Martes");
      default -> System.out.println("Numero incorrecto!");
    } 


  // Metodos de Strings
    String palabra1 = "texto";
    String palabra2 = "TEXTO";

    // Comprobar si son iguales
    palabra1.equals(palabra2); // no son iguales (CaseSensitive)
    palabra1.equalsIgnoreCase(palabra2); // son iguales (SIN CaseSensitive)

    palabra1.compareTo(palabra2)==0; // palabra1 tiene la misma cantidad letras que palabra2

    palabra1.endswith("xt");

    // primer caracter
    palabra1.charAt(0); // t

    // cantidad de caracteres
    palabra1.length(); // 5

    // sustraer caracteres
    palabra1.substring(0, 3); // tex

    // comprobar contiene X caracter
    palabra1.indexOf("te"); // 1

    // Cambiar a Mayusculas/Minusculas
    palabra1.toUpperCase();
    palabra2.toLowerCase();


  

  // Bucles

    // While
    int I = 0;
    while (I < 5){
      I++;
    }

    // Do While
    do{
      // ejecutar al menos una vez
      I++;
    }while(I< 5);

    // For
    for (int i = 0; i < 3; i++){
      System.out.print("");
    }


  // POO
    // Class
    class Persona{
      String nombre = "José";
      int edad = 30;
      double peso = 86.30;
      boolean soltero = true;

      String Saludar(){ return "Hola, me llamo " + nombre; } // Metodo get
      void establecerPeso(double peso){ this.peso = peso; } // Metodo set

      public static void main(String[] args){
        Persona persona1 = new Persona(); // Instanciar una clase
      }
    }


    // Clase con Constructor
    class Alumnos{
      String nombre, asignatura;
      int nota;

      // Constructor
      public Alumnos(){
        nombre = "Miguel";
        nota = 80;
      }

      // sobrecarga de metodos constructores (pasar parametros)
      public Alumnos(String asignatura){
        this.asignatura = asignatura;
      }

      // Get
      String GetNombre(){
        return nombre;
      }
      // Set
      void SetNota(int nuevaNota){
        nota = nuevaNota;
      }
    }
    Alumnos Alumno = new Alumnos("Matematicas");
    Alumno.GetNombre();



    // Paquetes (video 48)
    package Clases;
    import Clases.archivoClase;



  }
}
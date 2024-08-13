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
    int[] array2 = {1, 2, 3, 4};
    



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





    

  }
}
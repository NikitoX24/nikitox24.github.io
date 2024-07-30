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
        String tunombre;
        Scanner entrada = new Scanner(System.in);
        tunombre = entrada.next();

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

    // Condicionales
        if (saludo == "a"){
          System.out.println(a);
        }else if (false){
        }else {
        }

    // 


    }
}



















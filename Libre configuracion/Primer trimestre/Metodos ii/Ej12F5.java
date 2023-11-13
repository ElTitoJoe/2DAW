import java.util.Scanner;

public class Ej12F5 {

    public static boolean esPar(int numero) {
        return numero % 2 == 0;
    }

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.println("Ingrese una secuencia de enteros, para salir inrgese 0:");

        while (true) {
            System.out.print("Ingrese un entero: ");
            int numero = teclado.nextInt();

            if (numero == 0) {
                System.out.println("Saliendo del programa. ¡Hasta luego!");
                break;
            }

            if (esPar(numero)) {
                System.out.println(numero + " es un número par.");
            } else {
                System.out.println(numero + " es un número impar.");
            }
        }

        teclado.close();
    }
}

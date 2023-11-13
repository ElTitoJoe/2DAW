import java.util.Scanner;

public class Ej16F5 {

    public static int calcularParteEnteraCociente(int a, int b) {
        return a / b;
    }

    public static int calcularResiduoEntero(int a, int b) {
        return a % b;
    }

    public static void mostrarDigitos(int numero) {
        System.out.println(numero);
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        while (true) {
            System.out.println("Seleccione una opción:");
            System.out.println("1. Calcular parte entera del cociente");
            System.out.println("2. Calcular residuo entero");
            System.out.println("3. Mostrar dígitos");
            System.out.println("4. Salir");

            int opcion = scanner.nextInt();

            switch (opcion) {
                case 1:
                    System.out.print("Ingrese el valor de a: ");
                    int a = scanner.nextInt();
                    System.out.print("Ingrese el valor de b: ");
                    int b = scanner.nextInt();
                    System.out.println("Parte entera del cociente: " + calcularParteEnteraCociente(a, b));
                    break;

                case 2:
                    System.out.print("Ingrese el valor de a: ");
                    int c = scanner.nextInt();
                    System.out.print("Ingrese el valor de b: ");
                    int d = scanner.nextInt();
                    System.out.println("Residuo entero: " + calcularResiduoEntero(c, d));
                    break;

                case 3:
                    System.out.print("Ingrese un entero entre 1 y 99999: ");
                    int numero = scanner.nextInt();
                    if (numero < 1 || numero > 99999) {
                        System.out.println("El número debe estar entre 1 y 99999.");
                    } else {
                        mostrarDigitos(numero);
                    }
                    break;

                case 4:
                    System.out.println("Saliendo del programa. ¡Hasta luego!");
                    scanner.close();
                    System.exit(0);

                default:
                    System.out.println("Opción no válida. Inténtelo de nuevo.");
            }
        }
    }
}


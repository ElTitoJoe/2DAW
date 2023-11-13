import java.util.Scanner;

public class Ej17F5 {

    public static int calcularParteEnteraCociente(int a, int b) {
        return a / b;
    }

    public static int calcularResiduoEntero(int a, int b) {
        return a % b;
    }

    public static void mostrarDigitos(int numero) {

        String numeroStr = Integer.toString(numero);


        for (int i = 0; i < numeroStr.length(); i++) {
            System.out.print(numeroStr.charAt(i) + "  ");
        }
        System.out.println();
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Ingrese el primer número (a): ");
        int a = scanner.nextInt();

        System.out.print("Ingrese el segundo número (b): ");
        int b = scanner.nextInt();

        int parteEnteraCociente = calcularParteEnteraCociente(a, b);
        System.out.println("La parte entera del cociente de " + a + " entre " + b + " es: " + parteEnteraCociente);

        int residuo = calcularResiduoEntero(a, b);
        System.out.println("El residuo de " + a + " entre " + b + " es: " + residuo);

        System.out.print("Ingrese un número entre 1 y 99999: ");
        int numeroParaMostrar = scanner.nextInt();

        if (numeroParaMostrar >= 1 && numeroParaMostrar <= 99999) {

            System.out.print("Los dígitos de " + numeroParaMostrar + " son: ");
            mostrarDigitos(numeroParaMostrar);
        } else {
            System.out.println("El número debe estar entre 1 y 99999.");
        }

        scanner.close();
    }
}
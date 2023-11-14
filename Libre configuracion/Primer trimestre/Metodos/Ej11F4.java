import java.util.Scanner;

public class Ej11F4 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        while (true) {
            System.out.print("Ingresa el primer numero o -1 para salir ");
            int num1 = teclado.nextInt();
            System.out.print("Ingresa el segundo numero o -1 para salir ");
            int num2 = teclado.nextInt();

            if (num1 == -1 || num2 == -1) {
                break;
            }

            boolean esMultiplo = esMultiplo(num1, num2);

            if (esMultiplo) {
                System.out.println(num2 + " es múltiplo de " + num1);
            } else {
                System.out.println(num2 + " no es múltiplo de " + num1);
            }
        }

        System.out.println("Programa finalizado.");
        teclado.close();
    }

    public static boolean esMultiplo(int num1, int num2) {
        return num2 % num1 == 0;
    }
}

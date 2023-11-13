import java.util.Scanner;

public class Ej14F5 {

    public static void cuadradoDeAsteriscos(int lado, char caracterRelleno) {
        for (int i = 0; i < lado; i++) {
            for (int j = 0; j < lado; j++) {
                System.out.print(caracterRelleno + " ");
            }
            System.out.println(); // Nueva línea después de cada fila
        }
    }

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese el valor para el parámetro lado: ");
        int lado = teclado.nextInt();

        teclado.nextLine();

        System.out.print("Ingrese el carácter para el parámetro caracterRelleno: ");
        char caracterRelleno = teclado.nextLine().charAt(0);

        cuadradoDeAsteriscos(lado, caracterRelleno);

        teclado.close();
    }
}


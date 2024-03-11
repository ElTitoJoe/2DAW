import java.util.Scanner;

public class Ej13F5 {

    public static void cuadradoDeAsteriscos(int lado) {
        for (int i = 0; i < lado; i++) {
            for (int j = 0; j < lado; j++) {
                System.out.print("#");
            }
            System.out.println();
        }
    }

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese el valor para el parámetro lado: ");
        int lado = teclado.nextInt();

        teclado.nextLine();


        cuadradoDeAsteriscos(lado);

        teclado.close();
    }
}

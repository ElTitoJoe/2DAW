import java.util.Scanner;

public class Ej4F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese una línea de texto: ");
        String entrada = teclado.nextLine();

        String enMayusculas = entrada.toUpperCase();
        System.out.println("En mayúsculas: " + enMayusculas);

        String enMinusculas = entrada.toLowerCase();
        System.out.println("En minúsculas: " + enMinusculas);

        teclado.close();
    }
}


import java.util.Scanner;

public class Ej8F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.print("Ingrese una línea de texto: ");
        String linea = teclado.nextLine();
        String[] palabras = linea.split(" ");

        System.out.println("Palabras que comienzan con 'ED':");
        for (String palabra : palabras) {
            palabra = palabra.replaceAll("[^a-zA-Z]", "");

            if (palabra.toUpperCase().startsWith("ED")) {
                System.out.println(palabra);
            }
        }

        teclado.close();
    }
}

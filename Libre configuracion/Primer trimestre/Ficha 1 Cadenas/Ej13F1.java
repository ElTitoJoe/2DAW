import java.util.*;

public class Ej13F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.print("Ingrese una línea de texto: ");
        String texto = teclado.nextLine();
        String[] palabras = texto.split("\\s+");
        int[] contadorPalabras = new int[texto.length() + 1];

        for (String palabra : palabras) {
            int longitud = palabra.length();
            contadorPalabras[longitud]++;
        }

        System.out.println("Longitud de Palabra\tCantidad");
        for (int i = 1; i < contadorPalabras.length; i++) {
            int cantidad = contadorPalabras[i];
            if (cantidad > 0) {
                System.out.println(i + "\t\t\t" + cantidad);
            }
        }

        teclado.close();
    }
}

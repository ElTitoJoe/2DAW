import java.util.Scanner;

public class Ej6F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese una línea de texto: ");
        String texto = teclado.nextLine();

        texto = texto.toLowerCase();

        int[] contadorLetras = new int[26];

        for (int i = 0; i < texto.length(); i++) {
            char caracter = texto.charAt(i);
            if (caracter >= 'a' && caracter <= 'z') {
                int indice = caracter - 'a';
                contadorLetras[indice]++;
            }
        }

        System.out.println("Letra\tCantidad");
        for (char letra = 'a'; letra <= 'z'; letra++) {
            int indice = letra - 'a';
            int cantidad = contadorLetras[indice];
            if (cantidad > 0) {
                System.out.println(letra + "\t" + cantidad);
            }
        }

        teclado.close();
    }
}

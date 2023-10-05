import java.util.*;

public class Ej12F1 {
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
        
        for (char letra = 'a'; letra <= 'z'; letra++) {
            int indice = letra - 'a';
            int cantidad = contadorLetras[indice];
            System.out.println(letra + "\t" + cantidad);
        }

        teclado.close();
    }
}

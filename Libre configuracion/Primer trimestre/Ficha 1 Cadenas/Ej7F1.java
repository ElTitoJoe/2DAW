import java.util.Scanner;

public class Ej7F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.print("Ingrese una línea de texto: ");
        String linea = teclado.nextLine();
        String[] palabras = linea.split(" ");
        System.out.println("Palabras que comienzan con 'b':");
        
        for (String palabra : palabras) {
            palabra = palabra.replaceAll("[^a-zA-Z]", "");
            
            if (palabra.toLowerCase().startsWith("b")) {
                System.out.println(palabra);
            }
        }

        teclado.close();
    }
}


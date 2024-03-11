import java.util.Scanner;

public class Ej5F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese una cadena de texto: ");
        String texto = teclado.nextLine();

        System.out.print("Dime que carácter quieres que contemos: ");
        char caracterContar = teclado.next().charAt(0);

        int contador = 0;

        int posicion = 0;

        while (posicion != -1) {
            posicion = texto.indexOf(caracterContar, posicion);
            if (posicion != -1) {
                contador++;
                posicion++;
            }
        }

        System.out.println("El carácter '" + caracterContar + "' aparece " + contador + " veces en la cadena de texto.");

        teclado.close();
    }
}


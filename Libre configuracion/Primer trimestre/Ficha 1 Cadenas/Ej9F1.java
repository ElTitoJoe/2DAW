import java.util.Scanner;

public class Ej9F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        System.out.print("Ingrese un código entero para un carácter: ");
        int codigo = teclado.nextInt();
        char caracter = (char) codigo;
        System.out.println("El carácter correspondiente al código " + codigo + " es: " + caracter);
        teclado.close();
    }
}


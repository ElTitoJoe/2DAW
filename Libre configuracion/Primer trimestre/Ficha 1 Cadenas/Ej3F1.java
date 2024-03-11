import java.util.Scanner;

public class Ej3F1 {
    public static void main(String[] args){

        Scanner teclado = new Scanner(System.in);
        System.out.print("Ingrese la primera cadena: ");
        String cadena1 = teclado.nextLine();

        System.out.print("Ingrese la segunda cadena: ");
        String cadena2 = teclado.nextLine();

        int resultado = cadena1.compareTo(cadena2);

        if (resultado < 0) {
            System.out.println("La primera cadena es menor que la segunda.");
        } else if (resultado > 0) {
            System.out.println("La primera cadena es mayor que la segunda.");
        } else {
            System.out.println("Las cadenas son iguales.");
        }

        teclado.close();
    }
}

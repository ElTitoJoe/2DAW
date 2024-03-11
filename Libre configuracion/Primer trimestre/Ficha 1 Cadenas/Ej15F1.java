import java.util.Scanner;

public class Ej15F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese la cantidad del cheque: ");
        double cantidad = teclado.nextDouble();
        String cantidadFormateada = String.format("%.2f", cantidad);
        int longitud = cantidadFormateada.length();
        if (longitud < 9) {
            int asteriscos = 9 - longitud;
            String asteriscosStr = "*".repeat(asteriscos);
            cantidadFormateada = asteriscosStr + cantidadFormateada;
        }
        
        System.out.println("Cantidad en formato de protección de cheques: " + cantidadFormateada);

        teclado.close();
    }
}

import java.util.Scanner;

public class Ej7F4 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.println("Ingrese numoros decimales, si quieres salir introduce un -1):");
        double numero;
        
        while (true) {
            System.out.print("Número: ");
            numero = teclado.nextDouble();
            
            if (numero == -1) {
                break;
            }
            
            double redondeado = redondear(numero);
            
            System.out.println("Número original: " + numero);
            System.out.println("Redondeado: " + redondeado);
        }

        System.out.println("Programa finalizado.");
    }

    public static double redondear(double numero) {
        return Math.floor(numero + 0.5);
    }
}

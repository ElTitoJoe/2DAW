import java.util.Scanner;

public class Ej15F5 {

    public static double calcularAreaCirculo(double radio) {
        return Math.PI * Math.pow(radio, 2);
    }

    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese el radio del círculo: ");
        double radio = teclado.nextDouble();

        if (radio <= 0) {
            System.out.println("El radio debe ser un número positivo.");
        } else {
            double area = calcularAreaCirculo(radio);
            System.out.println("El área del círculo con radio " + radio + " es: " + area);
        }

        teclado.close();
    }
}

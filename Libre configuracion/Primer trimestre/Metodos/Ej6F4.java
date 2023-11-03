import java.util.Scanner;

public class Ej6F4 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        double totalRecibos = 0.0;

        while (true) {
            System.out.print("Introduce las horas de estacionamiento, si no quedan mas estacionamientos introduce -1): ");
            double horas = teclado.nextDouble();

            if (horas == -1) {
                break;
            }

            double pago = calcularPago(horas);
            totalRecibos += pago;

            System.out.println("El pago para el cliente actual es: " + pago + "€");
        }

        System.out.println("El total de los recibos de ayer es: " + totalRecibos + "€");
    }

    public static double calcularPago(double horas) {
        double tarifaMinima = 2.00;
        double tarifaPorHora = 0.50;
        double tarifaMaxima = 10.00;

        if (horas <= 3) {
            return tarifaMinima;
        } else if (horas <= 24) {
            double horasExtras = horas - 3;
            double pago = tarifaMinima + (horasExtras * tarifaPorHora);
            return Math.min(pago, tarifaMaxima);
        } else {
            return tarifaMaxima;
        }
    }
}

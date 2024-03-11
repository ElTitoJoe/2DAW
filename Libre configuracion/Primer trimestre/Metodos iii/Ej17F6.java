import java.util.Scanner;

public class Ej17F6 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.println("Seleccione una opción:");
        System.out.println("1. Fahrenheit a Celsius");
        System.out.println("2. Celsius a Fahrenheit");
        System.out.println("0.Salir");
        int opcion = teclado.nextInt();

        switch (opcion) {
            case 1:
                System.out.println("Ingrese la temperatura en grados Fahrenheit:");
                double fahrenheit = teclado.nextDouble();
                double celsius = fahrenheitACelsius(fahrenheit);
                System.out.println("Equivalente en Celsius: " + celsius);
                break;
            case 2:
                System.out.println("Ingrese la temperatura en grados Celsius:");
                double celsiusInput = teclado.nextDouble();
                double fahrenheitOutput = celsiusAFahrenheit(celsiusInput);
                System.out.println("Equivalente en Fahrenheit: " + fahrenheitOutput);
                break;
            default:
                System.out.println("Opción no válida");
        }

        teclado.close();
    }

    public static double fahrenheitACelsius(double fahrenheit) {
        return 5.0 / 9.0 * (fahrenheit - 32);
    }

    public static double celsiusAFahrenheit(double celsius) {
        return 9.0 / 5.0 * celsius + 32;
    }
}


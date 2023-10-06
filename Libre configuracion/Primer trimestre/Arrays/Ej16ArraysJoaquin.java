import java.util.Scanner;

public class Ej16ArraysJoaquin {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        double[][] ventas = new double[5][4];

        for (int vendedor = 0; vendedor < 4; vendedor++) {
            for (int producto = 0; producto < 5; producto++) {
                System.out.printf("Ingrese las ventas del vendedor %d para el producto %d: ", vendedor + 1, producto + 1);
                ventas[producto][vendedor] = teclado.nextDouble();
            }
        }

        System.out.println("\nTabla de Ventas:");
        System.out.print("\t\t");
        for (int vendedor = 0; vendedor < 4; vendedor++) {
            System.out.printf("Vendedor %d\t", vendedor + 1);
        }
        System.out.println("Total");

        for (int producto = 0; producto < 5; producto++) {
            double totalProducto = 0;
            System.out.printf("Producto %d\t", producto + 1);

            for (int vendedor = 0; vendedor < 4; vendedor++) {
                System.out.printf("%.2f\t\t", ventas[producto][vendedor]);
                totalProducto += ventas[producto][vendedor];
            }

            System.out.printf("%.2f\n", totalProducto);
        }

        System.out.print("Total\t\t");
        double totalVendedor = 0;
        for (int vendedor = 0; vendedor < 4; vendedor++) {
            for (int producto = 0; producto < 5; producto++) {
                totalVendedor += ventas[producto][vendedor];
            }
            System.out.printf("%.2f\t\t", totalVendedor);
            totalVendedor = 0;
        }

        double totalGeneral = 0;
        for (int producto = 0; producto < 5; producto++) {
            for (int vendedor = 0; vendedor < 4; vendedor++) {
                totalGeneral += ventas[producto][vendedor];
            }
        }
        System.out.printf("%.2f\n", totalGeneral);
    }
}

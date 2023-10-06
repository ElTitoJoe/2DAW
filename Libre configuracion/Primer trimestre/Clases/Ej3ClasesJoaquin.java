import java.util.Scanner;

public class Ej3ClasesJoaquin {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        System.out.println("Introduce la longitud del rectángulo: ");
        double longitud = scanner.nextDouble();
        
        System.out.println("Introduce la anchura del rectángulo: ");
        double anchura = scanner.nextDouble();

        Rectangulo miRectangulo = new Rectangulo();

        // Establecemos la longitud y anchura del rectángulo
        miRectangulo.establecerLongitud(longitud);
        miRectangulo.establecerAnchura(anchura);

        // Mostramos la longitud y anchura
        System.out.println("Longitud: " + miRectangulo.obtenerLongitud());
        System.out.println("Anchura: " + miRectangulo.obtenerAnchura());

        // Calculamos y mostramos el área y el perímetro
        System.out.println("Área: " + miRectangulo.calcularArea());
        System.out.println("Perímetro: " + miRectangulo.calcularPerimetro());

        scanner.close();
    }
}

class Rectangulo {
    private double longitud;
    private double anchura;

    // Constructor por defecto con valores predeterminados
    public Rectangulo() {
        longitud = 1.0;
        anchura = 1.0;
    }

    // Método para establecer la longitud
    public void establecerLongitud(double nuevaLongitud) {
        if (nuevaLongitud > 0.0 && nuevaLongitud < 20.0) {
            longitud = nuevaLongitud;
        } else {
            System.out.println("Valor de longitud no válido.");
        }
    }

    // Método para obtener la longitud
    public double obtenerLongitud() {
        return longitud;
    }

    // Método para establecer la anchura
    public void establecerAnchura(double nuevaAnchura) {
        if (nuevaAnchura > 0.0 && nuevaAnchura < 20.0) {
            anchura = nuevaAnchura;
        } else {
            System.out.println("Valor de anchura no válido.");
        }
    }

    // Método para obtener la anchura
    public double obtenerAnchura() {
        return anchura;
    }

    // Método para calcular el área del rectángulo
    public double calcularArea() {
        return longitud * anchura;
    }

    // Método para calcular el perímetro del rectángulo
    public double calcularPerimetro() {
        return 2 * (longitud + anchura);
    }
}


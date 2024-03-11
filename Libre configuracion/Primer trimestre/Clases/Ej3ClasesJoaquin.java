import java.util.Scanner;
public class Ej3ClasesJoaquin {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Introduce la longitud del rectángulo: ");
        double longitud = scanner.nextDouble();
        System.out.println("Introduce la anchura del rectángulo: ");
        double anchura = scanner.nextDouble();
        Rectangulo miRectangulo = new Rectangulo();
        miRectangulo.establecerLongitud(longitud);
        miRectangulo.establecerAnchura(anchura);
        System.out.println("Longitud: " + miRectangulo.obtenerLongitud());
        System.out.println("Anchura: " + miRectangulo.obtenerAnchura());
        System.out.println("Área: " + miRectangulo.calcularArea());
        System.out.println("Perímetro: " + miRectangulo.calcularPerimetro());
        scanner.close();
    }
}

class Rectangulo {
    private double longitud;
    private double anchura;
    public Rectangulo() {
        longitud = 1.0;
        anchura = 1.0;
    }

    public void establecerLongitud(double nuevaLongitud) {
        if (nuevaLongitud > 0.0 && nuevaLongitud < 20.0) {
            longitud = nuevaLongitud;
        } else {
            System.out.println("Valor de longitud no válido.");
        }
    }

    public double obtenerLongitud() {
        return longitud;
    }

    public void establecerAnchura(double nuevaAnchura) {
        if (nuevaAnchura > 0.0 && nuevaAnchura < 20.0) {
            anchura = nuevaAnchura;
        } else {
            System.out.println("Valor de anchura no válido.");
        }
    }

    public double obtenerAnchura() {
        return anchura;
    }

    public double calcularArea() {
        return longitud * anchura;
    }

    public double calcularPerimetro() {
        return 2 * (longitud + anchura);
    }
}


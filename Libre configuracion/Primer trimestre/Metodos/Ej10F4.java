public class Ej10F4 {
    public static void main(String[] args) {
        double lado1 = 8.0;
        double lado2 = 12.0;
        double hipotenusa1 = calcularHipotenusa(lado1, lado2);

        System.out.println("Triángulo 1:");
        System.out.println("Lado 1: " + lado1);
        System.out.println("Lado 2: " + lado2);
        System.out.println("Hipotenusa: " + hipotenusa1);

        double lado3 = 15.0;
        double hipotenusa2 = calcularHipotenusa(lado1, lado3);

        System.out.println("Triángulo 2:");
        System.out.println("Lado 1: " + lado1);
        System.out.println("Lado 2: " + lado3);
        System.out.println("Hipotenusa: " + hipotenusa2);
    }

    public static double calcularHipotenusa(double lado1, double lado2) {
        return Math.sqrt(Math.pow(lado1, 2) + Math.pow(lado2, 2));
    }
}

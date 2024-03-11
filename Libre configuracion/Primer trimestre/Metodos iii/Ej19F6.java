public class Ej19F6 {
    public static void main(String[] args) {
        System.out.println("Números perfectos entre 1 y 1000:");
        for (int i = 1; i <= 10000; i++) {
            if (esNumeroPerfecto(i)) {
                System.out.println("Número perfecto encontrado: " + i);
            }
        }
    }

    public static boolean esNumeroPerfecto(int numero) {
        int suma = 1; // Inicializamos la suma con 1 (el primer factor)

        for (int i = 2; i * i <= numero; i++) {
            if (numero % i == 0) {
                suma += i;
                if (i * i != numero) {
                    suma += numero / i;
                }
            }
        }

        return suma == numero && numero != 1;
    }
}

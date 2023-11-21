import java.util.Scanner;
public class Ej26F6 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        boolean jugarOtraVez = true;

        while (jugarOtraVez) {
            int numeroAdivinar = generarNumeroAleatorio();
            boolean adivinado = false;

            System.out.println("Adivina un número entre 1 y 100:");
            while (!adivinado) {
                int intento = teclado.nextInt();
                if (intento == numeroAdivinar) {
                    System.out.println("¡Felicidades! ¡Adivinaste el número!");
                    adivinado = true;
                } else if (intento < numeroAdivinar) {
                    System.out.println("Demasiado bajo. Intente de nuevo.");
                } else {
                    System.out.println("Demasiado alto. Intente de nuevo.");
                }
            }

            System.out.println("¿Deseas jugar otra vez? (s/n)");
            String opcion = teclado.next();
            jugarOtraVez = opcion.equalsIgnoreCase("s");
        }

        teclado.close();
    }

    public static int generarNumeroAleatorio() {
        int numeroAleatorio = (int) (Math.random() * 100) + 1;
        return numeroAleatorio;
    }
}

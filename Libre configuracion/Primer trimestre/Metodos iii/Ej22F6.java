import java.util.Scanner;

public class Ej22F6 {
public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        int caraCount = 0;
        int cruzCount = 0;
        int totalLanzamientos = 100; 

        for (int i = 0; i < totalLanzamientos; i++) {
            boolean resultado = tirar();
            if (resultado == true) {
                caraCount++;
                System.out.println("Cara");
            } else {
                cruzCount++;
                System.out.println("Cruz");
            }
        }

        System.out.println("Total de caras: " + caraCount);
        System.out.println("Total de cruces: " + cruzCount);
        
        teclado.close();
    }

    public static boolean tirar() {
        double random = Math.random();
        
        if (random < 0.5) {
            return true;
        } else {
            return false;
        }
    }
}

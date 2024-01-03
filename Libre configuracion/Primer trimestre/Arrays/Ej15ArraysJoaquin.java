import java.util.Scanner;
public class Ej15ArraysJoaquin {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        boolean[] asientos = new boolean[10]; 

        while (true) {
            System.out.println("Estas dentro del menú:");
            System.out.println("1.Primera clase");
            System.out.println("2.Clase comercial");
            int eleccion = teclado.nextInt();

            if (eleccion == 1 || eleccion == 2) {
                int asientoAsignado = asignarAsiento(asientos, eleccion);
                if (asientoAsignado != -1) {
                    imprimirTarjetaEmbarque(asientoAsignado, eleccion);
                } else {
                    System.out.println("Lo siento, el avión está lleno. ¿Desea tomar el próximo vuelo en 3 horas? (S para salir)");
                    char respuesta = teclado.next().charAt(0);
                    if (respuesta == 'S' || respuesta == 's') {
                        break;
                    }
                }
            } else {
                System.out.println("La opcion marcada no está dentro de las opciones.");
            }
        }

        System.out.println("Gracias por utilizar nuestro sistema de reservas.");
        teclado.close();
    }

    private static int asignarAsiento(boolean[] asientos, int eleccion) {
        int asientoAsignado = -1;

        if (eleccion == 1) {
            for (int i = 0; i < 5; i++) {
                if (!asientos[i]) {
                    asientos[i] = true;
                    asientoAsignado = i + 1;
                    break;
                }
            }
        } else if (eleccion == 2) {
            for (int i = 5; i < 10; i++) {
                if (!asientos[i]) {
                    asientos[i] = true;
                    asientoAsignado = i + 1;
                    break;
                }
            }
        }

        return asientoAsignado;
    }

    private static void imprimirTarjetaEmbarque(int asiento, int eleccion) {
        String seccion = (eleccion == 1) ? "Primera Clase" : "Clase Económica";
        System.out.println("*****************************************");
        System.out.println("*        Tarjeta de Embarque           *");
        System.out.println("* Asiento: " + asiento + " - " + seccion);
        System.out.println("*****************************************");
    }
}
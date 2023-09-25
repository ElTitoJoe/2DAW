/*
Pedir por teclado una cadena
Mostrar menú:
Mostrarla al revés
Contar el nº de vocales
Contar el nº de consonantes
Pasar todo a minúscula
Pasar todo a mayúscula
Decir si es palíndroma 
*/
import java.util.Scanner;
    public class CadenasJoaquin {
        public static void main(String[] args) {
            Scanner scanner = new Scanner(System.in);
            boolean salir = false;

            while (!salir) {
                System.out.print("Ingrese una cadena: ");
                String cadena = scanner.nextLine();

                salir = menu(cadena, scanner);
            }

            scanner.close();
        }

        public static boolean menu(String cadena, Scanner scanner) {
            System.out.println("Menú:");
            System.out.println("1. Mostrar la cadena al revés");
            System.out.println("2. Contar el número de vocales");
            System.out.println("3. Contar el número de consonantes");
            System.out.println("4. Pasar a minúscula");
            System.out.println("5. Pasar a mayúscula");
            System.out.println("6. Comprobar si es palíndroma");
            System.out.println("7. Salir");
            System.out.print("Seleccione una opción: ");

            int opcion = scanner.nextInt();
            scanner.nextLine();

            switch (opcion) {
                case 1:
                    String cadenaAlReves = new StringBuilder(cadena).reverse().toString();
                    System.out.println("Cadena al revés: " + cadenaAlReves);
                    break;

                case 2:
                    int numVocales = contarVocales(cadena);
                    System.out.println("Número de vocales: " + numVocales);
                    break;

                case 3:
                    int numConsonantes = contarConsonantes(cadena);
                    System.out.println("Número de consonantes: " + numConsonantes);
                    break;

                case 4:
                    String enMinusculas = cadena.toLowerCase();
                    System.out.println("En minúscula: " + enMinusculas);
                    break;

                case 5:
                    String enMayusculas = cadena.toUpperCase();
                    System.out.println("En mayúscula: " + enMayusculas);
                    break;

                case 6:
                    boolean esPalindroma = esPalindroma(cadena);
                    if (esPalindroma) {
                        System.out.println("La cadena es palíndroma.");
                    } else {
                        System.out.println("La cadena no es palíndroma.");
                    }
                    break;

                case 7:
                    System.out.println("Saliendo del programa.");
                    return true;

                default:
                    System.out.println("Esa opción no está dentro de los parámetros.");
            }

            return false;
        }

        public static int contarVocales(String cadena) {
            int contador = 0;
            cadena = cadena.toLowerCase();
            for (int i = 0; i < cadena.length(); i++) {
                char caracter = cadena.charAt(i);
                if (caracter == 'a' || caracter == 'e' || caracter == 'i' || caracter == 'o' || caracter == 'u') {
                    contador++;
                }
            }
            return contador;
        }

        public static int contarConsonantes(String cadena) {
            int contador = 0;
            cadena = cadena.toLowerCase();
            for (int i = 0; i < cadena.length(); i++) {
                char caracter = cadena.charAt(i);
                if (Character.isLetter(caracter) && caracter != 'a' && caracter != 'e' && caracter != 'i'
                        && caracter != 'o' && caracter != 'u') {
                    contador++;
                }
            }
            return contador;
        }

        public static boolean esPalindroma(String cadena) {
            cadena = cadena.toLowerCase();
            int izquierda = 0;
            int derecha = cadena.length() - 1;
            while (izquierda < derecha) {
                if (cadena.charAt(izquierda) != cadena.charAt(derecha)) {
                    return false;
                }
                izquierda++;
                derecha--;
            }
            return true;
    }
}

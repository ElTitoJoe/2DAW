import java.util.Scanner;

public class Ej16F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.println("Elija una opción:");
        System.out.println("1. Codificar una frase en español a clave Morse");
        System.out.println("2. Decodificar una frase en clave Morse a español");
        System.out.print("Ingrese el número de la opción deseada: ");
        int opcion = teclado.nextInt();
        teclado.nextLine();

        switch (opcion) {
            case 1:
                System.out.print("Ingrese una frase en español: ");
                String fraseEspanol = teclado.nextLine().toLowerCase();
                String morseFrase = codificarAMorse(fraseEspanol);
                System.out.println("Frase en clave Morse: " + morseFrase);
                break;
            case 2:
                System.out.print("Ingrese una frase en clave Morse: ");
                String morseFrase2 = teclado.nextLine();
                String espanolFrase = decodificarDesdeMorse(morseFrase2);
                System.out.println("Frase en español: " + espanolFrase);
                break;
            default:
                System.out.println("Opción no válida.");
                break;
        }

        teclado.close();
    }

    public static String codificarAMorse(String frase) {
        StringBuilder morseFrase = new StringBuilder();
        for (char caracter : frase.toCharArray()) {
            String codigo = obtenerCodigoMorse(caracter);
            if (!codigo.isEmpty()) {
                morseFrase.append(codigo).append(" ");
            } else if (caracter == ' ') {
                morseFrase.append("   ");
            }
        }
        return morseFrase.toString();
    }

    public static String decodificarDesdeMorse(String morseFrase) {
        StringBuilder espanolFrase = new StringBuilder();
        String[] palabras = morseFrase.split("   ");
        for (String palabra : palabras) {
            String[] letras = palabra.split(" ");
            for (String letra : letras) {
                char caracter = obtenerCaracterDesdeMorse(letra);
                espanolFrase.append(caracter);
            }
            espanolFrase.append(' ');
        }
        return espanolFrase.toString();
    }

    public static String obtenerCodigoMorse(char caracter) {
        switch (caracter) {
            case 'a':
                return ".-";
            case 'b':
                return "-...";
            case 'c':
                return "-.-.";
            case 'd':
                return "-..";
            case 'e':
                return ".";
            case 'f':
                return "..-.";
            case 'g':
                return "--.";
            case 'h':
                return "....";
            case 'i':
                return "..";
            case 'j':
                return ".---";
            case 'k':
                return "-.-";
            case 'l':
                return ".-..";
            case 'm':
                return "--";
            case 'n':
                return "-.";
            case 'o':
                return "---";
            case 'p':
                return ".--.";
            case 'q':
                return "--.-";
            case 'r':
                return ".-.";
            case 's':
                return "...";
            case 't':
                return "-";
            case 'u':
                return "..-";
            case 'v':
                return "...-";
            case 'w':
                return ".--";
            case 'x':
                return "-..-";
            case 'y':
                return "-.--";
            case 'z':
                return "--..";
            case '0':
                return "-----";
            case '1':
                return ".----";
            case '2':
                return "..---";
            case '3':
                return "...--";
            case '4':
                return "....-";
            case '5':
                return ".....";
            case '6':
                return "-....";
            case '7':
                return "--...";
            case '8':
                return "---..";
            case '9':
                return "----.";
            default:
                return "";
        }
    }

    public static char obtenerCaracterDesdeMorse(String letraMorse) {
        switch (letraMorse) {
            case ".-":
                return 'a';
            case "-...":
                return 'b';
            case "-.-.":
                return 'c';
            case "-..":
                return 'd';
            case ".":
                return 'e';
            case "..-.":
                return 'f';
            case "--.":
                return 'g';
            case "....":
                return 'h';
            case "..":
                return 'i';
            case ".---":
                return 'j';
            case "-.-":
                return 'k';
            case ".-..":
                return 'l';
            case "--":
                return 'm';
            case "-.":
                return 'n';
            case "---":
                return 'o';
            case ".--.":
                return 'p';
            case "--.-":
                return 'q';
            case ".-.":
                return 'r';
            case "...":
                return 's';
            case "-":
                return 't';
            case "..-":
                return 'u';
            case "...-":
                return 'v';
            case ".--":
                return 'w';
            case "-..-":
                return 'x';
            case "-.--":
                return 'y';
            case "--..":
                return 'z';
            case "-----":
                return '0';
            case ".----":
                return '1';
            case "..---":
                return '2';
            case "...--":
                return '3';
            case "....-":
                return '4';
            case ".....":
                return '5';
            case "-....":
                return '6';
            case "--...":
                return '7';
            case "---..":
                return '8';
            case "----.":
                return '9';
            default:
                return '?'; // Caracter desconocido
        }
    }
}


import java.io.*;
import java.util.Scanner;

public class Principal {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);
        boolean salir = false;

        do {
            System.out.println("Elige una opción:");
            System.out.println("1. Leer y mostrar el archivo");
            System.out.println("2. Escribir al final del archivo");
            System.out.println("3. Sobrescribir el archivo");
            System.out.println("4. Salir");

            int opcion = teclado.nextInt();
            teclado.nextLine(); 
            switch (opcion) {
                case 1:
                    leerArchivo();
                    break;
                case 2:
                    System.out.println("Escribe la frase que quieres añadir al final del archivo:");
                    String frase = teclado.nextLine();
                    escribirAlFinal(frase);
                    break;
                case 3:
                    System.out.println("Escribe la frase con la que quieres sobrescribir el archivo:");
                    frase = teclado.nextLine();
                    sobrescribirArchivo(frase);
                    break;
                case 4:
                    System.out.println("¿Estás seguro de que quieres salir? (si/no)");
                    String confirmacion = teclado.nextLine().toLowerCase();
                    if (confirmacion.equals("si")) {
                        salir = true;
                        System.out.println("Saliendo del programa");
                    }
                    break;
                default:
                    System.out.println("Opción no válida.");
            }
        } while (!salir);

        teclado.close();
    }
    public static void leerArchivo() {
        try {
            File file = new File("archivo.txt");
            Scanner scanner = new Scanner(file);
            while (scanner.hasNextLine()) {
                String data = scanner.nextLine();
                System.out.println(data);
            }
            scanner.close();
        } catch (FileNotFoundException e) {
            System.out.println("Error al leer el archivo.");
            e.printStackTrace();
        }
    }

    public static void escribirAlFinal(String frase) {
        try {
            FileWriter writer = new FileWriter("archivo.txt", true);
            writer.write("\n" + frase);
            writer.close();
            System.out.println("Se ha añadido la frase al final del archivo.");
        } catch (IOException e) {
            System.out.println("Error al escribir en el archivo.");
            e.printStackTrace();
        }
    }

    public static void sobrescribirArchivo(String frase) {
        try {
            FileWriter writer = new FileWriter("archivo.txt");
            writer.write(frase);
            writer.close();
            System.out.println("Se ha sobrescrito el archivo con la nueva frase.");
        } catch (IOException e) {
            System.out.println("Error al sobrescribir el archivo.");
            e.printStackTrace();
        }
    }
}
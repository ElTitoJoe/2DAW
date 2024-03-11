import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

public class BuscarPalabraEnArchivo {

    public static void main(String[] args) {
        // Verificar si se proporcionaron los argumentos necesarios
        if (args.length != 0) {
            System.out.println("Uso: java BuscarPalabraEnArchivo");
            System.exit(1);
        }

        // Nombre de archivo y palabra a buscar
        String nombreDeArchivo = "hola.txt";
        String palabraABuscar = "hola";

        // Intentar abrir y leer el archivo
        try (BufferedReader br = new BufferedReader(new FileReader(nombreDeArchivo))) {
            String linea;
            int numeroDeLinea = 1;
            boolean palabraEncontrada = false;

            // Leer el archivo línea por línea
            while ((linea = br.readLine()) != null) {
                // Verificar si la palabra está en la línea actual
                if (linea.contains(palabraABuscar)) {
                    palabraEncontrada = true;
                    System.out.println("La palabra '" + palabraABuscar + "' se encuentra en la línea " + numeroDeLinea + ": " + linea);
                }
                numeroDeLinea++;
            }

            // Si la palabra no se encontró en ninguna línea
            if (!palabraEncontrada) {
                System.out.println("La palabra '" + palabraABuscar + "' no se encontró en el archivo.");
            }

        } catch (IOException e) {
            System.err.println("Error al leer el archivo: " + e.getMessage());
        }
    }
}


import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class Lector {
    public static void main(String[] args) {
        try {
            BufferedReader lector = new BufferedReader(new FileReader("fichero-a.txt"));
            BufferedWriter escritor = new BufferedWriter(new FileWriter("fichero-b.txt"));

            String linea;
            while ((linea = lector.readLine()) != null) {
                String lineaSinVocales = quitarVocales(linea);
                System.out.println(lineaSinVocales);
                escritor.write(lineaSinVocales);
                escritor.newLine();  // Agregar nueva línea en el fichero-b.txt
            }

            lector.close();
            escritor.close();
        } catch (IOException e) {
            System.out.println("Ha ocurrido un fallo: " + e.getMessage());
        }
    }

    private static String quitarVocales(String input) {
        // Eliminar todas las vocales de la cadena de entrada
        return input.replaceAll("[aeiouAEIOU]", "");
    }
}

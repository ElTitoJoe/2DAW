import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;


public class Lector {
    public static void main(String[] args) {
        //Usamos el try{}catch para recoger errores
        try {
           //Creamos un objeto llamado lector que lee lo que hay en text
            BufferedReader lector = new BufferedReader(new FileReader("texto.txt"));
            // Creamos una cadena llamada linea
            String linea;
            // Mientras nuestro texto.txt no esté vacío.
            while ((linea = lector.readLine()) != null) {
              //Imprimimos línea por línea
                System.out.println(linea);
            }
            // Cerramos el lector.
            lector.close();
        //Y capturamos las excepciones
        } catch (IOException e) {
            // Si hay un error enviamos un mensaje diciendo que hay un error.
            System.out.println("Ha ocurrido un fallo: " + e.getMessage());
        }
    }
}

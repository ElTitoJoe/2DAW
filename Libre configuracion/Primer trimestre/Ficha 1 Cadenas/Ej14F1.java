import java.util.Scanner;

public class Ej14F1 {
    public static void main(String[] args) {
        Scanner teclado = new Scanner(System.in);

        System.out.print("Ingrese una fecha en formato dd/MM/yyyy: ");
        String fechaStr = teclado.nextLine();
        
        String[] partes = fechaStr.split("/");
        if (partes.length == 3) {
            int dia = Integer.parseInt(partes[0]);
            int mes = Integer.parseInt(partes[1]);
            int anio = Integer.parseInt(partes[2]);
            
            if (mes >= 1 && mes <= 12) {
                String nombreMes = obtenerNombreMes(mes);
                System.out.printf("%d de %s de %d\n", dia, nombreMes, anio);
            } else {
                System.out.println("El mes ingresado no es válido.");
            }
        } else {
            System.out.println("Formato de fecha incorrecto. Asegúrate de usar dd/MM/yyyy.");
        }
        
        teclado.close();
    }
    
    public static String obtenerNombreMes(int numeroMes) {
        String[] nombresMeses = {
            "enero", "febrero", "marzo", "abril", "mayo", "junio",
            "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
        };
        return nombresMeses[numeroMes - 1];
    }
}

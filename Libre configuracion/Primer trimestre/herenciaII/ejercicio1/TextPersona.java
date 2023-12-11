package herenciaII.ejercicio1;

public class TextPersona {
    public static void main(String[] args) {
        // Crear una persona con la información por defecto
        Persona persona1 = new Persona();

        // Crear una persona con información inventada
        Persona persona2 = new Persona("54309513G", 170, 20);

        // Mostrar información por pantalla
        System.out.println("Persona 1 - Información por defecto:");
        System.out.println("NIF: " + persona1.getNIF());
        System.out.println("Altura: " + persona1.getAltura() + " cm");
        System.out.println("Edad: " + persona1.getEdad() + " años");

        System.out.println("\nPersona 2 - Información inventada:");
        System.out.println("NIF: " + persona2.getNIF());
        System.out.println("Altura: " + persona2.getAltura() + " cm");
        System.out.println("Edad: " + persona2.getEdad() + " años");
    }
}

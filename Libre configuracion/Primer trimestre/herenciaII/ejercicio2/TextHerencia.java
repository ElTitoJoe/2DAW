package herenciaII.ejercicio2;
public class TextHerencia {
    public static void main(String[] args) {
        // Crear una instancia de Persona
        Persona persona = new Persona();
        System.out.println("Persona:");
        persona.hablar();
        persona.comer();
        System.out.println();

        // Crear una instancia de Ingeniero
        Ingeniero ingeniero = new Ingeniero();
        System.out.println("Ingeniero:");
        ingeniero.hablar();
        ingeniero.comer();
        ingeniero.razonar();
        ingeniero.trabajarEnGrupo();
        System.out.println();

        // Crear una instancia de IngenieroInformatico
        IngenieroInformatico ingenieroInformatico = new IngenieroInformatico();
        System.out.println("Ingeniero Informático:");
        ingenieroInformatico.hablar();
        ingenieroInformatico.comer();
        ingenieroInformatico.razonar();
        ingenieroInformatico.trabajarEnGrupo();
        ingenieroInformatico.crearPrograma();
    }
}

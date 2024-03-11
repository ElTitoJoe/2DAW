package herenciaII.ejercicio1;

public class Persona {
    // Atributos de la clase Persona
    private String NIF;
    private int altura; // En centímetros
    private int edad; // En años

    // Constructor por defecto
    public Persona() {
        this.NIF = "11111111A";
        this.altura = 175;
        this.edad = 25;
    }

    // Constructor con parámetros
    public Persona(String NIF, int altura, int edad) {
        this.NIF = NIF;
        this.altura = altura;
        this.edad = edad;
    }

    // Consultores (getters)
    public String getNIF() {
        return NIF;
    }

    public int getAltura() {
        return altura;
    }

    public int getEdad() {
        return edad;
    }

    // Modificadores (setters)
    public void setNIF(String NIF) {
        this.NIF = NIF;
    }

    public void setAltura(int altura) {
        this.altura = altura;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }
}

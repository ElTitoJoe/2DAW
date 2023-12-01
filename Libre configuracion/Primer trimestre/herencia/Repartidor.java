package herencia;


public class Repartidor extends Empleado {
    private String zona;
    private static final double PLUS = 300;

    public Repartidor(String nombre, int edad, double salario, String zona) {
        super(nombre, edad, salario);
        this.zona = zona;
    }

    public String getZona() {
        return zona;
    }

    public void setZona(String zona) {
        this.zona = zona;
    }

    public void plus() {
        if (getEdad() < 25 && zona.equals("Zona 3")) {
            setSalario(getSalario() + PLUS);
            System.out.println("Se aplicó el plus al empleado repartidor: " + getNombre());
        }
    }

    @Override
    public String toString() {
        return "Repartidor/a " + getNombre() + ", con " + getEdad() + " años y un salario de " + getSalario() + ", en la zona " + zona;
    }
}

package herencia;


public class Comercial extends Empleado {
    private double comision;
    private static final double PLUS = 300;

    public Comercial(String nombre, int edad, double salario, double comision) {
        super(nombre, edad, salario);
        this.comision = comision;
    }

    public double getComision() {
        return comision;
    }

    public void setComision(double comision) {
        this.comision = comision;
    }

    public void plus() {
        if (getEdad() > 30 && comision > 500) {
            setSalario(getSalario() + PLUS);
            System.out.println("Se aplicó el plus al empleado comercial: " + getNombre());
        }
    }

    @Override
    public String toString() {
        return "Comercial " + getNombre() + ", con " + getEdad() + " años y un salario de " + getSalario() + ", tiene una comision de " + comision;
    }
}
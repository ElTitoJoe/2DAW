package herenciaIII;

class Articulo {
    private String nombre;
    private double precioSinIVA;

    public Articulo(String nombre, double precioSinIVA) {
        this.nombre = nombre;
        this.precioSinIVA = precioSinIVA;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public double getPrecioSinIVA() {
        return precioSinIVA;
    }

    public void setPrecioSinIVA(double precioSinIVA) {
        this.precioSinIVA = precioSinIVA;
    }

    public double getPrecioConIVA() {
        return this.precioSinIVA + calcularIVA();
    }

    public double calcularIVA() {
        return 0;
    }
}

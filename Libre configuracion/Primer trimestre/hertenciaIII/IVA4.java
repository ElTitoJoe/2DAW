package herenciaIII;

class IVA4 extends Articulo {
    private static final double TIPO = 4.0;

    public IVA4(String nombre, double precioSinIVA) {
        super(nombre, precioSinIVA);
    }

    @Override
    public double calcularIVA() {
        return (getPrecioSinIVA() * TIPO) / 100.0;
    }
}

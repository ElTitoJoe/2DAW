package hertenciaIII;

class IVA7 extends Articulo {
    private static final double TIPO = 7.0;

    public IVA7(String nombre, double precioSinIVA) {
        super(nombre, precioSinIVA);
    }

    @Override
    public double calcularIVA() {
        return (getPrecioSinIVA() * TIPO) / 100.0;
    }
}
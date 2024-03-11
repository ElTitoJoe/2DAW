package hertenciaIII;

public class IVA16 extends Articulo {
    private static final double TIPO = 16.0;

    public IVA16(String nombre, double precioSinIVA) {
        super(nombre, precioSinIVA);
    }

    @Override
    public double calcularIVA() {
        return (getPrecioSinIVA() * TIPO) / 100.0;
    }
}

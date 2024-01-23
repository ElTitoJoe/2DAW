package hertenciaIII;

public class Ej1_2024 {
    public static void main(String[] args) {
        // Crear un artículo con tipo de IVA 7%
        Articulo articulo1 = new IVA7("Articulo 1", 100.0);
        Articulo articulo2 = new IVA4("Articulo 2", 25.0);
        Articulo articulo3 = new IVA16("Articulo 3", 150.0);

        // Obtener información del artículo1
        System.out.println("Nombre: " + articulo1.getNombre());
        System.out.println("Precio sin IVA: " + articulo1.getPrecioSinIVA());
        System.out.println("Precio con IVA: " + articulo1.getPrecioConIVA());
        System.out.println("IVA a pagar: " + articulo1.calcularIVA());
           // Obtener información del artículo2
        System.out.println("Nombre: " + articulo2.getNombre());
        System.out.println("Precio sin IVA: " + articulo2.getPrecioSinIVA());
        System.out.println("Precio con IVA: " + articulo2.getPrecioConIVA());
        System.out.println("IVA a pagar: " + articulo2.calcularIVA());
           // Obtener información del artículo3
        System.out.println("Nombre: " + articulo3.getNombre());
        System.out.println("Precio sin IVA: " + articulo3.getPrecioSinIVA());
        System.out.println("Precio con IVA: " + articulo3.getPrecioConIVA());
        System.out.println("IVA a pagar: " + articulo3.calcularIVA());
    }
}
package herencia;


public class Ejercicio5 {
    public static void main(String[] args) {
        Comercial comercial1 = new Comercial("Carlos", 35, 2000, 600);
        Comercial comercial2 = new Comercial("Pablo", 29, 2000, 600);
        Repartidor repartidor1 = new Repartidor("Laura", 22, 1500, "Zona 3");
        Repartidor repartidor2 = new Repartidor("Manolo", 33, 1800, "Zona 1");
        Repartidor repartidor3 = new Repartidor("Victor", 27, 10000, "Zona 3");

        // Aplicar el plus a los empleados
        comercial1.plus();
        comercial2.plus();
        repartidor1.plus();
        repartidor2.plus();
        repartidor3.plus();

        // Mostrar información de los empleados
        System.out.println(comercial1);
        System.out.println(comercial2);
        System.out.println(repartidor1);
        System.out.println(repartidor2);
        System.out.println(repartidor3);
    }
}
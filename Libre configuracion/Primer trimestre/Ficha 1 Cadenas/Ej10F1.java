public class Ej10F1 {
    public static void main(String[] args) {
        System.out.println("Caracteres correspondientes a códigos de tres dígitos en el rango 000-255:");
        for (int codigo = 0; codigo <= 255; codigo++) {
            char caracter = (char) codigo;
            System.out.println("Código: " + codigo + ", Carácter: " + caracter);
        }
    }

}


public class Ej14ClasesJoaquin {

    public static void main(String[] args) {
        DNI dni = new DNI();

        // Establecer el DNI a través del número
        try {
            dni.setDni(12345678);
            System.out.println("Número de DNI: " + dni.getNumeroDni());
            System.out.println("NIF completo: " + dni.getNif());
        } catch (IllegalArgumentException e) {
            System.err.println(e.getMessage());
        }

        // Establecer el DNI a través del NIF
        try {
            dni.setDni("12345678Z");
            System.out.println("Número de DNI: " + dni.getNumeroDni());
            System.out.println("NIF completo: " + dni.getNif());
        } catch (IllegalArgumentException e) {
            System.err.println(e.getMessage());
        }
    }
    
    public static class DNI {
        private int numeroDNI;

        public DNI() {
            // Constructor vacío
        }

        public DNI(int numeroDNI) {
            this.numeroDNI = numeroDNI;
        }

        public int getNumeroDni() {
            return numeroDNI;
        }

        public String getNif() {
            return String.valueOf(numeroDNI) + calcularLetraNIF(numeroDNI);
        }        

        public void setDni(String nif) {
            if (validarNif(nif)) {
                numeroDNI = extraerNumeroDni(nif);
            } else {
                throw new IllegalArgumentException("El NIF proporcionado es incorrecto");
            }
        }

        public void setDni(int numeroDNI) {
            if (numeroDNI >= 0 && numeroDNI <= 99999999) {
                this.numeroDNI = numeroDNI;
            } else {
                throw new IllegalArgumentException("El número de DNI proporcionado es incorrecto");
            }
        }

        private static char calcularLetraNIF(int numeroDNI) {
            String letras = "TRWAGMYFPDXBNJZSQVHLCKE";
            return letras.charAt(numeroDNI % 23);
        }

        private static boolean validarNif(String nif) {
            if (nif.length() != 9) {
                return false;
            }
            char letra = nif.charAt(8);
            int numero = Integer.parseInt(nif.substring(0, 8));
            return letra == calcularLetraNIF(numero);
        }
        
        private static int extraerNumeroDni(String nif) {
            return Integer.parseInt(nif.substring(0, 8));
        }
    }

}

public class Ej9F4 {
    public static void main(String[] args) {

        int base = 3;
        int exponente = 4;

        int resultadoIterativo = enteroPotencia(base, exponente);
        System.out.println("Resultado iterativo: " + resultadoIterativo);


        int resultadoRecursivo = enteroPotenciaRecursivo(base, exponente);
        System.out.println("Resultado recursivo: " + resultadoRecursivo);
    }

    public static int enteroPotencia(int base, int exponente) {
        int resultado = 1;
        for (int i = 0; i < exponente; i++) {
            resultado *= base;
        }
        return resultado;
    }

    public static int enteroPotenciaRecursivo(int base, int exponente) {
        if (exponente == 0) {
            return 1;
        }
        return base * enteroPotenciaRecursivo(base, exponente - 1);
    }
}

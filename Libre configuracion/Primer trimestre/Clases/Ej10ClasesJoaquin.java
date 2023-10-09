public class Ej10ClasesJoaquin {
    public static void main(String[] args) {
        // Crear dos conjuntos de enteros
        ConjuntoEnteros conjuntoA = new ConjuntoEnteros();
        ConjuntoEnteros conjuntoB = new ConjuntoEnteros();

        conjuntoA.insertarElemento(5);
        conjuntoA.insertarElemento(10);
        conjuntoA.insertarElemento(20);

        conjuntoB.insertarElemento(10);
        conjuntoB.insertarElemento(30);

        System.out.println("Conjunto A: " + conjuntoA.aStringConjunto());
        System.out.println("Conjunto B: " + conjuntoB.aStringConjunto());

        ConjuntoEnteros conjuntoUnion = ConjuntoEnteros.union(conjuntoA, conjuntoB);
        ConjuntoEnteros conjuntoInterseccion = ConjuntoEnteros.interseccion(conjuntoA, conjuntoB);

        System.out.println("Unión de A y B: " + conjuntoUnion.aStringConjunto());
        System.out.println("Intersección de A y B: " + conjuntoInterseccion.aStringConjunto());

        System.out.println("¿Conjunto A igual a conjunto B? " + conjuntoA.esIgualA(conjuntoB));
    }
}

class ConjuntoEnteros {
    private boolean[] conjunto;

    public ConjuntoEnteros() {
        conjunto = new boolean[101]; // Inicializa un conjunto vacío
    }

    public boolean esta(int numero) {
        if (numero < 0 || numero > 100) {
            return false; // Fuera del rango permitido
        }
        return conjunto[numero];
    }

    public void insertarElemento(int numero) {
        if (numero >= 0 && numero <= 100) {
            conjunto[numero] = true;
        }
    }

    public void eliminarElemento(int numero) {
        if (numero >= 0 && numero <= 100) {
            conjunto[numero] = false;
        }
    }

    public String aStringConjunto() {
        StringBuilder result = new StringBuilder();
        boolean primero = true;

        for (int i = 0; i <= 100; i++) {
            if (conjunto[i]) {
                if (!primero) {
                    result.append(" ");
                }
                result.append(i);
                primero = false;
            }
        }

        if (primero) {
            return "---"; // Conjunto vacío
        }

        return result.toString();
    }

    public boolean esIgualA(ConjuntoEnteros otroConjunto) {
        for (int i = 0; i <= 100; i++) {
            if (conjunto[i] != otroConjunto.esta(i)) {
                return false;
            }
        }
        return true;
    }

    public static ConjuntoEnteros union(ConjuntoEnteros conjunto1, ConjuntoEnteros conjunto2) {
        ConjuntoEnteros resultado = new ConjuntoEnteros();

        for (int i = 0; i <= 100; i++) {
            resultado.conjunto[i] = conjunto1.conjunto[i] || conjunto2.conjunto[i];
        }

        return resultado;
    }

    public static ConjuntoEnteros interseccion(ConjuntoEnteros conjunto1, ConjuntoEnteros conjunto2) {
        ConjuntoEnteros resultado = new ConjuntoEnteros();

        for (int i = 0; i <= 100; i++) {
            resultado.conjunto[i] = conjunto1.conjunto[i] && conjunto2.conjunto[i];
        }

        return resultado;
    }
}


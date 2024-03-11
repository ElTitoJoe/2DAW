import java.util.*;
public class Ej13ClasesJoaquin {
     public static void main(String[] args) {
        Fecha fecha1 = new Fecha(6, 15, 1992);
        Fecha fecha2 = new Fecha("Junio", 15, 1992);
        Fecha fecha3 = new Fecha(167, 1992);

        fecha1.imprimirFecha();
        fecha2.imprimirFecha();
        fecha3.imprimirFecha();
    }
public static class Fecha {
    private int dia;
    private int mes;
    private int anio;
    private static final Map<String, Integer> mesesMap = new HashMap<>();
    
    static {
        mesesMap.put("Enero", 1);
        mesesMap.put("Febrero", 2);
        mesesMap.put("Marzo", 3);
        mesesMap.put("Abril", 4);
        mesesMap.put("Mayo", 5);
        mesesMap.put("Junio", 6);
        mesesMap.put("Julio", 7);
        mesesMap.put("Agosto", 8);
        mesesMap.put("Septiembre", 9);
        mesesMap.put("Octubre", 10);
        mesesMap.put("Noviembre", 11);
        mesesMap.put("Diciembre", 12);
    }

    public Fecha(int dia, int mes, int anio) {
        this.dia = dia;
        this.mes = mes;
        this.anio = anio;
    }

    public Fecha(String mesStr, int dia, int anio) {
        // Convierte el nombre del mes a número utilizando el mapa
        this.dia = dia;
        this.mes = mesesMap.get(mesStr);
        this.anio = anio;
    }

    public Fecha(int diaDelAnio, int anio) {
        this.anio = anio;
        int mes = 1;
        int diaRestante = diaDelAnio;
        
        // Calcula el mes y el día a partir del día del año
        while (mes < 13) {
            int diasEnMes = diasEnMes(mes, anio);
            if (diaRestante <= diasEnMes) {
                this.mes = mes;
                this.dia = diaRestante;
                break;
            } else {
                diaRestante -= diasEnMes;
                mes++;
            }
        }
    }

    private int diasEnMes(int mes, int anio) {
        int[] diasPorMes = {0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
        
        // Ajusta para el mes de febrero en años bisiestos
        if (mes == 2 && esAnioBisiesto(anio)) {
            return 29;
        }
        return diasPorMes[mes];
    }

    private boolean esAnioBisiesto(int anio) {
        return (anio % 4 == 0 && anio % 100 != 0) || (anio % 400 == 0);
    }

    public void imprimirFecha() {
        System.out.printf("%02d/%02d/%04d%n", mes, dia, anio);
        System.out.printf("%s %d, %04d%n", nombreMes(), dia, anio);
    }

    private String nombreMes() {
        for (Map.Entry<String, Integer> entry : mesesMap.entrySet()) {
            if (entry.getValue() == mes) {
                return entry.getKey();
            }
        }
        return "Mes Inválido";
    }
}
}


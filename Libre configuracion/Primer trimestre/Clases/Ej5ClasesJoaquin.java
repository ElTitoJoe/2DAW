public class Ej5ClasesJoaquin {
    public static void main(String[] args) {
        // Establecer la tasa de interés al 4%
        CuentaDeAhorros.modificarTasaInteres(4);

        // Crear dos cuentas de ahorros con saldos iniciales
        CuentaDeAhorros ahorrador1 = new CuentaDeAhorros(2000.00);
        CuentaDeAhorros ahorrador2 = new CuentaDeAhorros(3000.00);

        // Imprimir saldos iniciales
        System.out.println("Saldo de ahorrador1 antes del cálculo de interés: " + ahorrador1.getSaldo());
        System.out.println("Saldo de ahorrador2 antes del cálculo de interés: " + ahorrador2.getSaldo());

        // Calcular el interés mensual para el primer mes
        ahorrador1.calcularInteresMensual();
        ahorrador2.calcularInteresMensual();

        // Imprimir saldos después del primer mes de interés
        System.out.println("Saldo de ahorrador1 después del primer mes de interés: " + ahorrador1.getSaldo());
        System.out.println("Saldo de ahorrador2 después del primer mes de interés: " + ahorrador2.getSaldo());

        // Cambiar la tasa de interés al 5%
        CuentaDeAhorros.modificarTasaInteres(5);

        // Calcular el interés mensual para el segundo mes
        ahorrador1.calcularInteresMensual();
        ahorrador2.calcularInteresMensual();

        // Imprimir saldos después del segundo mes de interés
        System.out.println("Saldo de ahorrador1 después del segundo mes de interés: " + ahorrador1.getSaldo());
        System.out.println("Saldo de ahorrador2 después del segundo mes de interés: " + ahorrador2.getSaldo());
    }
}

class CuentaDeAhorros {
    private static double tasaInteresAnual;
    private double saldoAhorros;

    public CuentaDeAhorros() {
        saldoAhorros = 0.0;
    }

    public CuentaDeAhorros(double saldoInicial) {
        saldoAhorros = saldoInicial;
    }

    public double getSaldo() {
        return saldoAhorros;
    }

    public void setSaldo(double nuevoSaldo) {
        saldoAhorros = nuevoSaldo;
    }

    public static void modificarTasaInteres(double nuevaTasa) {
        tasaInteresAnual = nuevaTasa;
    }

    public void calcularInteresMensual() {
        double interesMensual = saldoAhorros * (tasaInteresAnual / 12 / 100);
        saldoAhorros += interesMensual;
    }
}

public class Ej5ClasesJoaquin {
    public static void main(String[] args) {
        CuentaDeAhorros.modificarTasaInteres(4);
        CuentaDeAhorros ahorrador1 = new CuentaDeAhorros(2000.00);
        CuentaDeAhorros ahorrador2 = new CuentaDeAhorros(3000.00);
        System.out.println("Saldo de ahorrador1 antes del cálculo de interés: " + ahorrador1.getSaldo());
        System.out.println("Saldo de ahorrador2 antes del cálculo de interés: " + ahorrador2.getSaldo());
        ahorrador1.calcularInteresMensual();
        ahorrador2.calcularInteresMensual();
        System.out.println("Saldo de ahorrador1 después del primer mes de interés: " + ahorrador1.getSaldo());
        System.out.println("Saldo de ahorrador2 después del primer mes de interés: " + ahorrador2.getSaldo());
        CuentaDeAhorros.modificarTasaInteres(5);
        ahorrador1.calcularInteresMensual();
        ahorrador2.calcularInteresMensual();
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

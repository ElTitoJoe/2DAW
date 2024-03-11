<?php
function calcularSumatorio($numero) {
    if ($numero < 0) {
        return "El número debe ser no negativo.";
    }

    $sumatorio = 0;
    for ($i = 1; $i < $numero; $i++) {
        $sumatorio += $i;
    }

    return $sumatorio;
}

// Ejemplo de uso
$numeroEjemplo = 5;
$resultado = calcularSumatorio($numeroEjemplo);

echo "El sumatorio de los enteros anteriores a $numeroEjemplo es: $resultado";
?>

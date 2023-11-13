<?php
function calcularSemisuma($numero1, $numero2) {
    $suma = $numero1 + $numero2;
    $semisuma = $suma / 2;
    return $semisuma;
}

// Ejemplo de uso
$valor1 = 10;
$valor2 = 20;
$resultado = calcularSemisuma($valor1, $valor2);

echo "La semisuma de $valor1 y $valor2 es: $resultado";
?>


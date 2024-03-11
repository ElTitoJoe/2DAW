<?php
function calcularCuadrado($numero) {
    return $numero * $numero;
}

function calcularCubo($numero) {
    return $numero * $numero * $numero;
}

// Ejemplo de uso
$numero = 3;

echo "El cuadrado de $numero es: " . calcularCuadrado($numero) . "<br>";
echo "El cubo de $numero es: " . calcularCubo($numero);
?>

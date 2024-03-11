<?php
// Define las dos cadenas
$cadena1 = "Hola 9";
$cadena2 = "Hola 10";

// Comparación de cadenas completas
$comparacionCompleta = strcmp($cadena1, $cadena2);

// Comparación de los primeros 5 caracteres
$primeros5Cadena1 = substr($cadena1, 0, 5);
$primeros5Cadena2 = substr($cadena2, 0, 5);
$comparacionPrimeros5 = strcmp($primeros5Cadena1, $primeros5Cadena2);

// Comparación natural
$comparacionNatural = strnatcmp($cadena1, $cadena2);

// Determinar cuál cadena es menor
if ($comparacionCompleta < 0) {
    echo "La cadena 1 es menor que la cadena 2 (comparación completa).<br>";
} elseif ($comparacionCompleta > 0) {
    echo "La cadena 2 es menor que la cadena 1 (comparación completa).<br>";
} else {
    echo "Las cadenas son iguales (comparación completa).<br>";
}

if ($comparacionPrimeros5 < 0) {
    echo "La cadena 1 es menor que la cadena 2 (comparación de los primeros 5 caracteres).<br>";
} elseif ($comparacionPrimeros5 > 0) {
    echo "La cadena 2 es menor que la cadena 1 (comparación de los primeros 5 caracteres).<br>";
} else {
    echo "Las cadenas son iguales (comparación de los primeros 5 caracteres).<br>";
}

if ($comparacionNatural < 0) {
    echo "La cadena 1 es menor que la cadena 2 (comparación natural).<br>";
} elseif ($comparacionNatural > 0) {
    echo "La cadena 2 es menor que la cadena 1 (comparación natural).<br>";
} else {
    echo "Las cadenas son iguales (comparación natural).<br>";
}
?>

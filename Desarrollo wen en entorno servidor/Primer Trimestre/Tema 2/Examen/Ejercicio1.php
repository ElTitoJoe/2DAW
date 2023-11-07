
<?php
//Realizar una pagina web en la que, dada dos cadenas, en modo de comparación y un numero de caracteres escriba qué cadena es mayor o menor que la otra según el modo
//de comparación especificada. El numero de cadena sólo es necesario con el modo de comparacion 4, en el resto de casos no es necesario.
$cad1 = "Hola9";
$cad2 = "Hola10";
$mode = 4;

if ($mode == 4) {
    $numChars = 4; // Define el número de caracteres para el modo 4 (puedes cambiarlo)
    $subCad1 = substr($cad1, 0, $numChars);
    $subCad2 = substr($cad2, 0, $numChars);
}
if ($mode == 1) {
    $resultado = strcmp($cad1, $cad2);
} elseif ($mode == 2) {
    $resultado = strcasecmp($cad1, $cad2);
} elseif ($mode == 3) {
    $resultado = strnatcasecmp($cad1, $cad2);
} elseif ($mode == 4) {
    $resultado = strcmp($subCad1, $subCad2);
}

if ($resultado < 0) {
    echo "$cad1 es menor que $cad2";
} elseif ($resultado > 0) {
    echo "$cad2 es menor que $cad1";
} else {
    echo "Ambas cadenas son iguales";
}
?>


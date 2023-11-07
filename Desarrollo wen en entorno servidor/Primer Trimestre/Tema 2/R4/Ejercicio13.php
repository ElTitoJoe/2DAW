<?php
$cadena = "La casa es roja y la puerta es roja";
$palabra1 = "roja";
$palabra2 = "azul";

$cadenaModificada = str_replace($palabra1, $palabra2, $cadena);

echo "Cadena original: " . $cadena . "<br>";
echo "Cadena modificada: " . $cadenaModificada;
?>


<?php
// Define la cadena
$cadena = "Hola, esta es una cadena de ejemplo.";

// Define una expresión regular para buscar vocales
$expresionRegular = '/[aeiouAEIOU]/';

// Utiliza la función preg_match para verificar si la cadena contiene alguna vocal
if (preg_match($expresionRegular, $cadena)) {
    echo "La cadena contiene al menos una vocal.";
} else {
    echo "La cadena no contiene ninguna vocal.";
}
?>

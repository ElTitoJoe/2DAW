<?php
// Define la frase
$frase = "Esta es una frase de ejemplo";

// Divide la frase en palabras
$palabras = explode(' ', $frase);

// Obtiene la última palabra
$ultimaPalabra = end($palabras);

// Muestra la última palabra
echo $ultimaPalabra;
?>

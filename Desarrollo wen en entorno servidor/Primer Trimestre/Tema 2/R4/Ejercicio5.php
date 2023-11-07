<?php
$frase = "Observa a cada una.";

// Encuentra la última posición de la letra 'a' en la cadena
$ultima_posicion_a = strrpos($frase, 'u');

$frase = substr_replace($frase, 'o', $ultima_posicion_a, 1);

// Muestra la nueva frase
echo $frase;
?>
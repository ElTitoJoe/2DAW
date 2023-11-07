<?php
$frase = "Esto es una cadena. un poco más larga.";

// Posición de la primera "c"
$primera_c = strpos($frase, "c");

// Posición de la última "c"
$ultima_c = strrpos($frase, "c");

// Posición de la palabra "poco"
$poco_pos = strpos($frase, "poco");

echo "Posición de la primera 'c': $primera_c\n";
echo "Posición de la última 'c': $ultima_c\n";
echo "Posición de la palabra 'poco': $poco_pos\n";
?>
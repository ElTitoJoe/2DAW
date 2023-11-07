<?php
$fraseOriginal = "No me gusta usar +*[] en cadenas";

// Escapar los caracteres que no son letras ni espacios
$fraseEscapada = preg_replace('/[^a-zA-Z\s]/', '', $fraseOriginal);

echo "Frase original: $fraseOriginal<br>";
echo "Frase escapada: $fraseEscapada";
?>

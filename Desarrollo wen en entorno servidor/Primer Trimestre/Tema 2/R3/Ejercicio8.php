<?php
// Define la cadena original
$cadenaOriginal = "vamos al o’Brian";

// Escapar los caracteres problemáticos
$cadenaEscapada = htmlspecialchars($cadenaOriginal, ENT_QUOTES, 'UTF-8');

// Mostrar la cadena escapada
echo "Cadena escapada: $cadenaEscapada<br>";

// Deshacer el proceso y obtener la cadena original
$cadenaOriginal = htmlspecialchars_decode($cadenaEscapada, ENT_QUOTES);

// Mostrar la cadena original
echo "Cadena original: $cadenaOriginal";
?>

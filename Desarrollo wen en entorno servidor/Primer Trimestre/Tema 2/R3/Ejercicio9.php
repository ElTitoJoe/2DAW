<?php
// Escapar las vocales (excepto 'a')
$cadenaOriginal = "Esta es una cadena de ejemplo";
$cadenaEscapada = preg_replace('/[eioEIOuU]/', '*', $cadenaOriginal);
echo "Cadena escapada: $cadenaEscapada<br>";

// Deshacer el proceso y obtener la cadena original
$cadenaDeshacer = strtr($cadenaEscapada, ['*' => 'e', '*' => 'i', '*' => 'o', '*' => 'E', '*' => 'I', '*' => 'O', '*' => 'u', '*' => 'U']);
echo "Cadena original: $cadenaDeshacer";
?>

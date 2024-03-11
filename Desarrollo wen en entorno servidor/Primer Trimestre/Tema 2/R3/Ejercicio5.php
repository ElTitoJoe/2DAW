<?php
// Define la cadena
$cadena = "Hola Mundo";

// Define un array de sustitución
$sustitucion = array(
    'a' => 'A', 'A' => 'a',
    'e' => 'E', 'E' => 'e',
    'i' => 'I', 'I' => 'i',
    'o' => 'O', 'O' => 'o',
    'u' => 'U', 'U' => 'u'
);

// Realiza la sustitución
$cadenaSustituida = strtr($cadena, $sustitucion);

// Muestra la cadena resultante
echo $cadenaSustituida;
?>
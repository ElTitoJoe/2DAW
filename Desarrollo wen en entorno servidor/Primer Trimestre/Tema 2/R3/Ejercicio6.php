<?php

$cadena = " ... Hola a todos ... ";
$sinEspaciosAntes = ltrim($cadena, " .");
echo $sinEspaciosAntes;


$cadena = " ... Hola a todos ... ";
$sinEspaciosDespues = rtrim($cadena, " .");
echo $sinEspaciosDespues;


$cadena = " ... Hola a todos ... ";
$sinEspaciosAntesYDespues = trim($cadena, " .");
echo $sinEspaciosAntesYDespues;

?>
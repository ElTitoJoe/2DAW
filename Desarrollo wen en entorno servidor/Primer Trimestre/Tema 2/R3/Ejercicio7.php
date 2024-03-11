<?php

$cadena = "Hola";
$cadenaRellenaInicio = str_pad($cadena, 20, '#', STR_PAD_LEFT);
echo $cadenaRellenaInicio;


$cadena = "Hola";
$cadenaRellenaFinal = str_pad($cadena, 20, '#', STR_PAD_RIGHT);
echo $cadenaRellenaFinal;

$cadena = "Hola";
$cadenaRellenaAmbos = str_pad($cadena, 20, '#', STR_PAD_BOTH);
echo $cadenaRellenaAmbos;

?>
<?php

$cadena = "Bienvenido a nuestro cine. Ha efectuado usted la decisión correcta.";
$nombrecliente = ", Pablo González.";
$cadena = str_replace('.',$nombrecliente,$cadena);
echo $cadena;

?>
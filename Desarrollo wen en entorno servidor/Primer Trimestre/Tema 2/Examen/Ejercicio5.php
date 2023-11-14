<?php
//Verificar un número de telefono de manera en el que el formato: XXX XX XX XX, ten en cuenta que el primer numero solo puede ser 8 o 9 si es un teléfono fijo o 6 0 7 si es móvil.
$numero = "699 65 43 21";
$numero = str_replace(" ", "", $numero);
if (strlen($numero) === 9) {
    $primerDigito = substr($numero, 0, 1);
    if ($primerDigito === '8' || $primerDigito === '9' || $primerDigito === '6' || $primerDigito === '7') {
        echo "El número de teléfono es válido.";
    } else {
        echo "El primer dígito no es válido.";
    }
} else {
    echo "La longitud del número de teléfono no es válida.";
}
?>
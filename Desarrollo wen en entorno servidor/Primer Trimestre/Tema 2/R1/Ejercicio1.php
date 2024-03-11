<?php

function verificarRima($palabra1, $palabra2) {
    
    $palabra1 = strtolower($palabra1);
    $palabra2 = strtolower($palabra2);

    $ultimas_tres_letras_palabra1 = substr($palabra1, -3);
    $ultimas_tres_letras_palabra2 = substr($palabra2, -3);

    $ultimas_dos_letras_palabra1 = substr($palabra1, -2);
    $ultimas_dos_letras_palabra2 = substr($palabra2, -2);

    if ($ultimas_tres_letras_palabra1 === $ultimas_tres_letras_palabra2) {
        return "Las palabras riman.";
    }
    elseif ($ultimas_dos_letras_palabra1 === $ultimas_dos_letras_palabra2) {
        return "Las palabras riman un poco.";
    } else {
        return "Las palabras no riman.";
    }
}

$palabra1 = "Mima";
$palabra2 = "Rima";

$resultado = verificarRima($palabra1, $palabra2);

echo $resultado;
?>
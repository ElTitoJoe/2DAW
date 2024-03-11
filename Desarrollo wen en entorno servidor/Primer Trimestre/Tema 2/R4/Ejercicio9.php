<?php
    $texto = "Tu madre tiene una polla";
    $caracteres = str_split($texto); // Divide el texto en un array de caracteres
    $resultado = implode('-', $caracteres); // Une los caracteres con un guion entre ellos
    echo $resultado;
?>
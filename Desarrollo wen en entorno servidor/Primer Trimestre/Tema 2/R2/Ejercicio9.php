<?php
    // Define la frase
    $frase = "Bienvenidos al a aventura de aprender PHP en 30 horas";

    // Mostrar la parte central de la frase
    $longitud = strlen($frase);
    $inicio = ($longitud - 1) / 2 - 10; // Comienza 10 caracteres antes del centro
    $parteCentral = substr($frase, $inicio, 20);

    // Averiguar la posición de la palabra PHP
    $posPHP = strpos($frase, "PHP");

    // Reemplazar la palabra "aventura" por la cadena "<'b>misión</b>"
    $fraseModificada = str_replace("aventura", "<'b>misión</b>", $frase);

    // Mostrar los resultados
    echo "Parte central de la frase: $parteCentral<br>";
    echo "Posición de la palabra 'PHP': $posPHP<br>";
    echo "Frase modificada: $fraseModificada<br>";
    ?>
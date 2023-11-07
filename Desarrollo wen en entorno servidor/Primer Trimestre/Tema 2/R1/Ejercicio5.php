<?php
    // Define la frase en una variable
    $frase = "La bala mata la vaca";

    // Convierte la frase a minúsculas para que la búsqueda sea insensible a mayúsculas y minúsculas
    $frase = strtolower($frase);

    // Cuenta el número de letras 'a' en la frase
    $numeroDeLetrasA = substr_count($frase, 'a');

    // Imprime el resultado
    echo "<p>El número de letras 'a' en la frase es: $numeroDeLetrasA</p>";

    // Crea un array para contar todas las letras contenidas en la frase
    $letrasContadas = array();

    // Recorre la frase y cuenta las letras
    for ($i = 0; $i < strlen($frase); $i++) {
        $letra = $frase[$i];
        if (ctype_alpha($letra)) {
            if (array_key_exists($letra, $letrasContadas)) {
                $letrasContadas[$letra]++;
            } else {
                $letrasContadas[$letra] = 1;
            }
        }
    }

    // Imprime el array de letras contadas
    echo "<p>Array de letras contadas:</p>";
    echo "<pre>";
    print_r($letrasContadas);
    echo "</pre>";
    ?>
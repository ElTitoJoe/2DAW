<?php
    // Define la frase en una variable
    $frase = "Esta es una frase de ejemplo";

    // Divide la frase en palabras
    $palabras = explode(' ', $frase);

    // Obtiene las dos primeras palabras
    $dosPrimerasPalabras = array_slice($palabras, 0, 2);

    // Imprime las dos primeras palabras
    echo "<p>Las dos primeras palabras de la frase son: " . implode(' ', $dosPrimerasPalabras) . "</p>";
?>
<?php
    // Define la frase en una variable
    $frase = "CadenaOriginal";

    // Inicializa una variable para almacenar la frase repetida
    $fraseRepetida = "";

    // Recorre la frase y repite cada carácter
    for ($i = 0; $i < strlen($frase); $i++) {
        $caracter = $frase[$i];
        $fraseRepetida .= str_repeat($caracter, 2); // Repite cada carácter dos veces
    }

    // Imprime la frase repetida
    echo "<p>La frase original es: $frase</p>";
    echo "<p>La frase con caracteres repetidos es: $fraseRepetida</p>";
?>
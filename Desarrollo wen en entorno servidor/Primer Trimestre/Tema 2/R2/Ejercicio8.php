<?php
    // Define la frase
    $frase = "Esta cadena tiene muchas letras";

    // La posición de la primera ocurrencia de la letra 'a'
    $posA = strpos($frase, 'a');

    // La posición de la primera ocurrencia de la letra 'm'
    $posM = strpos($frase, 'm');

    // La posición de la primera ocurrencia de la palabra "tiene"
    $posTiene = strpos($frase, 'tiene');

    // La primera ocurrencia desde el final de la letra 'a'
    $posAReverso = strrpos($frase, 'a');

    // La frase desde la aparición de la palabra "cadena" hasta el final
    $cadenaDesdeCadena = substr($frase, strpos($frase, "cadena"));

    // La cadena desde el carácter 12 hasta el final
    $cadenaDesde12 = substr($frase, 11);

    // La cadena devolviendo 6 caracteres desde el carácter 18
    $cadenaDesde18 = substr($frase, 17, 6);

    // La cadena devolviendo los 6 últimos caracteres
    $ultimos6Caracteres = substr($frase, -6);

    // La cadena desde la posición 26, contando desde atrás, 6 caracteres
    $cadenaDesde26Reverso = substr($frase, -26, 6);

    // La cadena empezando en el carácter 4 y terminando en el 7 desde atrás
    $cadenaDesde4Hasta7Reverso = substr($frase, 3, -7);

    // Mostrar los resultados
    echo "La primera ocurrencia de 'a' es $posA<br>";
    echo "La primera ocurrencia de 'm' es $posM<br>";
    echo "La primera ocurrencia de 'tiene' es $posTiene<br>";
    echo "La primera ocurrencia desde el final de 'a' es $posAReverso<br>";
    echo "La frase desde la aparición de la palabra 'cadena' hasta el final es: $cadenaDesdeCadena<br>";

    echo "<p>Partes de la cadena:</p>";
    echo "Tiene muchas letras<br>";
    echo "Muchas<br>";
    echo "Letras<br>";
    echo "Cadena<br>";
    echo "Cadena tiene muchas";
?>
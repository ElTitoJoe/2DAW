<?php
//Realiza una página web que tenga dos variables numéricas, una copn un valor y otra con un formato. La pagina debe de escribir el número en el formato especificado
//1 Decimal, 2 Hexadecimal minúscula, 3 Hexadecimal mayuscula, 4 Octal, 5 Exponencial, 6 Binario.

    $numero =100; // Valor del número
    $formato = 5; // Formato: 1 Decimal, 2 Hexadecimal minúscula, 3 Hexadecimal mayúscula, 4 Octal, 5 Exponencial, 6 Binario

    switch ($formato) {
        case 1:
            echo "Número en formato decimal: " . $numero;
            break;
        case 2:
            echo "Número en formato hexadecimal minúscula: " . strtolower(dechex($numero));
            break;
        case 3:
            echo "Número en formato hexadecimal mayúscula: " . strtoupper(dechex($numero));
            break;
        case 4:
            echo "Número en formato octal: " . decoct($numero);
            break;
        case 5:
            echo "Número en formato exponencial: " . number_format($numero, 2, ".", "") . "e+0";
            break;
        case 6:
            echo "Número en formato binario: " . decbin($numero);
            break;
        default:
            echo "Formato no válido";
            break;
    }
?>
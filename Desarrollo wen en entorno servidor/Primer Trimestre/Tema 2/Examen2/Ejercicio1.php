<?php
/*
Diseña una función que dibuje un árbol de navidad , para ello debemos crear un array siguiendo las siguientes indicaciones: A partir del alto del arbol que será un parametro de la función
se genera el siguiente array:(ejemplo para $altura = 5 )
****\****
***\\\***
**\\\\\**
*\\\\\\\*
\\\\\\\\\
Donde el "*" representa la nieve y el caracter "\" es el arból.
A continuación deberás generar una tabla en html que escriba el contenido del array. La nieve se escriborá en color blanco, en fonde será azul cielo y el arbol de color verde 
Pista: <td bgcolor="#00FFFF"> para el fondo, <tb><font colot="#000000"> para la fuente de la nieve
*/

//Calcula las dimensiones del arbol mientra se está almacenando dentro del array
function generar_arbol($altura) {
    $arbol = [];
    for ($i = 0; $i < $altura; $i++) {
        $espacios = str_repeat('*', $altura - $i - 1);
        $arbol[] = $espacios . str_repeat('\\', 2 * $i + 1) . $espacios;
    }
    return $arbol;
}

// Altura del árbol 
$altura_arbol = 7;

// Tamaño de la fuente
$tamanio_letra = 20; 

// Generar el árbol
$mi_arbol = generar_arbol($altura_arbol);

// Crear la tabla HTML
echo '<table border="0" cellspacing="1" cellpadding="1">';

//Nos imprime el arbol y las fillas
foreach ($mi_arbol as $fila) {
    echo '<tr>';
    for ($j = 0; $j < strlen($fila); $j++) {
        if ($fila[$j] === '*') {
            echo '<td bgcolor="#00FFFF"><font color="#FFFFFF" size="' . $tamanio_letra . '">*</font></td>'; // Nieve
        } else {
            echo '<td bgcolor="#00FFFF"><font color="#008000" size="' . $tamanio_letra . '">' . htmlspecialchars($fila[$j]) . '</font></td>'; // Árbol
        }
    }
    echo '</tr>';
}

echo '</table>';
?>

<?php

// Convierte el texto a minúsculas para que las comparaciones sean insensibles a mayúsculas y minúsculas
$cadena = "Dada una cadena de texto";
$texto = strtolower($cadena);
    
// Inicializa el contador para las vocales
$Count = 0;

// Recorre cada carácter de la cadena
for ($i = 0; $i < strlen($texto); $i++) {
    $caracter = $texto[$i];
        
    // Comprueba si el carácter es una vocal y aumenta el contador correspondiente
    switch ($caracter) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            $Count++;
            break;
    }
}

// Muestra el resultado
echo "Hay $Count vocales.<br>";
?>
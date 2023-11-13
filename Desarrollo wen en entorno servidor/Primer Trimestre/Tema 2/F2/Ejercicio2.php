<?php
function calcularMedia() {
    $numeros = func_get_args();  // Obtener los argumentos como un array
    $cantidadNumeros = count($numeros);

    if ($cantidadNumeros === 0) {
        return "No se proporcionaron números para calcular la media.";
    }

    $suma = array_sum($numeros);
    $media = $suma / $cantidadNumeros;

    return $media;
}

// Ejemplo de uso
$media = calcularMedia(2, 4, 6, 8);
echo "La media de los números proporcionados es: $media";
?>

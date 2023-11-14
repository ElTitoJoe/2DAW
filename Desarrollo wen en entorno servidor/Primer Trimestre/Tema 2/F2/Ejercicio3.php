<?php
function calcularMedia(float ...$numeros): float {
    if (empty($numeros)) {
        return 0;  // Devolver 0 si no se proporcionaron números
    }

    $suma = array_sum($numeros);
    $media = $suma / count($numeros);

    return $media;
}

// Ejemplo de uso
$media = calcularMedia(2, 4, 6, 8);
echo "La media de los números proporcionados es: $media";
?>

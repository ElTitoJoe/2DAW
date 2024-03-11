<?php
// Generar un array de 10 valores aleatorios entre 1 y 10
$valores_aleatorios = array();
for ($i = 0; $i < 10; $i++) {
    $valores_aleatorios[] = rand(1, 10);
}

// Mostrar el array de valores aleatorios
echo "Array de valores aleatorios:<br>";
print_r($valores_aleatorios);

// Contar el número de valores iguales a 2 en el array
$num_2 = array_count_values($valores_aleatorios)[2];
echo "<br>Número de valores iguales a 2: $num_2";

?>
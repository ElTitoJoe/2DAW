<?php
$pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);

// Mostrar el array original
echo "Array original:<br>";
print_r($pila);

// Ordenar el array por valores en orden ascendente (asort)
echo "<br>Orden ascendente por valores (asort):<br>";
asort($pila);
print_r($pila);

// Ordenar el array por valores en orden descendente (arsort)
echo "<br>Orden descendente por valores (arsort):<br>";
arsort($pila);
print_r($pila);

// Ordenar el array por claves en orden ascendente (ksort)
echo "<br>Orden ascendente por claves (ksort):<br>";
ksort($pila);
print_r($pila);

// Ordenar el array por valores en orden ascendente (sort)
echo "<br>Orden ascendente por valores (sort):<br>";
sort($pila);
print_r($pila);

// Ordenar el array por valores en orden descendente (rsort)
echo "<br>Orden descendente por valores (rsort):<br>";
rsort($pila);
print_r($pila);

?>
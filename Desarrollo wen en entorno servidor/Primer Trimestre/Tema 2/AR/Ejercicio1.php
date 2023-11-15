<?php
// Definir el array de días de la semana
$dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');

echo "Mostrando parejas índice/valor usando foreach:<br>";
// Mostrar parejas índice/valor usando foreach
foreach ($dias as $indice => $valor) {
    echo "Índice: " . $indice . ", Valor: " . $valor . "<br>";
}

echo "<br>Mostrando parejas índice/valor usando for:<br>";
// Mostrar parejas índice/valor usando for
$longitud = count($dias);
for ($i = 0; $i < $longitud; $i++) {
    echo "Índice: " . $i . ", Valor: " . $dias[$i] . "<br>";
}
?>

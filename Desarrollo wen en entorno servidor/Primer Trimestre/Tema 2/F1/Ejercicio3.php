<?php
function diasASegundos($dias) {
    $segundosPorDia = 24 * 60 * 60; // 1 día tiene 24 horas, 60 minutos por hora, 60 segundos por minuto
    $segundosTotales = $dias * $segundosPorDia;
    return $segundosTotales;
}

// Ejemplo de uso
$numeroDeDias = 5;
$resultado = diasASegundos($numeroDeDias);
echo "En $numeroDeDias días hay $resultado segundos.";
?>

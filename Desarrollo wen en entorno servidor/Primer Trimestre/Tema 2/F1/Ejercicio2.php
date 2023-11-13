<?php
function informacionPais($pais, $capital = "Madrid", $habitantes = "muchos") {
    echo "La capital de $pais es $capital y tiene $habitantes habitantes.<br>";
}

// Llamadas a la función con diferentes números de argumentos
informacionPais("España");
informacionPais("Portugal", "Lisboa");
informacionPais("Francia", "París", "6.000.000");
?>

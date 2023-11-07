<?php
$cadena = "192.168.1.1"; // Reemplaza esto con la cadena que deseas verificar

// Utiliza filter_var para verificar si la cadena contiene una dirección IP válida
if (filter_var($cadena, FILTER_VALIDATE_IP)) {
    echo "La cadena '$cadena' contiene una dirección IP válida.";
} else {
    echo "La cadena '$cadena' no contiene una dirección IP válida.";
}
?>

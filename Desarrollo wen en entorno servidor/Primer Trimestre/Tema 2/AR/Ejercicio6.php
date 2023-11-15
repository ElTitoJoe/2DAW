<?php
// Definir el array de países y capitales
$paises_capitales = array(
    "Francia" => "París",
    "Alemania" => "Berlín",
    "España" => "Madrid",
    // Agregar más países y capitales según sea necesario
);

// Mostrar la frase para cada país y capital
foreach ($paises_capitales as $pais => $capital) {
    echo "La capital de $pais es $capital.<br>";
}

// Ordenar el array por el nombre del país (ksort) y luego por el nombre de la capital (asort)
ksort($paises_capitales);
asort($paises_capitales);

// Mostrar el array ordenado por país y capital
echo "<br>Array ordenado por país y capital:<br>";
foreach ($paises_capitales as $pais => $capital) {
    echo "La capital de $pais es $capital.<br>";
}

?>
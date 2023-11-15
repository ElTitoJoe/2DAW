<?php
// Array bidimensional con tipos de colores y sus respectivos códigos
$colores = array(
    "fuerte" => array("#FF0000", "#00FF00", "#0000FF"),
    "suave" => array("#FE9ABC", "#FDF189", "#BC8F8F")
);

// Función para generar la tabla HTML
function generarTabla($array)
{
    echo "<table border='1'>";
    foreach ($array as $tipo => $listaColores) {
        echo "<tr>";
        foreach ($listaColores as $color) {
            echo "<td style='background-color: $color;'>$tipo:<br>$color</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Mostrar la tabla
generarTabla($colores);
?>


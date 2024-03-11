<?php
$colores = array(
    "fuerte" => array("#FF0000", "#00FF00", "#0000FF"),
    "suave" => array("#FE9ABC", "#FDF189", "#BC8F8F")
);

$color1 = "#FF88CC";
$color2 = "#FF0000";

$encontrado1 = false;
$encontrado2 = false;

foreach ($colores as $listaColores) {
    if (in_array($color1, $listaColores)) {
        $encontrado1 = true;
    }
    if (in_array($color2, $listaColores)) {
        $encontrado2 = true;
    }
}

echo "¿El color $color1 está en el array? ";
echo $encontrado1 ? "Sí" : "No";
echo "<br>";
echo "¿El color $color2 está en el array? ";
echo $encontrado2 ? "Sí" : "No";
?>

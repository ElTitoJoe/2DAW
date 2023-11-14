<?php
/*
Definición de la función calculaCantidad
*/
function calculaCantidad($anos, $depositoInicial, $tasaInteres) {
    $interesCompuesto = $depositoInicial * (1 + ($tasaInteres / 100)) ** $anos;
    return number_format($interesCompuesto, 2, ',', '.');
}

$interes = 5;
echo "<p><b>El interés actual es $interes%.</b></p>";
echo "<p>Si usted deposita 100 &#x20AC; hoy, sus ahorros crecerán a";
echo calculaCantidad(5, 100, $interes);
echo "&#x20AC; en 5 años.</p>";
echo "<p>Si usted deposita 1.500&#x20AC; hoy, sus ahorros crecerán a";
echo calculaCantidad(20, 1500, $interes);
echo "&#x20AC; después de 20 años.</p>";
?>

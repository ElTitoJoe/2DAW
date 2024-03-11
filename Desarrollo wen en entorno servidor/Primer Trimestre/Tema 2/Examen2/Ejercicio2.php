<?php
//Diseñar una funcion que reciba como parámetros un array y un array y un valor numérico. La función debe de ordenar el array siguiendo
//el criterio especificado en el valor numérico y devolver el array ordenado
//Los posibles valores de argumento numerico son:
//1.Ordenación de menor a mayor
//2.Ordenacion de mayor a menor
//3.Ordenación por clave de menor a mayor 
//4.Ordenación por clave de mayor a menor 
//Otro valor -> No hace nada y muestra un mensaje de parámetro incorrecto 
//Si no se especifica valor se realizará una ordenacion de menor a mayor
function ordenarArray($array, $tipoOrden) {
    switch ($tipoOrden) {
        case 1:
            sort($array); //Ordena de menor a mayor
            break;
        case 2:
            rsort($array); //Ordena de mayor a menor
            break;
        case 3:
            ksort($array); //Ordena por clave de menor a mayor
            break;
        case 4:
            krsort($array); //Ordena por clave de mayor a menor
            break;
        case 5:
            echo "Tipo de ordenación incorrecto. No se realizó ninguna ordenación.";
            return null;
        default:
        sort($array);
        break;
    }
    return $array;
}

$miArray = [4, 2, 7, 1, 5];
$miArrayAsociativo = ["j" => 4, "o" => 2, "a" => 7, "q" => 1, "u" => 5,"i" => 9,"n" => 0];
$tipoOrdenUsuario = 1;
$resultado = ordenarArray($miArray, $tipoOrdenUsuario);

// Verificación del resultado y su impresión
if ($resultado !== null) {
    echo "Array ordenado: " . implode(", ", $resultado);
}
?>
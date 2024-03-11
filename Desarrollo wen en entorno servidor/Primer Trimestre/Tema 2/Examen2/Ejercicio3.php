<?php
//Realizar una función que reciba como parśmetro una cadena y un valor numérico. La función debe devolver una cadena igual que la que se pasó por parámetro excepto en que se ha eliminado la palabra 
//situada en la posicion que se ha pasado por parámetro. Se debe hacer utilizando arrays. Si se especifdica un número de palabras que no existe se ha de mostrar un mensaje de error
function eliminarPalabraPorPosicion($cadena, $posicion) {
    $palabras = explode(" ", $cadena);

    //Te muestra que la posicion es inválida
    if ($posicion < 1 || $posicion > count($palabras)) {
        return "La posición especificada no es válida.";
    }

    unset($palabras[$posicion - 1]);
    $cadenaSinPalabra = implode(" ", $palabras);

    return $cadenaSinPalabra;
}


$cadena = "Estoy indeciso entre cual de los dos ejercicos hacer asi que he decidido hacer antes el 2 y el 3";
$posicionEliminar = 3; //Pisicion que se elimina

$resultado = eliminarPalabraPorPosicion($cadena, $posicionEliminar);
echo $resultado;

?>
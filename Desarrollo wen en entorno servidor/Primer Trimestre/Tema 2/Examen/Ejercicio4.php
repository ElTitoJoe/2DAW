<?php
//Dada una frase, escribir la palabra que esté en la posición N.
//Por ejemplo, $cad = "Hola que tal" y $n=2 debe escribir "que" porque es la segunda palabra de la frase. 

$cad = "Angel 5 y compro jamon";
$n = 2; 
$palabras = explode(" ", $cad);
if ($n >= 1 && $n <= count($palabras)) {
    $palabraEnPosicionN = $palabras[$n - 1];
    echo $palabraEnPosicionN;
} else {
    echo "La posición especificada no es válida.";
}

?>
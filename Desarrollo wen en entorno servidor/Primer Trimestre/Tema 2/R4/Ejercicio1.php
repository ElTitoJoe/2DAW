<?php
$nombre = "Joaquín";
$apellido1 = "Barranco";
$apellido2 = "Campos";
$edad = 19;

// a. Todo seguido sin concatenación con punto
echo "Me llamo $nombre $apellido1 $apellido2 y tengo $edad años\n <br>";

// b. Todo seguido con concatenación con punto
echo "Me llamo " . $nombre . " " . $apellido1 . " " . $apellido2 . " y tengo " . $edad . " años\n <br>";

// c. Cada variable en una línea sin concatenación con punto
echo "Me llamo $nombre\n";
echo "$apellido1\n";
echo "$apellido2\n";
echo "y tengo $edad años\n <br>";

// d. Cada variable en una línea
echo "Me llamo $nombre\n";
echo "$apellido1\n";
echo "$apellido2\n";
echo "y tengo $edad años\n";
?>

<?php

$cadena = "Bienvenido a nuestro cine. Ha efectuado usted la decisión correcta";

// a. Obtener "Ha efectuado usted la decisión correcta."
$resultado_a = substr($cadena, strpos($cadena, "Ha"));

// b. Obtener "Usted la decisión correcta."
$resultado_b = substr($cadena, strpos($cadena, "Usted"));

// c. Obtener "Ha ef"
$resultado_c = substr($cadena, strpos($cadena, "Ha"), 5);

// d. Obtener "Haq efectuado usted la decisión corr"
$resultado_d = substr_replace($cadena, "q", strpos($cadena, "Ha"), 1);

// e. Obtener "Ine. Ha ef"
$resultado_e = substr($cadena, strpos($cadena, "Ine"), 8);

// f. Obtener "Ine. Ha efectuado usted la decisión corr"
$resultado_f = substr_replace($cadena, "q", strpos($cadena, "Ine"), 1);

// Muestra los resultados
echo "a. $resultado_a\n<br>";
echo "b. $resultado_b\n<br>";
echo "c. $resultado_c\n<br>";
echo "d. $resultado_d\n<br>";
echo "e. $resultado_e\n<br>";
echo "f. $resultado_f\n<br>";


?>
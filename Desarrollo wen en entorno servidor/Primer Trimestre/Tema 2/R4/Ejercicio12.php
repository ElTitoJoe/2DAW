<?php
$cadena = "Esta es una cadena de texto en la que vamos a contar textos cuántas veces aparece la palabra 'texto'.";
$palabra = "texto";
$vecesAparece = substr_count(strtolower($cadena), strtolower($palabra));
echo "La palabra '$palabra' aparece $vecesAparece veces en la cadena.";
?>
<?php
function generarEncabezadoHTML($titulo) {
    echo "<!DOCTYPE html>\n";
    echo "<html lang='es'>\n";
    echo "<head>\n";
    echo "    <meta charset='UTF-8'>\n";
    echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    echo "    <title>$titulo</title>\n";
    echo "</head>\n";
    echo "<body>\n";
}

// Ejemplo de uso
$tituloPagina = "Mi Página Web";
generarEncabezadoHTML($tituloPagina);
echo "<h1>Bienvenido a $tituloPagina</h1>";
echo "<p>Contenido de la página...</p>";
echo "</body>\n";
echo "</html>\n";
?>

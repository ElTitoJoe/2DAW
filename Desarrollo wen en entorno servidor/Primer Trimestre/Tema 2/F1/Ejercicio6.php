<?php
function textoEnNegrita($texto) {
    return "<strong>$texto</strong>";
}

// Ejemplo de uso
$textoOriginal = "Este es un texto.";
$textoEnNegrita = textoEnNegrita($textoOriginal);

echo "Texto original: $textoOriginal <br>";
echo "Texto en negrita: $textoEnNegrita";
?>


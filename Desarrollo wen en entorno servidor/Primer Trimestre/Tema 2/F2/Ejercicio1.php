<?php
function intercambio(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Ejemplo de uso
$a = 3;
$b = 7;
intercambio($a, $b);

echo "Después de la ejecución de la función, \$a contendrá el valor $a y \$b contendrá el valor $b.";
?>

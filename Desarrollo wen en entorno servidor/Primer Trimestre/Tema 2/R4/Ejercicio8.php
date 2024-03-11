<?php

function DevuelveNombre($nombre, $apellido1, $apellido2, $opcion) {
    // Concatena el nombre y los apellidos en una sola cadena
    $nombreCompleto = "$nombre $apellido1 $apellido2";

    // Aplica la opción deseada
    switch ($opcion) {
        case 'L':
            $nombreCompleto = strtolower($nombreCompleto);
            break;
        case 'U':
            $nombreCompleto = strtoupper($nombreCompleto);
            break;
        case 'M':
            $nombreCompleto = ucwords(strtolower($nombreCompleto));
            break;
        default:
            // Opción no válida, se mantiene la cadena original
    }

    return $nombreCompleto;
}

$Snombre = "Joaquin";
$Sapellido1 = "Barranco";
$Sapellido2 = "Campos";

// Opción 'L': Minúsculas
echo "Opción 'L': " . DevuelveNombre($Snombre, $Sapellido1, $Sapellido2, 'L') . "\n";   

// Opción 'U': Mayúsculas
echo "Opción 'U': " . DevuelveNombre($Snombre, $Sapellido1, $Sapellido2, 'U') . "\n";

// Opción 'M': Iniciales en mayúscula
echo "Opción 'M': " . DevuelveNombre($Snombre, $Sapellido1, $Sapellido2, 'M') . "\n";


?>
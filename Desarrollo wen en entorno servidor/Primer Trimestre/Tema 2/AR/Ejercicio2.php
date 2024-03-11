<?php
// Definir el array con la lista de 5 alumnos
$alumnos = array('Juan', 'María', 'Carlos', 'Luis', 'Ana');

// Mostrar los 3 primeros alumnos del array usando array_slice
$primeros_tres = array_slice($alumnos, 0, 3);
echo "Los 3 primeros alumnos son: <br>";
foreach ($primeros_tres as $alumno) {
    echo $alumno . "<br>";
}

// Mostrar los 2 últimos alumnos del array usando array_splice
$ultimos_dos = array_splice($alumnos, -2);
echo "<br>Los 2 últimos alumnos son: <br>";
foreach ($ultimos_dos as $alumno) {
    echo $alumno . "<br>";
}
?>

<?php
// Función para validar un nombre de usuario
function validarNombreUsuario($nombreUsuario) {
    // Comprobar la longitud permitida (entre 3 y 20 caracteres)
    if (strlen($nombreUsuario) < 3 || strlen($nombreUsuario) > 20) {
        return false;
    }

    // Comprobar si la cadena contiene solo caracteres permitidos (letras, números, guión alto, guión bajo)
    if (!preg_match('/^[A-Za-z0-9_-]+$/', $nombreUsuario)) {
        return false;
    }

    return true;
}

// Nombre de usuario a validar
$nombreUsuario = "usuario_123";

// Llamar a la función para validar el nombre de usuario
if (validarNombreUsuario($nombreUsuario)) {
    echo "El nombre de usuario es válido.";
} else {
    echo "El nombre de usuario no es válido.";
}
?>

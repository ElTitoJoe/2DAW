<?php
    $nombreUsuario = "usuario123"; // Reemplaza con el nombre de usuario que deseas validar
    // Comprobar la longitud mínima y máxima
    if (strlen($nombreUsuario) >= 8 && strlen($nombreUsuario) <= 12) {
        // Comprobar que no comienza con un número
        if (!preg_match('/^\d/', $nombreUsuario)) {
            echo "El nombre de usuario es válido.";
        } else {
            echo "El nombre de usuario no es válido (comienza con un número).";
        }
    } else {
        echo "El nombre de usuario no es válido (longitud incorrecta).";
    }
    
?>
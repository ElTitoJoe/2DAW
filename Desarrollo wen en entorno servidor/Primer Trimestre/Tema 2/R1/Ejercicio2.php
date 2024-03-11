<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Define la dirección de correo
        $correo = "correo@example.com";

        // Validar si la dirección de correo es válida
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Separar la dirección de correo en nombre de usuario y dominio
            list($nombre_usuario, $dominio) = explode("@", $correo);

            echo "<p>La dirección de correo es válida.</p>";
            echo "<p>Nombre de usuario: $nombre_usuario</p>";
            echo "<p>Dominio: $dominio</p>";
        } else {
            echo "<p>La dirección de correo no es válida.</p>";
        }
    }
    ?>
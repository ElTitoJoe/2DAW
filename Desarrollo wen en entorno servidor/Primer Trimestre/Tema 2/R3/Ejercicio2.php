<?php
// Define la dirección de correo electrónico
$direccionCorreo = "Ejemplo@Correo.com";

// Convierte la dirección de correo a minúsculas
$direccionCorreo = strtolower($direccionCorreo);

// Divide la dirección de correo en nombre de usuario y dominio
list($nombreUsuario, $dominio) = explode('@', $direccionCorreo);

// Muestra el nombre de usuario y el dominio
echo "Usuario: $nombreUsuario<br>";
echo "Dominio: $dominio";
?>

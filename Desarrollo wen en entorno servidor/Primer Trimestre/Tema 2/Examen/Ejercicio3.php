<?php
//Diseña una página web que almacene en dos varables y escribe el nombre de usuario y el dominio de uan dirección de e-mail contenida den una variable

    $email = "yoabarrancampos@gmail.com";
    list($usuario, $dominio) = explode("@", $email);
    echo "Nombre de usuario: " . $usuario . "<br>";
    echo "Dominio: " . $dominio;
?>
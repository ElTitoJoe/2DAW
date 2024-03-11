<?php
// Conectar a la base de datos
$db = new PDO('mysql:host=localhost;dbname=tienda', 'root', 'usuario');

// Crear el usuario 'alumno'
$stmt = $db->prepare('INSERT INTO usuarios (nombre, contrasena, es_admin) VALUES (?, ?, ?)');
$stmt->execute(['alumno', password_hash('alumno', PASSWORD_DEFAULT), 0]);

// Crear el usuario 'profesor'
$stmt = $db->prepare('INSERT INTO usuarios (nombre, contrasena, es_admin) VALUES (?, ?, ?)');
$stmt->execute(['profesor', password_hash('profesor', PASSWORD_DEFAULT), 1]);
?>

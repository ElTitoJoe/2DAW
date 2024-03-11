<?php
session_start();

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí deberías implementar la lógica para verificar las credenciales del usuario
    // Por ejemplo, consultando una base de datos
    // Supongamos que $authenticated es el resultado de la verificación de credenciales

    $authenticated = true; // Temporal: Simula que la autenticación es exitosa

    if ($authenticated) {
        // Autenticación exitosa, redirigir al panel de administración
        $_SESSION['user_id'] = 123; // ID del usuario (puedes obtenerlo de la base de datos)
        $_SESSION['user_type'] = 'admin'; // Tipo de usuario (administrador)
        header("Location: admin_panel.php");
        exit;
    } else {
        // Autenticación fallida, mostrar mensaje de error
        echo "Credenciales inválidas. Por favor, intente nuevamente.";
    }
} else {
    // Si el método de solicitud no es POST, redirigir al usuario a la página de inicio
    header("Location: login.html");
    exit;
}
?>

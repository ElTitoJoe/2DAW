<?php
// Iniciar la sesión
session_start();

$error = '';

// Conectar a la base de datos
try {
    $db = new PDO('mysql:host=localhost;dbname=pikminShop', 'root', 'root');
} catch (PDOException $e) {
    $error = 'No se pudo conectar a la base de datos';
}

// Comprobar si se ha enviado el formulario
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST' && empty($error)) {

    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar los datos del formulario
    if (empty($username) || empty($password)) {
        $error = 'Debes introducir un nombre de usuario y una contraseña';
    } else {
        // Buscar al usuario en la base de datos
        $stmt = $db->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // Comprobar la contraseña
        if ($user && password_verify($password, $user['contrasena'])) {
            // Iniciar la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['es_admin'] = $user['es_admin'];
            // Redirigir al usuario según su perfil
            if ($user['es_admin']) {
                header('Location: admin.php');
            } else {
                header('Location: compras.php');
            }
        } else {
            // Mostrar un error
            $error = htmlspecialchars('Nombre de usuario o contraseña incorrectos');
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <!-- Enlazar a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Enlazar a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Iniciar sesión</h2>
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label><br>
                        <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <input type="submit" value="Iniciar sesión" class="btn btn-primary">
                </form>
                <p>¿Aún no estás registrado? <a href="registro.php">Regístrate</a></p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Conectar a la base de datos
$db = new PDO('mysql:host=localhost;dbname=pikminShop', 'root', 'usuario');

// Comprobar si se ha enviado el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar los datos del formulario
    if (empty($username) || empty($password)) {
        $error = 'Debes introducir un nombre de usuario y una contraseña';
    } else if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $username)) { // solo letras y números, al menos 5 caracteres
        $error = 'El nombre de usuario debe tener al menos 5 caracteres y solo puede contener letras y números';
    } else if (strlen($password) < 8) {
        $error = 'La contraseña debe tener al menos 8 caracteres';
    } else {
        // Comprobar si el nombre de usuario ya existe
        $stmt = $db->prepare('SELECT * FROM usuarios WHERE nombre = ?');
        $stmt->execute([$username]);
        if ($stmt->fetch()) {
            $error = 'El nombre de usuario ya existe';
        } else {
            // Insertar el nuevo usuario en la base de datos
            $stmt = $db->prepare('INSERT INTO usuarios (nombre, contrasena, es_admin) VALUES (?, ?, ?)');
            $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT), 0]);
            $success = 'Usuario registrado con éxito';
        }
    }
}
?>

<!-- Formulario de registro -->
<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
    <!-- Enlazar a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Enlazar a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Registrarse</h2>
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($success)): ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <form action="registro.php" method="post">
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label><br>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label><br>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <input type="submit" value="Registrarse" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

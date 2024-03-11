<?php
// Desactivar la visualización de errores
ini_set('display_errors', 0);
// Informar de todos los errores excepto E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Iniciar la sesión
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Comprobar si el usuario es un administrador
if (!$_SESSION['es_admin']) {
    // Si el usuario no es un administrador, redirigirlo a la página de inicio de sesión
    header('Location: login.php');
    exit;
}

// Comprobar si el usuario ha pulsado el botón de cerrar sesión
if (isset($_POST['logout'])) {
    // Cerrar la sesión
    session_destroy();
    // Redirigir al usuario a la página de inicio de sesión
    header('Location: login.php');
    exit;
}

try {
    // Conectar a la base de datos
    $db = new PDO('mysql:host=localhost;dbname=tienda', 'root', 'usuario');

    // Comprobar si se ha enviado el formulario de añadir producto
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['añadir_producto'])) {
        // Añadir el producto a la base de datos
        $stmt = $db->prepare('INSERT INTO productos (nombre, descripcion, imagen) VALUES (?, ?, ?)');
        $stmt->execute([$_POST['nombre'], $_POST['descripcion'], $_POST['imagen']]);
    }

    // Comprobar si se ha enviado el formulario de eliminar producto
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_producto'])) {
        // Eliminar el producto de la base de datos
        $stmt = $db->prepare('DELETE FROM productos WHERE id = ?');
        $stmt->execute([$_POST['producto_id']]);
    }

    // Comprobar si se ha enviado el formulario de cambiar perfil de usuario
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cambiar_perfil'])) {
        // Obtener los datos del formulario
        $username = $_POST['username'];
        $es_admin = $_POST['es_admin'];

        // Validar los datos del formulario
        if (empty($username)) {
            $error = 'Debes introducir un nombre de usuario';
        } else {
            // Comprobar si el nombre de usuario existe
            $stmt = $db->prepare('SELECT * FROM usuarios WHERE nombre = ?');
            $stmt->execute([$username]);
            $user = $stmt->fetch();
            if (!$user) {
                $error = 'El nombre de usuario no existe';
            } else {
                // Cambiar el perfil del usuario
                $stmt = $db->prepare('UPDATE usuarios SET es_admin = ? WHERE nombre = ?');
                $stmt->execute([$es_admin, $username]);
                $success = 'Perfil de usuario cambiado con éxito';
            }
        }
    }

    // Obtener todos los productos
    $stmt = $db->prepare('SELECT * FROM productos');
    $stmt->execute();
    $productos = $stmt->fetchAll();
} catch (PDOException $e) {
    // Manejar el error
    $error = 'Ha ocurrido un error al interactuar con la base de datos';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administración</title>
    <!-- Enlazar a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Enlazar a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Administración</h2>
        <h3>Añadir producto</h3>
        <form action="admin.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label><br>
                <input type="text" id="nombre" name="nombre" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label><br>
                <input type="text" id="descripcion" name="descripcion" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen (URL):</label><br>
                <input type="text" id="imagen" name="imagen" class="form-control"><br>
            </div>
            <input type="submit" name="añadir_producto" value="Añadir producto" class="btn btn-primary">
        </form>
        <h3>Eliminar producto</h3>
        <form action="admin.php" method="post">
            <div class="form-group">
                <label for="producto_id">ID del producto:</label><br>
                <input type="text" id="producto_id" name="producto_id" class="form-control"><br>
            </div>
            <input type="submit" name="eliminar_producto" value="Eliminar producto" class="btn btn-primary">
        </form>
        <h3>Cambiar perfil de usuario</h3>
        <form action="admin.php" method="post">
            <div class="form-group">
                <label for="username">Nombre de usuario:</label><br>
                <input type="text" id="username" name="username" class="form-control" required><br>
            </div>
            <div class="form-check">
                <input type="radio" id="normal" name="es_admin" value="0" class="form-check-input">
                <label for="normal" class="form-check-label">Normal</label><br>
            </div>
            <div class="form-check">
                <input type="radio" id="admin" name="es_admin" value="1" class="form-check-input">
                <label for="admin" class="form-check-label">Administrador</label><br>
            </div>
            <input type="submit" name="cambiar_perfil" value="Cambiar perfil" class="btn btn-primary">
        </form>
        <h3>Productos existentes</h3>
        <?php foreach ($productos as $producto): ?>
            <div>
                <h4><?= $producto['nombre'] ?></h4>
                <img src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <p><?= $producto['descripcion'] ?></p>
            </div>
        <?php endforeach; ?>
        <!-- Mensajes de error y éxito -->
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
        <form action="admin.php" method="post">
            <input type="submit" name="logout" value="Cerrar sesión" class="btn btn-primary">
        </form>
    </div>
</body>
</html>

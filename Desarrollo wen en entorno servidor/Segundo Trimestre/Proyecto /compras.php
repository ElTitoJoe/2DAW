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
if ($_SESSION['es_admin']) {
    // Si el usuario es un administrador, redirigirlo a la página de inicio de sesión
    header('Location: login.php');
    exit;
}

// Conectar a la base de datos
$db = new PDO('mysql:host=localhost;dbname=tienda', 'root', 'usuario');

// Obtener todos los productos
$stmt = $db->prepare('SELECT * FROM productos');
$stmt->execute();
$productos = $stmt->fetchAll();

// Comprobar si se ha enviado el formulario de idioma
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Guardar la preferencia de idioma en una cookie
    setcookie('idioma', $_POST['idioma'], time() + (86400 * 30), "/"); // 86400 = 1 día
    // Guardar la preferencia de color en una cookie
    setcookie('color', $_POST['color'], time() + (86400 * 30), "/"); // 86400 = 1 día
}

// Obtener la preferencia de idioma de la cookie
$idioma = isset($_COOKIE['idioma']) ? $_COOKIE['idioma'] : 'es';
// Obtener la preferencia de color de la cookie
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compras</title>
    <!-- Enlazar a la hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Enlazar a tu hoja de estilos personalizada -->
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            color: <?= $color ?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Productos</h2>
        <?php foreach ($productos as $producto): ?>
            <div class="card">
                <h3 class="card-header"><?= $producto['nombre'] ?></h3>
                <img class="card-img-top" src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <div class="card-body">
                    <p class="card-text"><?= $producto['descripcion'] ?></p>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="producto_id" value="<?= $producto['id'] ?>">
                        <input type="submit" value="Añadir al carrito" class="btn btn-primary">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
        <form action="compras.php" method="post">
            <label for="idioma">Idioma:</label>
            <select id="idioma" name="idioma" class="form-control">
                <option value="es" <?= $idioma == 'es' ? 'selected' : '' ?>>Español</option>
                <option value="en" <?= $idioma == 'en' ? 'selected' : '' ?>>Inglés</option>
                <!-- Aquí podrías añadir más opciones de idioma -->
            </select>
            <label for="color">Color:</label>
            <select id="color" name="color" class="form-control">
                <option value="white" <?= $color == 'white' ? 'selected' : '' ?>>Blanco</option>
                <option value="green" <?= $color == 'green' ? 'selected' : '' ?>>Verde</option>
                <!-- Aquí podrías añadir más opciones de color -->
            </select>
            <input type="submit" value="Cambiar idioma y color" class="btn btn-primary">
        </form>
        <form action="salir.php" method="post">
            <input type="submit" value="Cerrar sesión" class="btn btn-primary">
        </form>
    </div>
</body>
</html>

<?php
// Iniciar la sesión
session_start();

// Comprobar si el carrito existe, si no, inicializarlo
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Conectar a la base de datos
$db = new PDO('mysql:host=localhost;dbname=pikminShop', 'root', 'usuario');

// Comprobar si se ha enviado el formulario de añadir al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['añadir_al_carrito'])) {
    $producto_id = $_POST['producto_id'];
    // Añadir el producto al carrito
    if (!in_array($producto_id, $_SESSION['carrito'])) {
        array_push($_SESSION['carrito'], $producto_id);
    }
}

// Comprobar si se ha enviado el formulario de eliminar del carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_del_carrito'])) {
    $producto_id = $_POST['producto_id'];
    // Eliminar el producto del carrito
    if (($key = array_search($producto_id, $_SESSION['carrito'])) !== false) {
        unset($_SESSION['carrito'][$key]);
    }
}

// Obtener los productos del carrito
$productos = array();
foreach ($_SESSION['carrito'] as $producto_id) {
    $stmt = $db->prepare('SELECT * FROM productos WHERE id = ?');
    $stmt->execute([$producto_id]);
    $producto = $stmt->fetch();
    array_push($productos, $producto);
}

// Obtener la preferencia de color de la cookie
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrito de compras</title>
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
        <h2>Carrito de compras</h2>
        <?php foreach ($productos as $producto): ?>
            <div class="card">
                <h3 class="card-header"><?= $producto['nombre'] ?></h3>
                <img class="card-img-top" src="<?= $producto['imagen'] ?>" alt="<?= $producto['nombre'] ?>">
                <div class="card-body">
                    <p class="card-text"><?= $producto['descripcion'] ?></p>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="producto_id" value="<?= $producto['id'] ?>">
                        <input type="submit" name="eliminar_del_carrito" value="Eliminar del carrito" class="btn btn-primary">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
        <form action="comprar.php" method="post">
            <input type="submit" value="Comprar ahora" class="btn btn-primary">
        </form>
    </div>
</body>
</html>

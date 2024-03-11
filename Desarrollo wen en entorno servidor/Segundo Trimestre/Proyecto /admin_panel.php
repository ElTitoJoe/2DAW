<?php
session_start();

// Verifica si el usuario está autenticado como administrador
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'admin') {
    header("Location: login.html");
    exit;
}

include 'db_connection.php'; // Incluir archivo de conexión a la base de datos

// Función para obtener la lista de productos desde la base de datos
function listarProductos() {
    global $conn;
    $productos = array();
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }
    return $productos;
}

$productos = listarProductos(); // Obtener la lista de productos

$conn->close(); // Cerrar conexión a la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administración</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Panel de administración</h2>
    <a href="logout.php">Cerrar sesión</a>
    <h3>Lista de productos</h3>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody id="productList">
            <?php foreach ($productos as $producto) : ?>
                <tr>
                    <td><?php echo $producto['nombre']; ?></td>
                    <td><img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" style="width: 100px;"></td>
                    <td><?php echo $producto['descripcion']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h3>Agregar nuevo producto</h3>
    <form id="addProductForm" action="add_product.php" method="post">
        <label for="productName">Nombre:</label>
        <input type="text" id="productName" name="nombre" required><br>
        <label for="productImage">Imagen:</label>
        <input type="text" id="productImage" name="imagen" required><br>
        <label for="productDescription">Descripción:</label>
        <textarea id="productDescription" name="descripcion" rows="4" required></textarea><br>
        <input type="submit" value="Agregar producto">
    </form>

    <script src="admin_panel.js"></script>
</body>
</html>

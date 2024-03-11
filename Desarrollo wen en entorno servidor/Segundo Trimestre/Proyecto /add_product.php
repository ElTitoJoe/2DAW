<?php
include 'db_connection.php'; // Incluir archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $imagen = $_POST['imagen']; // Aquí deberías guardar la ruta de la imagen en el servidor
    $descripcion = $_POST['descripcion'];

    // Preparar la consulta SQL para agregar el producto
    $sql = "INSERT INTO productos (nombre, imagen, descripcion) VALUES ('$nombre', '$imagen', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Si el método de solicitud no es POST, redirigir al usuario a la página de inicio
    header("Location: login.html");
    exit;
}

$conn->close(); // Cerrar conexión a la base de datos
?>

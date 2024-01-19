
<!DOCTYPE html>
<html>
<head>
    <title>Formulario simple</title>
</head>
<body>
<?php
    // Verificar si el formulario fue enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recuperar los datos del formulario
        $busqueda = $_POST['busqueda'];
        $buscar_en = $_POST['buscar_en'];
        $genero = $_POST['genero'];

        // Procesar la búsqueda (por ejemplo, buscar en una base de datos)
        // ...

        // Generar la respuesta del formulario
        echo "<p>Estos son los datos introducidos:</p>";
        echo "<ul>";
        echo "<li>Texto de búsqueda: $busqueda</li>";
        echo "<li>Buscar en: $buscar_en </li>";
        echo "<li>Género: $genero </li>";
        echo "</ul>";
    }
?>
</body>
</html>
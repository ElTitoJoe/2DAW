<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario simple Búsqueda de canciones</title>
</head>
<body>
    <h1>Formulario simple Búsqueda de canciones</h1>
    <form action="Ejercicio1.5.php" method="post">
        <label for="busqueda">Texto a buscar:</label>
        <input type="text" id="busqueda" name="busqueda" required>
        <br>
        <p>Buscar en :
            <input type="radio" name="buscar_en" value="Titulos"> Títulos de canción
            <input type="radio" name="buscar_en" value="Nombres de album"> Nombres de álbum
            <input type="radio" name="buscar_en" value="Ambos"> Ambos campos
        </p>
        <label for="genero">Género musical:</label>
        <select id="genero" name="genero">
            <option value="Todos">Todos</option>
            <option value="Acustica">Acústica</option>
            <option value="Banda sonora">Banda Sonora</option>
            <option value="Blues">Blues</option>
            <option value="Electronica">Electrónica</option>
            <option value="Folk">Folk</option>
            <option value="Jazz">Jazz</option>
            <option value="New age">New Age</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Buscar">
    </form>
</body>
</html>
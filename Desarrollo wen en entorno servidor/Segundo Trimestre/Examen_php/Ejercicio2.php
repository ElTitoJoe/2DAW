<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <style>
        /* Estilos CSS */
        /* General */
        BODY {font-family: verdana,arial, sans-serif; font-size: 10pt;}

        /* Contenido */
        H1 {font-size: 16pt; font-weight: bold; color: #0066CC;}
        H2 {font-size: 12pt; font-weight: bold; font-style: italic; color: black;}
        H3 {font-size: 10pt; font-weight: bold; color: black;}

        /* Formulario */
        FORM.borde {border: 1px dotted #0066CC; padding: 0.5em 0.2em; width: 80%;}
        FORM P {clear: left; margin: 0.2em; padding: 0.1em;}
        FORM P LABEL {float: left; width: 25%; font-weight: bold;}
        .error {color: red;}
        
        /* Tablas */
        TH {font-size: 10pt; font-weight: bold; color: white; background: #0066CC; text-align: left;}
        TD {font-size: 10pt; background: #CCCCCC;}
        TD.derecha {font-size: 10pt; text-align: right; background: #FFFFFF;}
        TD.izquierda {font-size: 10pt; text-align: left; background: #FFFFFF;}
    </style>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="curso">Curso:</label>
        <select name="curso" id="curso">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <label for="letra">Letra:</label>
        <select name="letra" id="letra">
            <option value="A">A</option>
            <option value="B">B</option>
        </select>
        <input type="submit" value="Filtrar">
    </form>

    <?php
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "instituto", "instituto", "Instituto");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        // Inicializar variables para los filtros
        $filtro_curso = isset($_POST['curso']) ? $_POST['curso'] : '';
        $filtro_letra = isset($_POST['letra']) ? $_POST['letra'] : '';

        // Consulta SQL base para seleccionar los alumnos
        $sql = "SELECT * FROM Alumnos";

        // Agregar filtros a la consulta si se seleccionaron valores
        if (!empty($filtro_curso) && !empty($filtro_letra)) {
            $sql .= " WHERE Curso = '$filtro_curso' AND Letra = '$filtro_letra'";
        } elseif (!empty($filtro_curso)) {
            $sql .= " WHERE Curso = '$filtro_curso'";
        } elseif (!empty($filtro_letra)) {
            $sql .= " WHERE Letra = '$filtro_letra'";
        }

        // Ejecutar la consulta
        $resultado = $conexion->query($sql);

        // Verificar si hay resultados
        if ($resultado->num_rows > 0) {
            // Mostrar los datos en una tabla HTML
            echo "<table border='1'>
                    <tr>
                        <th>Número de Expediente</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Curso</th>
                        <th>Letra</th>
                    </tr>";

            // Iterar sobre los resultados y mostrar cada fila
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>" . $fila['N_expdte'] . "</td>
                        <td>" . $fila['Nombre'] . "</td>
                        <td>" . $fila['Apellidos'] . "</td>
                        <td>" . $fila['Fecha_nac'] . "</td>
                        <td>" . $fila['Curso'] . "</td>
                        <td>" . $fila['Letra'] . "</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            // Si no hay resultados, mostrar un mensaje
            echo "No se encontraron registros.";
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    ?>
</body>
</html>

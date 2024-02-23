<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
<?php
if (isset($_POST["titulo"])) {
    echo "Datos enviados correctamente";
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $categoria = $_POST["categoria"];
    $llamadaBD = new mysqli("localhost", "root", "", "inmobiliaria");
    $fecha= date("Y-m-d");

    // Verificar si hay errores en la conexión
    if ($llamadaBD->connect_errno == null) {
        // Preparar la consulta
        $consulta = $llamadaBD->prepare("INSERT INTO noticias (titulo, texto, categoria, fecha) VALUES (?, ?, ?, ?)");
        // Vincular los parámetros y ejecutar la consulta
        $consulta->bind_param("ssss", $titulo, $texto, $categoria, $fecha);
        $consulta->execute();
    
        // Verificar si la consulta se ejecutó correctamente
        if ($consulta->affected_rows > 0) {
            echo "<h1>Registro insertado correctamente</h1>"."<br>";
        } else {
            echo "Error al insertar el registro: " . $llamadaBD->error;
        }

        // Cerrar la consulta
        $consulta->close();
        // No cerrar la conexión aquí, ya que podríamos necesitarla más adelante
    } else {
        echo "<h1>Conexión fallida</h1>";
    }
} else {
?>
<!-- Formulario HTML -->
<form action="./Ejercicio2.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <label for="titulo">Título:* </label>
        <input type="text" name="titulo" id="titulo" required>
        <br>
        <label for="texto">Texto:* </label>
        <textarea rows="5" cols="30" name="texto" id="texto" required></textarea>
        <br>
        <label for="categoria">Categoría: </label>
        <select name="categoria" id="categoria">
            <option value="ofertas">ofertas</option>
            <option value="promociones">promociones</option>
        </select>
        <br>
        <label for="archivo">Imagen: </label>
        <input type="file" name="archivo" id="archivo">
        <br><br>
        <button type="submit" name="insertar">Insertar noticia</button>
    </fieldset>
</form>
<?php
}
?>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Elemento de entrada</h2>
    <h4>Elemento de tipo INPUT</h4>
    <h5>TEXT</h5>
    <form action="#" method="post">
        <p>Introduce la cadena de busqueda: 
            <input type="text" name="cadena_a_buscar" placeholder="valor por defecto" />
        </p>
        <hr>
        <h5>RADIO</h5>
        <p>Sexo: 
            <input type="radio" name="sexo" value="mujer" id="mujer" />
            <label for="mujer">Mujer</label>
            <input type="radio" name="sexo" value="hombre" id="hombre" />
            <label for="hombre">Hombre</label>
        </p>
        <hr>
        <h5>CHECKBOX</h5>
        <p>
            <input type="checkbox" name="extras[]" value="garaje" id="garaje" />
            <label for="garaje">Garaje</label>
            <input type="checkbox" name="extras[]" value="piscina" id="piscina" />
            <label for="piscina">Piscina</label>
            <input type="checkbox" name="extras[]" value="jardin" id="jardin" />
            <label for="jardin">Jardin</label>
        </p>
        <hr>
        <h5>FILE</h5>
        <p> Fichero: 
            <input type="file" name="fichero" />
        </p>
        <hr>
        <h5>HIDDEN</h5>
        <input type="hidden" name="hidden_data" value="hidden_value" />
        <h5>PASSWORD</h5>
        <p> Contraseña: 
            <input type="password" name="contraseña"/>
        </p>
        <hr>
        <h4>Elemento SELECT</h4>
        <h5>SELECT SIMPLE</h5>
        <p>Color: 
            <select name="color">
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
                <option value="verde">Verde</option>
                <option value="amarillo">Amarillo</option>
            </select>
        </p>
        <hr>
        <h5>SELECT MULTIPLE</h5>
        <p>Idiomas: 
            <select name="idiomas[]" multiple>
                <option value="ingles">Inglés</option>
                <option value="frances">Francés</option>
                <option value="aleman">Alemán</option>
            </select>
        </p>
        <hr>
        <h4>Elemeno TEXTAREA</h4>
        <p>Comentario:
            <textarea name="comentario">Este libro me parece ...</textarea>
        </p>
        <hr>
        <input type="submit" value="enviar datos" />
        <input type="reset" value="borrar datos" />
    </form>
</body>
</html>
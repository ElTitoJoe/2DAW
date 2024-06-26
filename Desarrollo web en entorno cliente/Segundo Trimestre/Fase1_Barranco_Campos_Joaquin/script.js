var resultado = document.getElementById("info");
var selectRA = document.getElementById("selectRA");
var datos;
var loggedIn = false; // Variable para controlar si el usuario ha iniciado sesión
var nombreProfesor;

function mostrarLogin() {
    document.getElementById('login-form-container').style.display = 'block';
    resultado.innerHTML = ""; // Limpiamos el contenedor de información
}

// Agregar evento de inicio de sesión al formulario
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Verificar las credenciales (puedes reemplazar esto con una llamada a una API o una base de datos)
    if (username === 'admin' && password === 'admin') {
        loggedIn = true; // Marcamos al usuario como logueado
        nombreProfesor = document.getElementById('nombre-profesor').value; // Obtener el nombre del profesor
        document.getElementById('login-form-container').style.display = 'none'; // Ocultamos el formulario de inicio de sesión
        document.getElementById('nombre-profesor').value = ''; // Limpiamos el campo del nombre del profesor
    } else {
        document.getElementById('error-message').textContent = 'Usuario o contraseña incorrectos.';
    }
});

function mostrarCriterios() {
    // Si el usuario no ha iniciado sesión, mostramos el formulario de inicio de sesión y no continuamos
    if (!loggedIn) {
        mostrarLogin();
        return;
    }

    var index = selectRA.value;
    var criterios = datos["Desarrollo Web en Entorno Cliente"][index].criterios;
    var peso = datos["Desarrollo Web en Entorno Cliente"][index].peso;
    resultado.innerHTML = "";
    for (var i in criterios) {
        resultado.innerHTML += i + ": " + criterios[i] + "<br/>";
    }
    resultado.innerHTML += "Peso: " + peso;

    // Actualizar el nombre del profesor en el encabezado <h1>
    document.getElementById('nombre-profesor-heading').textContent = nombreProfesor;

    // Reiniciar la sesión después de 10 segundos
    setTimeout(function() {
        loggedIn = false;
        mostrarLogin();
    }, 10000);
}

// Agregar evento al botón para mostrar los criterios
document.getElementById('mostrar-criterios-btn').addEventListener('click', function() {
    mostrarCriterios();
});

function ajax_get_json() {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            datos = JSON.parse(xmlhttp.responseText);
            for (var i in datos) {
                for (var j in datos[i]) {
                    var option = document.createElement("option");
                    option.text = datos[i][j].id + ": " + datos[i][j].textoRA;
                    option.value = j;
                    selectRA.add(option);
                }
            }
        }
    };
    xmlhttp.open("GET", "datos.json", true);
    xmlhttp.send();
}

// Muestra el login y carga los datos JSON al cargar la página
window.onload = function() {
    mostrarLogin();
    ajax_get_json();
};

// Variables globales para elementos del DOM y almacenamiento de datos
var resultado = document.getElementById("info");
var selectRA = document.getElementById("raSelect");
var selectCriterio = document.getElementById("criterioSelect");
var divCriteriosSeleccionados = document.getElementById("criteriosSeleccionados");
var criteriosAgregados = {}; // Objeto para registrar los criterios agregados
var criteriosJSON = {}; // Objeto para almacenar los criterios del JSON

// Objeto que almacena usuarios y contraseñas
var usuarios = {
    "admin": "admin"
};

// Función para iniciar sesión
function iniciarSesion() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Verificar credenciales de inicio de sesión
    if (usuarios.hasOwnProperty(username) && usuarios[username] === password) {
        var profesorRows = document.getElementsByClassName("profesor");
        for (var i = 0; i < profesorRows.length; i++) {
            profesorRows[i].style.display = "table-row"; // Mostrar campos del profesor
        }
        setTimeout(mostrarNombreProfesor, 10000); // Mostrar el nombre del profesor después de 1 minuto
    } else {
        alert("Credenciales incorrectas. Inténtalo de nuevo.");
    }
}

// Función para mostrar el nombre del profesor
function mostrarNombreProfesor() {
    var nombreProfesor = document.getElementById("profesor").value;
    document.getElementById("info").textContent = nombreProfesor;
    var profesorRows = document.getElementsByClassName("profesor");
    for (var i = 0; i < profesorRows.length; i++) {
        profesorRows[i].style.display = "none"; // Ocultar campos
    }
}

// Función para cargar los resultados de aprendizaje (RA)
function cargarRA() {
    var xmlhttp;
    // Crear objeto XMLHttpRequest para realizar la solicitud HTTP
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // Definir función de devolución de llamada para manejar la respuesta
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            // Analizar la respuesta JSON
            var datos = JSON.parse(xmlhttp.responseText);

            // Iterar sobre los datos y agregar opciones al selectRA
            for (var i in datos) {
                for (var j = 0; j < datos[i].length; j++) {
                    var option = document.createElement("option");
                    option.value = datos[i][j].id;
                    option.text = datos[i][j].id + ' - ' + datos[i][j].textoRA;
                    selectRA.add(option);

                    // Almacenar los criterios del JSON para su uso posterior
                    criteriosJSON[datos[i][j].id] = datos[i][j].criterios;
                }
            }
        }
    };

    // Abrir y enviar la solicitud HTTP
    xmlhttp.open("GET", "datos.json", true);
    xmlhttp.send();
}

// Función para mostrar los datos del RA seleccionado
function mostrarDatosRA() {
    var selectedRA = selectRA.value;
    selectCriterio.innerHTML = ""; // Limpiar el desplegable de criterios previo
    criteriosAgregados = {}; // Reiniciar el registro de criterios agregados

    if (selectedRA !== "") {
        var criterios = criteriosJSON[selectedRA];

        // Iterar sobre los criterios y agregar opciones al selectCriterio
        for (var k in criterios) {
            var optionCriterio = document.createElement("option");
            var criterioKey = selectedRA + ' - ' + k;
            if (!criteriosAgregados[criterioKey]) {
                optionCriterio.value = k;
                optionCriterio.text = criterioKey + ' - ' + criterios[k]; // incluir el código del RA antes del criterio
                selectCriterio.add(optionCriterio);
                criteriosAgregados[criterioKey] = true;
            }
        }
    }
}

// Función para agregar un criterio seleccionado
function agregarCriterios() {
    var selectedCriterio = selectCriterio.value;
    var selectedCriterioText = selectCriterio.options[selectCriterio.selectedIndex].text;
    var criterioKey = selectedCriterioText.substring(0, selectedCriterioText.indexOf(' - ')); // Extraer el código del RA del texto del criterio
    var notaPorcentaje = document.getElementById("notaPorcentaje").value + "%";
    var texto = document.getElementById("texto").value.toUpperCase();
    var tipoActividad = document.getElementById("tipoActividad").value;

    // Verificar que se haya seleccionado un criterio y no esté duplicado
    if (selectedCriterio !== "" && !criteriosAgregados[selectedCriterioText]) {
        var div = document.createElement("div");
        var concatenacion = criterioKey + ' ' + selectedCriterioText.split(' - ')[1] + ' - ' + tipoActividad.charAt(0).toUpperCase() + tipoActividad.slice(1) + ' - ' + texto + ' - ' + notaPorcentaje;
        div.textContent = concatenacion; // Concatenar los valores y mostrarlos en el div de criterios
        divCriteriosSeleccionados.appendChild(div);
        criteriosAgregados[selectedCriterioText] = true; // Registrar el criterio agregado
    }
}

// Función para agregar un objetivo seleccionado
function agregarObjetivos() {
    var objetivoSelect = document.getElementsByName("objetivo")[0]; // Seleccionar el elemento select de objetivos
    var selectedObjetivo = objetivoSelect.options[objetivoSelect.selectedIndex].text; // Obtener el texto del objetivo seleccionado

    if (selectedObjetivo !== "") {
        var divObjetivosSeleccionados = document.getElementById("objetivosSeleccionados");
        var objetivosAgregados = divObjetivosSeleccionados.getElementsByTagName("div");

        // Verificar si el objetivo ya ha sido agregado
        var objetivoExistente = Array.from(objetivosAgregados).some(function (element) {
            return element.textContent === selectedObjetivo;
        });

        // Si el objetivo no ha sido agregado, añadirlo
        if (!objetivoExistente) {
            var div = document.createElement("div");
            div.textContent = selectedObjetivo; // Mostrar el objetivo seleccionado en un div
            divObjetivosSeleccionados.appendChild(div); // Agregar el div al contenedor de objetivos seleccionados
        } else {
            alert("¡Este objetivo ya ha sido seleccionado!");
        }
    }
}

// Cargar RA al cargar la página
cargarRA();

document.getElementById('download').addEventListener('click', imprimirPdf);

function imprimirPdf() {
    // Crear un nuevo documento PDF
    var doc = new jsPDF();

    // Obtener el contenido de los divs listaObjetivos y listaCriterios como texto
    var contenidoObjetivos = document.getElementById("listaObjetivos").innerText;
    var contenidoCriterios = document.getElementById("listaCriterios").innerText;

    // Establecer el tamaño de fuente para el contenido
    var fontSize = 12; // Tamaño de fuente inicial
    doc.setFontSize(fontSize);

    // Función para agregar texto en el PDF, manejando divisiones si es necesario
    function agregarTexto(texto, x, y) {
        var lines = doc.splitTextToSize(texto, 180); // Dividir el texto en líneas de máximo 180 unidades de ancho
        for (var i = 0; i < lines.length; i++) {
            doc.text(x, y + (i * fontSize / 2), lines[i]);
        }
    }

    // Agregar el nombre del profesor y el header en la primera página
    doc.text(20, 20, "PROYECTO DWC 2023-2024");
    doc.text(20, 30, "Profesor: " + document.getElementById("profesor").value);
    
    // Agregar el contenido al documento PDF
    doc.addPage(); // Agregar una nueva página para los criterios
    doc.text(20, 20, "Lista de Objetivos:");
    agregarTexto(contenidoObjetivos, 20, 30);

    doc.addPage(); // Agregar una nueva página para los criterios
    doc.text(20, 20, "Lista de Criterios:");
    agregarTexto(contenidoCriterios, 20, 30);

    // Descargar el PDF con el nombre "Contenido.pdf"
    doc.save("Contenido.pdf");
}




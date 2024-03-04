var selectRA = document.getElementById("raSelect");
var selectCriterio = document.getElementById("criterioSelect");
var divCriteriosSeleccionados = document.getElementById("criteriosSeleccionados");
var criteriosAgregados = {}; // Objeto para registrar los criterios agregados
var criteriosJSON = {}; // Objeto para almacenar los criterios del JSON

// Función para cargar los datos del JSON y llenar el select de RA
function cargarRA() {
    fetch('datos.json')
        .then(response => response.json())
        .then(data => {
            for (const ra of data['Desarrollo Web en Entorno Cliente']) {
                var option = document.createElement("option");
                option.value = ra.id;
                option.text = ra.id + ' - ' + ra.textoRA;
                selectRA.add(option);

                // Almacena los criterios del JSON para su uso posterior
                criteriosJSON[ra.id] = ra.criterios;
            }
        })
        .catch(error => console.error('Error al cargar el JSON:', error));
}

// Función para mostrar los criterios de una RA seleccionada
function mostrarDatosRA() {
    var selectedRA = selectRA.value;
    selectCriterio.innerHTML = ""; // Limpiar el desplegable de criterios previo
    criteriosAgregados = {}; // Reiniciar el registro de criterios agregados

    if (selectedRA !== "") {
        var criterios = criteriosJSON[selectedRA];

        for (const [key, value] of Object.entries(criterios)) {
            var optionCriterio = document.createElement("option");
            var criterioKey = selectedRA + ' - ' + key;
            if (!criteriosAgregados[criterioKey]) {
                optionCriterio.value = key;
                optionCriterio.text = criterioKey + ' - ' + value;
                selectCriterio.add(optionCriterio);
                criteriosAgregados[criterioKey] = true;
            }
        }
    }
}

// Función para agregar un criterio seleccionado
function agregarCriterio() {
    var selectedCriterio = selectCriterio.value;
    var selectedCriterioText = selectCriterio.options[selectCriterio.selectedIndex].text;
    var criterioKey = selectedCriterioText.substring(0, selectedCriterioText.indexOf(' - ')); // Extraer el código del RA del texto del criterio
    var notaPorcentaje = document.getElementById("notaPorcentaje").value + "%";
    var texto = document.getElementById("texto").value.toUpperCase();
    var tipoActividad = document.getElementById("tipoActividad").value;
    var selectedRA = selectRA.value;

    if (selectedCriterio !== "" && !criteriosAgregados[selectedCriterioText]) {
        var div = document.createElement("div");
        var concatenacion = criterioKey + ' ' + selectedCriterioText.split(' - ')[1] + ' - ' + tipoActividad.charAt(0).toUpperCase() + tipoActividad.slice(1) + ' - ' + texto + ' - ' + notaPorcentaje;
        div.textContent = concatenacion;
        divCriteriosSeleccionados.appendChild(div);
        criteriosAgregados[selectedCriterioText] = true; // Registrar el criterio agregado
    }
}

// Llamamos a la función para cargar RA al cargar la página
cargarRA();

// Empezamos seleccionando la zona donde se insertará la tabla.
let zonaDibujo = document.querySelector('#zonadibujo');

// Creamos un elemento de título para mostrar las instrucciones.
let instrucciones = document.createElement('h2');
instrucciones.textContent = '¡Es hora de pintar!';

// Creamos una tabla para dibujar.
let tabla = document.createElement('table');
tabla.style.width = '500px';
tabla.style.height = '500px';

// Creamos las filas y celdas de la tabla.
for (var i = 0; i < 30; i++) {
    var fila = document.createElement('tr');

    // Agregamos celdas a la fila.
    for (var j = 0; j < 30; j++) {
        let celda = document.createElement('td');
        celda.style.width = '10px';
        celda.style.height = '10px';
        celda.style.border = '1px solid black';
        fila.appendChild(celda);
    }


    tabla.appendChild(fila);
}

// Agregamos las instrucciones y la tabla a la zona de dibujo.
zonaDibujo.appendChild(instrucciones);
zonaDibujo.appendChild(tabla);

// Seleccionamos todas las celdas de color de la paleta.
let colores = document.querySelectorAll('#paleta tr:first-child td');

// Inicializamos el color seleccionado con el primer color de la paleta.
let colorSeleccionado = document.querySelector('#paleta td');
colorSeleccionado.classList.add('seleccionado');

// Añadimos un evento 'click' a cada color de la paleta.
colores.forEach(function (color) {
    color.addEventListener('click', function () {
        // Quitamos la selección del color anterior.
        if (colorSeleccionado) {
            colorSeleccionado.classList.remove('seleccionado');
        }

        // Seleccionamos el nuevo color y lo marcamos como seleccionado.
        color.classList.add('seleccionado');
        colorSeleccionado = color;
    });
});

// Inicializamos el estado del pincel como desactivado.
let pincel = false;

// Seleccionamos todas las celdas de la tabla de dibujo.
let celdas = document.querySelectorAll('#zonadibujo td');

// Seleccionamos el elemento para mostrar el estado del pincel.
let estadoPincel = document.querySelector('#pincel');

// Añadimos el evento 'mousedown' a cada celda para activar el pincel.
celdas.forEach(function (celda) {
    celda.addEventListener('mousedown', function(event){
        // Activamos el pincel.
        pincel = true;

        // Cambiamos el texto para indicar que el pincel está activado.
        estadoPincel.textContent = "Estas pintando";
    });
});

// Añadimos el evento 'mouseup' al body para desactivar el pincel.
document.body.addEventListener('mouseup', function(event){
    // Desactivamos el pincel.
    pincel = false;

    // Cambiamos el texto para indicar que el pincel está desactivado.
    estadoPincel.textContent = "No estas pintando";
});

// Añadimos el evento 'mousemove' a cada celda para pintar.
celdas.forEach(function (celda) {
    celda.addEventListener('mousemove', function(event){
        // Si el pincel está activo y hay un color seleccionado, pintamos.
        if(pincel && colorSeleccionado){
            // Si el color seleccionado es blanco, borramos la celda.
            if(window.getComputedStyle(colorSeleccionado).backgroundColor === 'rgb(255, 255, 255)'){
                celda.style.backgroundColor = '';
            } else {
                // Si no es blanco, pintamos la celda con el color seleccionado.
                celda.style.backgroundColor = window.getComputedStyle(colorSeleccionado).backgroundColor;
            }
        }
    });
});

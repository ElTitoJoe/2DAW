//Empezamos el ejercicio.

//Primero seleccionamos la zona donde se inserta la tabla.

let zonadibujo = document.querySelector('#zonadibujo');

//Ahora creamos la frasecita.

let instrucciones = document.createElement('p');
instrucciones.textContent = 'Haga Click en cualquier celda para activar/desactivar el Pincel.'


//Creamos una tabla

let tabla = document.createElement('table');

tabla.style.width = '300px'; //Como son 30 celdas 10px cada una, pues 300px en total
tabla.style.height = '300px';//Como son 30 celdas 10px cada una, pues 300px en total

//Creamos las filas y las celdas

for (var i = 0; i < 30; i++) {
    //Creamos primero las filas
    var fila = document.createElement('tr');


    //Y dentro las celdas

    for (var j = 0; j < 30; j++) {
        let celda = document.createElement('td');
        celda.style.width = '10px';
        celda.style.height = '10px';
        celda.style.border = '1px solid black';

        //Añadimos a la fila la celda

        fila.appendChild(celda);
    }

    //Añadimos la fila a la tabla
    tabla.appendChild(fila);
}
//Añadimos la frasecilla 
zonadibujo.appendChild(instrucciones);


//Y añadimos la tabla a nuestra zona de dibujo
zonadibujo.appendChild(tabla);

//Ponemos un mensaje de prueba comprobando que funciona
console.log("El tablero ha sido creado"); // Añade un mensaje de consola


//Ahora seleccionamos todas las celdas de color de la paleta.
//Elegimos la primera fila para solo poder seleccionar entre los colores
let colores = document.querySelectorAll('#paleta tr:first-child td');

//Creamos una variable para guardar el color que seleccionemos
//Y seleccionamos por defecto el primero color
let colorSeleccionado = document.querySelector('#paleta td');
colorSeleccionado.classList.add('seleccionado');

//Añadimos un evento de click a cada celda

colores.forEach(function (color) {

    color.addEventListener('click', function () {
        //Si ya hemos seleccionado un color quitamos la clase

        if (colorSeleccionado) {
            colorSeleccionado.classList.remove('seleccionado');
        }

        //Añadimos la clase al color que el usuario ha hecho click
        color.classList.add('seleccionado')

        //Guardamos el color seleccionado

        colorSeleccionado = color;

    });
});


// Ahora vamos a crear el pincel.
let pincel = false;

// Seleccionamos todas las celdas de la tabla
let celdas = document.querySelectorAll('#zonadibujo td');

// Seleccionamos el estado del pincel para editar el mensaje
let estadoPincel= document.querySelector('#pincel');

// Añadimos el evento 'mousedown' a cada celda para activar el pincel
celdas.forEach(function (celda) {
    celda.addEventListener('mousedown', function(event){
        // Activamos el pincel
        pincel = true;
    
        // Cambiamos el texto del estado del pincel
        estadoPincel.textContent="PINCEL ACTIVADO";
    });
});

// Añadimos el evento 'mouseup' al body para desactivar el pincel
document.body.addEventListener('mouseup', function(event){
    // Desactivamos el pincel
    pincel = false;

    // Cambiamos el texto del estado del pincel
    estadoPincel.textContent="PINCEL DESACTIVADO";
});

// Añadimos el evento 'mousemove' a cada celda para pintar
celdas.forEach(function (celda) {
    celda.addEventListener('mousemove', function(event){
        // Si el pincel está activo, cambiamos el color de la celda
        if(pincel && colorSeleccionado){
            // Si el color seleccionado es blanco, borramos la celda
            if(window.getComputedStyle(colorSeleccionado).backgroundColor === 'rgb(255, 255, 255)'){
                celda.style.backgroundColor = '';
            } else {
                celda.style.backgroundColor = window.getComputedStyle(colorSeleccionado).backgroundColor;
            }
        }
    });
});

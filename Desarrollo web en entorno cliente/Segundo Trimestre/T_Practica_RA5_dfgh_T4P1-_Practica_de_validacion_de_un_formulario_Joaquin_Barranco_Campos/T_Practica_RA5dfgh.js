function validarCampos() {
    // Obtenemos los elementos del formulario.
    var nombre = document.getElementById('nombre');
    var apellidos = document.getElementById('apellidos');
    var edad = document.getElementById('edad');
    var nif = document.getElementById('nif');
    var email = document.getElementById('email');
    var provincia = document.getElementById('provincia');
    var fecha = document.getElementById('fecha');
    var telefono = document.getElementById('telefono');
    var hora = document.getElementById('hora');
    var errores = document.getElementById('errores');

    // Muestra mensaje si el campo nombre esta vacio
    if (nombre.value.trim() === '') {
        errores.innerHTML = 'Ingrese su nombre para continuar';
        nombre.focus();
        return false;
    }

    // Muestra mensaje si el campo apellidos esta vacio
    if (apellidos.value.trim() === '') {
        errores.innerHTML = 'Ingrese sus apellidos para continuar';
        apellidos.focus();
        return false;
    }

    // Mira si el campo edad está correcto
    if (!/^\d+$/.test(edad.value) || edad.value < 0 || edad.value > 105) {
        errores.innerHTML = 'El campo Edad debe contener un número entre 0 y 105.';
        edad.focus();
        return false;
    }

    // Mira si el campo nif está correcto
    if (!/^\d{8}-[A-Za-z]$/.test(nif.value)) {
        errores.innerHTML = 'El campo NIF debe contener exactamente 8 números, un guión y una letra.';
        nif.focus();
        return false;
    }

    // Valida el correo
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email.value)) {
        errores.innerHTML = 'El campo E-mail debe seguir un formato correcto.';
        email.focus();
        return false;
    }

    // Mira las provincias
    if (provincia.selectedIndex === 0) {
        errores.innerHTML = 'Debe seleccionar alguna de las 8 provincias de Andalucía.';
        provincia.focus();
        return false;
    }

    // Valida la fecha
    if (!/^(0[1-9]|[12][0-9]|3[01])([-\/])(0[1-9]|1[012])\2(\d{4})$/.test(fecha.value)) {
        errores.innerHTML = 'El campo Fecha debe seguir uno de los siguientes formatos: dd/mm/aaaa o dd-mm-aaaa.';
        fecha.focus();
        return false;
    }

    // Valida el telefono
    if (!/^\d{9}$/.test(telefono.value)) {
        errores.innerHTML = 'El campo Teléfono debe contener exactamente 9 dígitos.';
        telefono.focus();
        return false;
    }

    // Valida la hora
    if (!/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/.test(hora.value)) {
        errores.innerHTML = 'El campo Hora debe seguir el formato hh:mm.';
        hora.focus();
        return false;
    }

    // Si hay algun error vacia el campo
    errores.innerHTML = '';

    // Pedimos confirmación antes de enviar el formulario
    var confirmacion = confirm('¿Estás seguro de que quieres enviar el formulario?');
    if (!confirmacion) {
        return false;
    }

    return true;
}

window.onload = function () {
    // Obtenemos los elementos del formulario con los id 'nombre' y 'apellidos'
    var nombre = document.getElementById('nombre');
    var apellidos = document.getElementById('apellidos');

    // Cuando el campo 'nombre' pierda el foco, convertimos su valor a mayúsculas
    nombre.onblur = function () {
        nombre.value = nombre.value.toUpperCase();
    }

    // Cuando el campo 'apellidos' pierda el foco, convertimos su valor a mayúsculas
    apellidos.onblur = function () {
        apellidos.value = apellidos.value.toUpperCase();
    }

    // Obtenemos el elemento del formulario
    var formulario = document.getElementById('formulario');

    // Cuando se envíe el formulario, si la función 'validarCampos' devuelve 'false',no se envía.
    formulario.onsubmit = function (event) {
        if (!validarCampos()) {
            event.preventDefault();
        }
    }
}

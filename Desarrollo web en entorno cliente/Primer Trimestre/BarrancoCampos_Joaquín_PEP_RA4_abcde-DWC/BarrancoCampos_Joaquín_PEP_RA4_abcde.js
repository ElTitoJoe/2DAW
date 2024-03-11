// Arreglo para almacenar las referencias de las ventanas abiertas
const windows = [];
let storedRandomValues = [];

function openWindow(name, color, specs) {
  const newWindow = window.open('', name, specs);
  newWindow.document.body.style.backgroundColor = color;
  windows.push(newWindow); // Agrega la referencia de la ventana abierta al arreglo windows
}

function closeWindow1(index) {
  if (windows[index]) {
    windows[index].close();
    windows.splice(index, 1); 
  }
}

function closeWindow2(index) {
    if (windows[index]) {
      windows[index].close();
      windows.splice(index, 2); 
    }
}

function closeWindow3(index) {
if (windows[index]) {
      windows[index].close();
      windows.splice(index, 3); 
    }
}
function closeWindow4(index) {
    if (windows[index]) {
      windows[index].close();
      windows.splice(index, 4); 
    }
}

document.getElementById('btn1').onclick = function() {
  openWindow('Ventana 1', 'lightgreen', 'top=0,left=0,width=300,height=300');
};

document.getElementById('btn2').onclick = function() {
  openWindow('Ventana 2', 'lightblue', 'top=0,right=,width=300,height=300');
};

document.getElementById('btn3').onclick = function() {
  openWindow('Ventana 3', 'pink', 'bottom=600,right=0,width=300,height=300');
};

document.getElementById('btn4').onclick = function() {
  openWindow('Ventana 4', 'orange', 'bottom=900,left=0,width=300,height=300');
};

document.getElementById('btn1c').onclick = function() {
  closeWindow1(0);
};

document.getElementById('btn2c').onclick = function() {
  closeWindow2(0);
};

document.getElementById('btn3c').onclick = function() {
  closeWindow3(0);
};

document.getElementById('btn4c').onclick = function() {
  closeWindow4(0);
};

// Event listener para obtener los valores seleccionados de los controles select
document.getElementById('listLength').addEventListener('change', function() {
  const listLength = parseInt(this.value);
  console.log('Longitud de la lista de números seleccionada:', listLength);
  // Puedes realizar otras acciones con el valor seleccionado aquí
});

document.getElementById('randomCount').addEventListener('change', function() {
  const randomCount = parseInt(this.value);
  console.log('Número de valores aleatorios seleccionados:', randomCount);
  // Puedes realizar otras acciones con el valor seleccionado aquí
});






document.getElementById('btn1').onclick = function () {
  openWindow('Ventana 1', 'lightgreen', 'top=0,left=0,width=300,height=300');
  createFormInWindow();
};

function createFormInWindow() {
  const ventanaActual = windows[windows.length - 1];

  const formHTML = `
    <h2>Autenticación y Cambio de Contraseña</h2>
    <form id="formUsuario">
      <label for="usuario">Usuario:</label>
      <input type="text" id="usuario" name="usuario" required><br><br>

      <label for="contrasena">Contraseña:</label>
      <input type="password" id="contrasena" name="contrasena" required><br><br>

      <label for="nuevaContrasena">Nueva Contraseña:</label>
      <input type="password" id="nuevaContrasena" name="nuevaContrasena" required><br><br>

      <button type="submit">Enviar</button>
    </form>
    <p id="mensaje"></p>
  `;

  ventanaActual.document.body.innerHTML = formHTML;

  const formUsuario = ventanaActual.document.getElementById('formUsuario');
  const mensaje = ventanaActual.document.getElementById('mensaje');

  formUsuario.addEventListener('submit', function (event) {
    event.preventDefault();

    const nombre = event.target.elements['usuario'].value;
    const contrasena = event.target.elements['contrasena'].value;
    const nuevaContrasena = event.target.elements['nuevaContrasena'].value;

    const resultadoAutenticacion = usuario.autenticar(nombre, contrasena);

    if (resultadoAutenticacion === 'Datos correctos, ¿Deseas cambiar la contraseña?') {
        mensaje.textContent = 'Contraseña modificada.';
        const mensajeCambio = usuario.cambiarContrasena(nuevaContrasena);
        mensaje.textContent = mensajeCambio;
    } 
    else {
      const intentarDeNuevo = confirm(resultadoAutenticacion);
      if (!intentarDeNuevo) {
        mensaje.textContent = 'Inténtalo más tarde.';
      }
    }
  });
}

// Objeto usuario con propiedades y método para autenticar y cambiar contraseña
const usuario = {
  nombreUsuario: 'alumno',
  contrasena: 'bueno',
  autenticar: function (nombre, contrasena) {
    if (nombre === this.nombreUsuario && contrasena === this.contrasena) {
      return 'Datos correctos, ¿Deseas cambiar la contraseña?';
    } else {
      return 'Datos incorrectos ¿Quieres intentarlo de nuevo?';
    }
  },
  cambiarContrasena: function (nuevaContrasena) {
    this.contrasena = nuevaContrasena;
    return 'Contraseña cambiada con éxito.';
  }
};

// Event listener para obtener los valores seleccionados de los controles select
document.getElementById('listLength').addEventListener('change', function () {
  const listLength = parseInt(this.value);
  console.log('Longitud de la lista de números seleccionada:', listLength);
  // Puedes realizar otras acciones con el valor seleccionado aquí
});

document.getElementById('randomCount').addEventListener('change', function () {
  const randomCount = parseInt(this.value);
  console.log('Número de valores aleatorios seleccionados:', randomCount);
  // Puedes realizar otras acciones con el valor seleccionado aquí
});






document.getElementById('btn2').onclick = function () {
    openWindow('Ventana 2', 'lightblue', 'top=0,left=350,width=400,height=300');
    showListAndRandomValues();
  };
  
  function showListAndRandomValues() {
    const ventanaActual = windows[windows.length - 1];
  
    // Obtener la longitud de la lista de números seleccionados (asumiendo que tienes un elemento select con el ID 'listLength')
    const listLength = parseInt(document.getElementById('listLength').value);
  
    // Obtener el número de valores aleatorios seleccionados (asumiendo que tienes un elemento select con el ID 'randomCount')
    const randomCount = parseInt(document.getElementById('randomCount').value);
  
    // Generar una lista de números aleatorios
    const randomValues = generateRandomValues(randomCount);
  
    // Crear una lista de números consecutivos basados en la lista de números aleatorios
    const minValue = 1
    const maxValue = listLength;
    const consecutiveList = generateConsecutiveList(minValue, maxValue);
  
    // Mostrar los valores aleatorios y la lista consecutiva en la ventana
    ventanaActual.document.body.innerHTML = `
      <h2>Valores Aleatorios y Lista Consecutiva</h2>
      <p>Valores aleatorios: ${randomValues.join('-')}</p>
      <p>Lista a representar: ${consecutiveList.join('-')}</p>
    `;
  }
  
  // Función para generar números aleatorios
  function generateRandomValues(count) {
    const randomValues = [];
    for (let i = 0; i < count; i++) {
      randomValues.push(Math.floor(Math.random() * 100)); // Cambiar el 100 por el rango deseado
    }
    return randomValues;
    storedRandomValues = randomValues;
  }
  
  // Función para generar una lista consecutiva de números entre el mínimo y máximo
  function generateConsecutiveList(min, max) {
    const consecutiveList = [];
    for (let i = min; i <= max; i++) {
      consecutiveList.push(i);
    }
    return consecutiveList;
  }



  
  document.getElementById('btn3').onclick = function () {
    openWindow('Ventana 3', 'lightyellow', 'top=300,left=1000,width=400,height=300');
    showOddValues();
  };
  
  function showOddValues() {
    const ventanaActual = windows[windows.length - 1];
  
    // Obtener el número de valores aleatorios seleccionados (asumiendo que tienes un elemento select con el ID 'randomCount')
    const randomCount = parseInt(document.getElementById('randomCount').value);
  
    // Generar una lista de números aleatorios
    const randomValues = generateRandomValues(randomCount);
  
    // Filtrar los valores impares y ordenarlos de menor a mayor
    const oddValues = randomValues.filter(value => value % 2 !== 0).sort((a, b) => a - b);
  
    // Mostrar los valores impares en la ventana
    ventanaActual.document.body.innerHTML = `
      <h2>Valores Impares Ordenados</h2>
      <p>Valores impares: ${oddValues.join('-')}</p>
    `;
  }







  
  
  document.getElementById('btn4').onclick = function () {
    openWindow('Ventana 4', 'lightpink', 'top=300,left=350,width=400,height=300');
    showUserInfo();
  };
  
  function showUserInfo() {
    const ventanaActual = windows[windows.length - 1];
  
    // Obtener la contraseña vigente y la fecha/hora de la última vez que se introdujo
    const password = usuario.contrasena;
    const lastLogin = new Date(); // Aquí debes obtener la fecha y hora de la última vez que se introdujo
  
    // Mostrar la contraseña vigente y la fecha/hora en la ventana
    ventanaActual.document.body.innerHTML = `
      <h2>Información del Usuario</h2>
      <p>Contraseña vigente: ${password}</p>
      <p>Última vez ingresado: ${lastLogin}</p>
    `;
  }
  
  


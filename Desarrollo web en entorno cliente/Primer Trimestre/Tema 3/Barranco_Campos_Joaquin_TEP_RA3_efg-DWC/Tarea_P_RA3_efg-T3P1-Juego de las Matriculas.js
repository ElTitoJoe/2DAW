//Calcular
function calcularFigura() {

  const numero = document.getElementById('numeroInput').value;

  //Compruebo si el número tiene 4 cifras
  if (numero<1000) {
      alert("Ingrese un numero");
      return;
  }

  //Almacena el numero en un array
  const digitos = numero.split('').map(Number);

  //Cuento las ocurrencias del usuario
  const ocurrencias = contarOcurrencias(digitos);

  //Compruebo las conbinaciones
  const doblePareja = ocurrencias.filter(count => count === 2).length / 2;
  const trios = ocurrencias.includes(3) ? 1 : 0;
  const escalera3 = verificarEscalera(digitos, 3);
  const escalera4 = verificarEscalera(digitos, 4);
  const poker = ocurrencias.includes(4) ? 1 : 0;

  //Indico la figura que es
  let figuraActual = '';
  if (doblePareja > 0) figuraActual = 'Doble Pareja';
  else if (trios > 0) figuraActual = 'Trío';
  else if (escalera4) figuraActual = 'Escalera completa';
  else if (escalera3) figuraActual = 'Escalera simple';
  else if (poker > 0) figuraActual = 'Poker';
  else figuraActual = 'Nada';

  //Muestro la figura actual
  const figuraActualElement = document.getElementById('figuraActual');
  figuraActualElement.textContent = `Figura Actual: ${figuraActual}`;

  //Guardp la cantidad de veces que se ha introducido correctamente una matrícula en una cookie
  const matriculasCorrectas = obtenerMatriculasCorrectas();
  matriculasCorrectas.push(numero);
  document.cookie = `matriculasCorrectas=${JSON.stringify(matriculasCorrectas)}; expires=Fri, 31 Dec 9999 23:59:59 GMT`;
}

//Mira si es pareja doble
function tieneDoblePareja(matricula) {
  const ocurrencias = contarOcurrencias(matricula.split('').map(Number));
  const doblePareja = ocurrencias.filter(count => count === 2).length / 2;
  return doblePareja > 0;
}

//Mira si es trio
function tieneTrio(matricula) {
  const ocurrencias = contarOcurrencias(matricula.split('').map(Number));
  return ocurrencias.includes(3);
}

//Mira si es
function tieneEscalera(matricula, longitud) {
  const digitos = matricula.split('').map(Number);
  digitos.sort();
  for (let i = 0; i <= digitos.length - longitud; i++) {
      if (digitos[i] + longitud - 1 === digitos[i + longitud - 1]) {
          return true;
      }
  }
  return false;
}

function tienepoker(matricula) {
  const ocurrencias = contarOcurrencias(matricula.split('').map(Number));
  return ocurrencias.includes(4);
}

//Función para comprobar si hay una escalera de longitud X en el array
function verificarEscalera(array, longitud) {
  //Copiar y ordenar el array para verificar de la escalera
  const digitosOrdenados = [...array].sort((a, b) => a - b);

  //Mira si se trata que es una escalera
  for (let i = 0; i <= digitosOrdenados.length - longitud; i++) {
      if (digitosOrdenados[i] + longitud - 1 === digitosOrdenados[i + longitud - 1]) {
          return true;
      }
  }
  return false;
}


//Crea la ventana con toda la información
function mostrarEstadisticas() {
  //Guarada las matriculas
  const matriculasCorrectas = obtenerMatriculasCorrectas();
  const totalCombinaciones = 1000;
  //Contador de las figuras
  let contadorDoblePareja = 0;
  let contadorTrio = 0;
  let contadorEscalera3 = 0;
  let contadorEscalera4 = 0;
  let contadorpoker = 0;

  //Cuenta las figuras posibles
  for (let i = 0; i < totalCombinaciones; i++) {
      const matricula = i.toString().padStart(4, '0');

      if (tieneDoblePareja(matricula)) {
          contadorDoblePareja++;
      } else if (tieneTrio(matricula)) {
          contadorTrio++;
      } else if (tieneEscalera(matricula, 3)) {
          contadorEscalera3++;
      } else if (tieneEscalera(matricula, 4)) {
          contadorEscalera4++;
      } else if (tienepoker(matricula)) {
          contadorpoker++;
      }
  }

  //Calcula los porcentajes
  const porcentajeDoblePareja = ((contadorDoblePareja / totalCombinaciones) * 100).toFixed(2);
  const porcentajeTrio = ((contadorTrio / totalCombinaciones) * 100).toFixed(2);
  const porcentajeEscalera3 = ((contadorEscalera3 / totalCombinaciones) * 100).toFixed(2);
  const porcentajeEscalera4 = ((contadorEscalera4 / totalCombinaciones) * 100).toFixed(2);
  const porcentajepoker = ((contadorpoker / totalCombinaciones) * 100).toFixed(2);

  //Contenido de la Cookie
  let estadisticasContenido = `
      <p>Total de Combinaciones Posibles: ${totalCombinaciones}</p>
      <p>Cantidad de Matrículas del Usuario: ${matriculasCorrectas.length}</p>
      <p>Matrículas del Usuario: ${matriculasCorrectas.join(', ')}</p>
      <p>Doble Pareja: ${contadorDoblePareja} (${porcentajeDoblePareja}%)</p>
      <p>Trio: ${contadorTrio} (${porcentajeTrio}%)</p>
      <p>Escalera simple: ${contadorEscalera3} (${porcentajeEscalera3}%)</p>
      <p>Escalera completa: ${contadorEscalera4} (${porcentajeEscalera4}%)</p>
      <p>Poker: ${contadorpoker} (${porcentajepoker}%)</p>
  `;

  //Abro una nueva ventana con las estadísticas
  const ventanaEstadisticas = window.open('', '_blank', 'width=600,height=400');
  ventanaEstadisticas.document.write(estadisticasContenido);

  //Cierro la ventana después de 10 segundos
  setTimeout(() => {
      ventanaEstadisticas.close();
  }, 10000);
}

//Guarda las matriculas en la Cookie
function obtenerMatriculasCorrectas() {
  const cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)matriculasCorrectas\s*=\s*([^;]*).*$)|^.*$/, "$1");
  return cookieValue ? JSON.parse(cookieValue) : [];
}

//Cuenta las ocurrencias del usuario
function contarOcurrencias(array) {
  const counts = {};
  array.forEach(num => {
      counts[num] = (counts[num] || 0) + 1;
  });
  return Object.values(counts);
}
// Función para verificar si es una escalera (simple o completa)
function esEscalera(digitos) {
    digitos.sort((a, b) => a - b);
    for (let i = 0; i < digitos.length - 1; i++) {
      if (digitos[i] + 1 !== digitos[i + 1]) {
        return false;
      }
    }
    return true;
  }
  
  // Función para calcular las figuras
  function calcularFigura(numero) {
    const digitos = numero.toString().split('').map(Number);
  
    const contadorDigitos = {};
    digitos.forEach(digito => {
      if (!contadorDigitos[digito]) {
        contadorDigitos[digito] = 1;
      } else {
        contadorDigitos[digito]++;
      }
    });
  
    const valoresFrecuencia = Object.values(contadorDigitos);
    const cantidadPares = valoresFrecuencia.filter(valor => valor === 2).length;
    const cantidadTrios = valoresFrecuencia.filter(valor => valor === 3).length;
    const cantidadPoker = valoresFrecuencia.filter(valor => valor === 4).length;
  
    const esSimple = esEscalera([new Set(digitos)]);
    const esCompleta = esEscalera(digitos);
  
    if (cantidadPoker === 1) {
      return 'Poker';
    } else if (cantidadTrios === 1) {
      return 'Trio';
    } else if (cantidadPares === 2) {
      return 'Doble Pareja';
    } else if (esCompleta) {
      return 'Escalera Completa';
    } else if (esSimple) {
      return 'Escalera Simple';
    } else {
      return 'Sin figura reconocida';
    }
  }
  
  // Función para mostrar las estadísticas durante 10 segundos
  function mostrarEstadisticas(numero) {
    const figuras = [
      'Doble Pareja',
      'Trio',
      'Escalera Simple',
      'Escalera Completa',
      'Poker'
    ];
  
    const estadisticas = {};
    figuras.forEach(figura => {
      estadisticas[figura] = 0;
    });
  
    const cantidadIntentos = 10; // Simulando 10 intentos
  
    for (let i = 0; i < cantidadIntentos; i++) {
      const figuraGenerada = calcularFigura(numero);
      estadisticas[figuraGenerada]++;
    }
  
    // Mostrar estadísticas en una nueva ventana
    const ventanaEstadisticas = window.open('', 'Estadisticas', 'width=400,height=300');
    ventanaEstadisticas.document.write('<h2>Estadísticas</h2>');
    Object.keys(estadisticas).forEach(figura => {
      const porcentaje = (estadisticas[figura] / cantidadIntentos) * 100;
      ventanaEstadisticas.document.write(`<p>${figura}: ${porcentaje.toFixed(2)}%</p>`);
    });
  
    // Cerrar la ventana después de 10 segundos
    setTimeout(() => {
      ventanaEstadisticas.close();
    }, 10000);
  }
  
  // Función para manejar el evento de clic en el botón "Calcular Figura"
  function calcularFiguraHandler() {
    const numeroInput = document.getElementById('numeroInput');
    const numero = parseInt(numeroInput.value);
  
    if (isNaN(numero) || numero.toString().length !== 4) {
      console.error('Por favor, introduce un número válido de 4 cifras.');
      return;
    }
  
    // Mostrar el número y la figura calculada en la consola del navegador
    console.log(`El número ${numero} representa: ${calcularFigura(numero)}`);
  
    setTimeout(() => {
      mostrarEstadisticas(numero);
    });
  }
  
  // Asociar la función al evento click del botón "Calcular Figura"
  const calcularBtn = document.getElementById('calcularBtn');
  calcularBtn.addEventListener('click', calcularFiguraHandler);
  
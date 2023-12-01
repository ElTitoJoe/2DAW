// Arrays con las frases
const array1 = [
    "Queridos compañeros",
    "Por otra parte,y dados los condicionamientos actuales",
    "Asimismo,",
    "Sin embargo no hemos de olvidar que",
    "De igual manera,",
    "La práctica de la vida cotidiana prueba que,",
    "No es indispensable argumentar el peso y la significación de estos problemas ya que,",
    "Las experiencias ricas y diversas muestran que,",
    "El afán de organización, pero sobre todo",
    "Los superiores principios ideológicos, condicionan que",
    "Incluso, bien pudiéramos atrevernos a sugerir que",
    "Es obvio señalar que,",
    "Pero pecaríamos de insinceros si soslayásemos que,",
    "Y además, quedaríamos inmersos en la más abyecta de las estulticias si no fueramos consacientes de que,",
    "Por último, y como definitivo elemento esclarecedor, cabe añadir que,"
  ];
  
  const array2 = [
    "la realización de las premisas del programa",
    "la complejidad de los estudios de los dirigentes",
    "el aumento constante, en cantidad y en extensión, de nuestra actividad",
    "la estructura actual de la organización",
    "el nuevo modelo de actividad de la organización,",
    "el desarrollo continuo de distintas formas de actividad",
    "nuestra actividad de información y propaganda",
    "el reforzamiento y desarrollo de las estructuras",
    "la consulta con los numerosos militantes",
    "el inicio de la acción general de formación de las actitudes",
    "un relanzamiento específico de todos los sectores implicados",
    "la superación de experiencias periclitadas",
    "una aplicación indiscriminada de los factores confluyentes",
    "la condición sine qua non rectora del proceso",
    "el proceso consensuado de unas y otras aplicaciones concurrentes"
  ];
  
  const array3 = [
    "nos obliga a un exhaustivo análisis",
    "cumple un rol escencial en la formación",
    "exige la precisión y la determinación",
    "ayuda a la preparación y a la realización",
    "garantiza la participación de un grupo importante en la formación",
    "cumple deberes importantes en la determinación",
    "facilita la creación",
    "obstaculiza la apreciación de la importancia",
    "ofrece un ensayo interesante de verificación",
    "implica el proceso de reestructuración y modernización",
    "habrá de significar un auténtico y eficaz punto de partida",
    "permite en todo caso explicitar las razones fundamentales",
    "asegura, en todo caso, un proceso muy sensible de inversión",
    "radica en una elaboración cuidadosa y sistemática de las estrategias adecuadas",
    "deriva de una indirecta incidencia superadora"
  ];

  const array4 = [
    "de las condiciones financieras y administrativas existentes.",
    "de las directivas de desarrollo para el futuro.",
    "del sistema de participación general.",
    "de las actitudes de los miembros hacia sus deberes ineludibles.",
    "de las nuevas proposiciones.",
    "de las direcciones educativas en el sentido del progreso.",
    "del sistema de formación de cuadros que corresponda a las necesidades.",
    "de las condiciones de las actividades apropiadas.",
    "del modelo de desarrollo.",
    "de las formas de acción.",
    "de las básicas premisas adoptadas.",
    "de toda una casuística de amplio espectro.",
    "de los elementos generadores.",
    "para configurar una interface amigable y coadyuvante a la reingeniería del sistema.",
    "de toda una serie de criterios ideológicamente sistematizados en un frente común de actuación regeneradora."
  ];
  
  // Función para obtener un ítem aleatorio de un array
  function obtenerFraseAleatoria(array) {
    const indiceAleatorio = Math.floor(Math.random() * array.length);
    return array[indiceAleatorio];
  }
  
  // Función para generar frases aleatorias al hacer clic en el botón
  function generarFrasesAleatorias() {
    const fraseAleatoria1 = obtenerFraseAleatoria(array1);
    const fraseAleatoria2 = obtenerFraseAleatoria(array2);
    const fraseAleatoria3 = obtenerFraseAleatoria(array3);
    const fraseAleatoria4 = obtenerFraseAleatoria(array4);
  
    const resultado = document.getElementById("resultado");
    resultado.innerHTML = `<p>${fraseAleatoria1} ${fraseAleatoria2} ${fraseAleatoria3}</p>`;
  }
  
  // Asociar la función al evento click del botón
  const generarBtn = document.getElementById("generarBtn");
  generarBtn.addEventListener("click", generarFrasesAleatorias);
  
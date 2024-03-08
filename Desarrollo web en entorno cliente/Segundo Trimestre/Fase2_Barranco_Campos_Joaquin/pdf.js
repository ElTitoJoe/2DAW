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

    doc.text(20, 20, "Lista de Objetivos:");
    agregarTexto(contenidoObjetivos, 20, 30);

    doc.addPage(); // Agregar una nueva página para los criterios
    doc.text(20, 20, "Lista de Criterios:");
    agregarTexto(contenidoCriterios, 20, 30);

    // Descargar el PDF con el nombre "Contenido.pdf"
    doc.save("Contenido.pdf");
}
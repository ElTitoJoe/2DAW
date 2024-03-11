document.addEventListener("DOMContentLoaded", function() {
    cargarProductos();
});

function cargarProductos() {
    // Aquí puedes realizar una solicitud AJAX para obtener los productos desde el servidor
    // Supongamos que tienes un array de objetos productos
    var productos = [
        { nombre: "Producto 1", imagen: "imagen1.jpg", descripcion: "Descripción del producto 1" },
        { nombre: "Producto 2", imagen: "imagen2.jpg", descripcion: "Descripción del producto 2" },
        { nombre: "Producto 3", imagen: "imagen3.jpg", descripcion: "Descripción del producto 3" }
    ];

    var productListDiv = document.getElementById("productList");
    productos.forEach(function(producto) {
        var productDiv = document.createElement("div");
        productDiv.classList.add("product");
        productDiv.innerHTML = `
            <h3>${producto.nombre}</h3>
            <img src="${producto.imagen}" alt="${producto.nombre}">
            <p>${producto.descripcion}</p>
            <button>Agregar al carrito</button>
        `;
        productListDiv.appendChild(productDiv);
    });
}

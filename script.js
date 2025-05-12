const productos = {
    1: "Camiseta",
    2: "Gorra",
    3: "Mochila"
};

function agregarCarrito(id) {
    const lista = document.getElementById("lista-carrito");
    const item = document.createElement("li");
    item.textContent = productos[id];
    lista.appendChild(item);
}

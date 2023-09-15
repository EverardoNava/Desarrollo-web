// Ejecuta el codigo js de forma estricta
//"use strict"
// Objetos
const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}
const producto2 = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}

// Evita que se modifique el objeto .freeze
Object.freeze(producto)
producto.imegen = "imagen.jpg";
console.log(producto);

// Permite modificar pero no eliminar o agregar 
Object.seal(producto2)
producto2.precio = "Nuevo precio";

console.log(producto2);
// Objetos
const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio : 300,
    disponible : true
}

// Forma anterior
// const precioProducto = producto.precio;
// const nombreProducto = producto.nombreProducto;

// console.log(precioProducto);
// console.log(nombreProducto);


// Destructuring
//Tiene que tener el mismo nombre que la propiedad que se desea extraer
const {precio, nombreProducto} = producto;

console.log(precio);
console.log(nombreProducto);

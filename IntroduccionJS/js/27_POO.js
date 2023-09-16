// POO
// Object literal
const producto = { 
    nombre: 'Tablet',
    precio: 500
}

//Object Constructor
function Producto(nombre, precio, disponible){
    this.nombre = nombre;
    this.precio = precio;
    this.disponible = disponible;
}
function Cliente(nombre, apellido){
    this.nombre = nombre;
    this.apellido = apellido;
}
//Prototipe Crea fucniones que solo se utilizan en un objeto especifico
Producto.prototype.formatearProducto = function(){
    return `El producto ${this.nombre} tiene un precio de: $ ${this.precio}`;
}
Cliente.prototype.formatearCliente = function(){
    return `El cliente ${this.nombre} ${this.apellido}`;
}

const producto2 = new Producto('Monitor curvo de 49"', 800, true);
const producto3 = new Producto('Laptop', 300, false);

const cliente = new Cliente("Everardo", "Nava");


console.log(cliente.formatearCliente());
console.log(producto2.formatearProducto());
console.log(producto3.formatearProducto());


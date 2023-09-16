// Array methods
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
// Arreglo con objetos
const carrito = [
    {nombre:'Monitor 20 pulgadas', precio: 500},
    {nombre:'Televicion 50 pulgadas', precio: 700},
    {nombre:'Tablet', precio: 300},
    {nombre:'Audifonos', precio: 200},
    {nombre:'Teclado', precio: 50},
    {nombre:'Celular', precio: 500},
    {nombre:'Bosinas', precio: 300},
    {nombre:'Laptop', precio: 800}
];

//forEach

meses.forEach(function(mes){
    if(mes == 'Marzo'){
        console.log("Marzo si existe");
    }
});

// Includes
// let resultado = meses.includes('Marzo');
// console.log(resultado);

// Some ideal para arreglos con objetos
resultado = carrito.some(function(producto){
    return producto.nombre === 'Celular PRO';
});


// Reduce

resultado = carrito.reduce(function(total, producto){
    return total + producto.precio
}, 0);

// Filter retorna todos los productos que cumplan la condicion
resultado = carrito.filter(function(producto){
    return producto.precio > 400;
});


resultado = carrito.filter(function(producto){
    return producto.nombre === 'Celular';
});

console.log(resultado);
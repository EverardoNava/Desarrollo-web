// Arrow function

const sumar2 = (n1, n2) => console.log(n1 + n2);
sumar2(5, 10);

const aprendiendo = tecnologia => console.log(`Aprendiendo ${tecnologia}`);

aprendiendo("JavaScript");

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
// Arreglo con objetos
const carrito = [
    { nombre: 'Monitor 20 pulgadas', precio: 500 },
    { nombre: 'Televicion 50 pulgadas', precio: 700 },
    { nombre: 'Tablet', precio: 300 },
    { nombre: 'Audifonos', precio: 200 },
    { nombre: 'Teclado', precio: 50 },
    { nombre: 'Celular', precio: 500 },
    { nombre: 'Bosinas', precio: 300 },
    { nombre: 'Laptop', precio: 800 }
];

//forEach

meses.forEach(mes => {
    if (mes == 'Marzo') {
        console.log("Marzo si existe");
    }
});

let resultado;
// Some ideal para arreglos con objetos
resultado = carrito.some (producto => producto.nombre === 'Celular');

// Reduce
resultado = carrito.reduce((total, producto) => total + producto.precio, 0);

// Filter retorna todos los productos que cumplan la condicion
resultado = carrito.filter (producto  => producto.precio > 400);
resultado = carrito.filter(producto =>  producto.nombre === 'Celular');

console.log(resultado)

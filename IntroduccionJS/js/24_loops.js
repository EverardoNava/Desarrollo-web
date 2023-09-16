// For loop

// for(let i = 0; i < 10; i++){
//     console.log(i);
// }

// for(let i = 1; i <= 100; i++){
//     if( i % 2 ===0){
//         console.log(`El Número ${i} es PAR`);
//     }else{
//         console.log(`El Número ${i} es INPAR`)
//     }
// }

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

for (let i = 0; i < carrito.length; i++) {
    console.log(carrito[i]);
}

// Primero evalua despues se ejecuta
// While loop

// let i = 1; //Indice

// while (i <= 100) { // Condicion
//     if (i % 2 === 0) {
//         console.log(`El Número ${i} es PAR`);
//     } else {
//         console.log(`El Número ${i} es INPAR`)
//     }

//     i++; // Incremento
// }

// Se ejecuta almenos una vez y despues evalua
// Do While loop

let i = 1; //Indice

do {
    console.log(i);
    i++;
} while (i < 10)
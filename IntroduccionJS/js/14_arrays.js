// Arreglos o Arrays

const numeros = [10, 20, 30, 40, 50];

// console.table(numeros);

 const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

// console.table(meses);

// const arreglo = ["Hola", 10, true, "si", null, {nombre : "Everardo", trabajo : "Programador"},[1,2,3]];

// Acceder a los valores del arreglo
// console.log(numeros[0]);
// console.log(numeros[1]);
// console.log(numeros[2]);
// console.log(numeros[3]);
// console.log(numeros[4]);

// Conocer la extencion de un arreglo
// console.log(meses.length);

// meses.forEach(function(numero){
//     console.log(numero);
// });
//agrega o modifica un valor
// numeros[5] = 60;
// Agrega valores al final del arreglo
// numeros.push(70);
// Agrega valores al inicio del arreglo
// numeros.unshift(-10, -20, -30);

// Elimina el ultimo elemento del arreglo
// meses.pop();
// Elimina el primer elemento del arreglo
// meses.shift();

// elimina el elemento indicado en el arreglo
// meses.splice(2, 1);

console.table(numeros);
console.table(meses);


// Rest Operatot o Spread Operator
// Se copea rl arreglo en otro arreglo agregando valores
const nuevoArreglo = [...meses, 'Junio'];
console.table(nuevoArreglo);
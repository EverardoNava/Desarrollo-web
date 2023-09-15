// Arreglos o Arrays

const numeros = [10, 20, 30, 40, 50];

console.table(numeros);

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

console.table(meses);

const arreglo = ["Hola", 10, true, "si", null, {nombre : "Everardo", trabajo : "Programador"},[1,2,3]];

// Acceder a los valores del arreglo
console.log(numeros[4]);

// Conocer la extencion de un arreglo
console.log(meses.length);

meses.forEach(function(numero){
    console.log(numero);
});
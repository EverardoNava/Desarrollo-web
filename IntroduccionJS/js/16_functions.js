// Declaracion de Funciones

function sumar(){
    console.log(10 + 10);
}

sumar();

//Exprecion de la funcion
sumar2(); // Error de hoisting
const sumar2 = function(){
    console.log(3 + 3);
}


//IIFE se llaman solas y protege que no se mesclen variables en varios archivos

// (function(){
//     console.log("Esto es una funcion");
// })();
                //valores por defecto
function sumar(numero1 = 0, numero2 = 0){ // numero1, numero2 son parametros
    console.log(numero1 + numero2);
}

sumar(10, 10); // Argumentos o valores reales
sumar(10, 27); 


const sumar2 = function(n1 = 0, n2 = 0){
    console.log(n1 + n2);
}

sumar2(5);
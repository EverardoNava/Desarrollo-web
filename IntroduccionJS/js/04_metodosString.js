// Metodos para los strings

const tweet = 'Aprendiendo JavaScript con el curso de Desarrollo Web Completo';
                    //Escapar la comilla
const producto2 = "Monitor de 20 pulgadas";

//length es para la extension
console.log(tweet.length);
console.log(producto2);

//indexOf encuentra la posicion de letras o palabras en una cadena de texto
console.log(tweet.indexOf('JavaScript'))
console.log(tweet.indexOf('Tablet'))

//includes (retorna true o false)
console.log(tweet.includes('JavaScript'));
console.log(producto2.includes('Tablet'));

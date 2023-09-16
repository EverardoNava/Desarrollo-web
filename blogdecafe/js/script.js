//getElementById ya no es tan utilizado
// const heading2 = document.getElementById('heading')
// console.log(heading2);

// querySelector
const heading = document.querySelector('.header__texto h2'); // 0 o 1 elemento
console.log(heading);
heading.textContent = 'Nuevo heading';

//querySelectorAll
const enlaces = document.querySelectorAll('.navegacion a');
console.log(enlaces[0]);
enlaces[0].textContent = 'Nuevo texto para enlace';
enlaces[0].href = 'http://google.com';
enlaces[0].classList.add('nueva-clase');
// enlaces[0].classList.remove('navegacion__enlace');

// Generar un nuevo enlace 
const nuevoEnlace = document.createElement('A');

// Agregar el href
nuevoEnlace.href = 'nuevo-enlace.htm';

//Agregar el texro
nuevoEnlace.textContent = 'Un nuevo enlace';

//Agregar la clase
nuevoEnlace.classList.add('navegacion__enlace');

//Agregarlo al documento
const navegacion = document.querySelector('.navegacion');
navegacion.appendChild(nuevoEnlace);


console.log(nuevoEnlace);


//Eventos
// console.log(1);
// window.addEventListener('load', function(){ //load espera a que el JS y los archivos que dependen del HTML estén listos
//     console.log(2);
// });
// window.onload = function(){
//     console.log(3);
// }

// document.addEventListener('DOMContentLoaded', function(){// Solo espera el HTML, pero no espera el CSS o imagenes
//     console.log(4);
// })
// console.log(5);

// window.onscroll = function(evento){
//     console.log(evento);
// }

// Seleccionar elementos  y asociarles un evento

// const btnEnviar = document.querySelector('.boton--primario');
// btnEnviar.addEventListener('click', function(evento){
//     console.log(evento);
//     evento.preventDefault();

//     // Validar un formulario

//     console.log('enviando formulario');
// })



// Eventos de los Inputs y Textareas

const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}

const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');
const formulario = document.querySelector('.formulario');

nombre.addEventListener('input', leerTexto);
email.addEventListener('input', leerTexto);
mensaje.addEventListener('input', leerTexto);

// Evento submit
formulario.addEventListener('submit', function(evento){
    evento.preventDefault();
    // Validar el formulario
    const {nombre,email,mensaje} = datos;
    if(nombre === '' || email ==='' || mensaje ===''){
        mostrarAlerta('Todos los campos son obligatorios', true);
        return; // Corta la ejecución del código
    }
    // Crear la alerta de Enviar correctamente
    mostrarAlerta('Mensaje enviado correctamente');
});

// Refactorizado de las alertas de error y correcto
function mostrarAlerta(mensaje, error = null){
    const alerta = document.createElement('P');
    alerta.textContent = mensaje;
    if(error){
        alerta.classList.add('error');
    }else{
        alerta.classList.add('correcto');
    }
    formulario.appendChild(alerta);
    //Desaparesca despues de 5 segundos
    setTimeout(()=>{
        alerta.remove();
    }, 5000)
}

// Muestra una alerta de que se envio correctamente
// function mostrarMesaje(mensaje){
//     const alerta = document.createElement('P');
//     alerta.textContent = mensaje;
//     alerta.classList.add('correcto');

//     formulario.appendChild(alerta);

    //Desaparesca despues de 5 segundos
//     setTimeout(()=>{
//         alerta.remove();
//     }, 5000)
// }

// Muestra un error en pantalla
// function mostrarError(mensaje){
//     const error = document.createElement('P');
//     error.textContent = mensaje;
//     error.classList.add('error');
//     formulario.appendChild(error);
//     console.log(error);

    //Desaparesca despues de 5 segundos
//     setTimeout(()=>{
//         error.remove();
//     }, 5000)
// }
function leerTexto(e){
    // console.log(e.target.value);
    datos[e.target.id] = e.target.value;
}
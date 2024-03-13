let paso = 1;
const pasoInicial = 1; //Paso inicial del formulario
const pasoFinal = 3; //Paso final del formulario



document.addEventListener("DOMContentLoaded", function () {
    iniciarApp();
});

function iniciarApp() {
    mostrarSeccion(); //Muestra y oculta las secciones
    tabs();//Cambia la seccion cuando se presionan ls tabs
    botonesPaginador();//Agrega o quita los botones del paginador
    paginaSiguiente();//Cambia la seccion cuando se presiona el boton siguiente
    paginaAnterior();//Cambia la seccion cuando se presiona el boton anterior


}
function mostrarSeccion() {
    //Ocultar la seccion que tenga la clase de mostrar
    const seccionAnterior = document.querySelector(".mostrar"); //Selecciona la seccion que tenga la clase mostrar
    if (seccionAnterior) { //Si hay una seccion con la clase mostrar
        seccionAnterior.classList.remove("mostrar"); //Remueve la clase mostrar-seccion de la seccion seleccionada
    }


    //Seleccionar la seccion con el paso...
    const pasoSelector = `#paso-${paso}`
    const seccion = document.querySelector(pasoSelector); //Selecciona la seccion con el paso correspondiente
    seccion.classList.add("mostrar"); //Agrega la clase mostrar-seccion a la seccion seleccionada

    //Quita la clase de actual al tab anterior
    const tabAnterior = document.querySelector(".actual"); //Selecciona el boton con la clase actual
    if (tabAnterior) {
        tabAnterior.classList.remove("actual"); //Remueve la clase actual del boton seleccionado
    }


    //Resalta el boton actual
    const tab = document.querySelector(`[data-paso="${paso}"]`); //Selecciona el boton con el paso correspondiente
    tab.classList.add("actual"); //Agrega la clase actual al boton seleccionado


}


function tabs() {
    const botones = document.querySelectorAll(".tabs button"); //Selecciona todos los botones de la clase tabs

    botones.forEach(boton => {
        boton.addEventListener("click", function (e) {
            paso = parseInt(e.target.dataset.paso); //Obtiene el paso del boton que se presiono
            mostrarSeccion(); //Muestra la seccion correspondiente al paso

            botonesPaginador();
        })
    })
}

function botonesPaginador() {
    const paginaAnterior = document.querySelector("#anterior"); //Selecciona el boton de siguiente
    const paginaSiguiente = document.querySelector("#siguiente"); //Selecciona el boton de siguiente

    if (paso === 1) {
        paginaAnterior.classList.add("ocultar"); //Agrega la clase ocultar al boton anterior
        paginaSiguiente.classList.remove("ocultar"); //Agrega la clase ocultar al boton siguiente

    } else if (paso === 3) {
        paginaAnterior.classList.remove("ocultar"); //Agrega la clase ocultar al boton anterior
        paginaSiguiente.classList.add("ocultar"); //Agrega la clase ocultar al boton siguiente
    }
    else {
        paginaAnterior.classList.remove("ocultar"); //Agrega la clase ocultar al boton anterior
        paginaSiguiente.classList.remove("ocultar"); //Agrega la clase ocultar al boton anterior

    }
    mostrarSeccion(); //Muestra la seccion correspondiente al paso
}

function paginaAnterior() {
    const paginaAnterior = document.querySelector("#anterior"); //Selecciona el boton de anterior
    paginaAnterior.addEventListener("click", function () {

        if (paso <= pasoInicial) return; //Si el paso es menor o igual al paso inicial, no hace nada
        paso--; //Disminuye el paso en 1
        botonesPaginador();
    })


}


function paginaSiguiente() {
    const paginaSiguiente = document.querySelector("#siguiente"); //Selecciona el boton de siguiente
    paginaSiguiente.addEventListener("click", function () {
        if (paso >= pasoFinal) return; //Si el paso es mayor o igual al paso final, no hace nada
        paso++; //Aumenta el paso en 1
        botonesPaginador();
    })

}

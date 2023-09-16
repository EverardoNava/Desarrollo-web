// This
// En arrow function this hace referencia a la vantana
const reservacion = {
    nombre: 'Everardo',
    apellido: 'Nava',
    total: 5000,
    pagado: false,
    informacion: () =>{
        console.log(`El cliente ${this} reservó y su cantidad a pagar es de $${this.total}`)
    }
}
// En una funcion this hace referencia al objeto
const reservacion2 = {
    nombre: 'Pedro',
    apellido: 'Nava',
    total: 5000,
    pagado: false,
    informacion: function(){
        console.log(`El cliente ${this.nombre} reservó y su cantidad a pagar es de $${this.total}`)
    }
}

reservacion.informacion();
reservacion2.informacion();
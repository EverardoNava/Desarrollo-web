//Se crea el acrhivo empleados.json

async function obtenerEmpleados() {
    const archivo = 'empleados.json';
    // fetch(archivo)
    //     .then(resultado => resultado.json())
    //     .then(datos => {
    //         // console.log(datos.empleados);

    //         const { empleados } = datos;
    //         // console.log(empleados);

    //         empleados.forEach(empleado => {
    //              console.log(empleado);
    //         });
    //     });
    //Menos lineas con async await
    const resultado = await fetch(archivo);
    const datos = await resultado.json();
    console.log(datos);
}

obtenerEmpleados();
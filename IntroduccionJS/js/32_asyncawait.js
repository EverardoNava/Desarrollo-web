// Async / Await

function descargarNuevosClientes() {
    return new Promise(resolve => {
        console.log('Descargando clientes...espere...');

        setTimeout(() => {
            resolve('Los clientes fueron Descargados');
        }, 5000);
    })
}
function descargarUltimosPedidos() {
    return new Promise(resolve => {
        console.log('Descargando pedidos...espere...');

        setTimeout(() => {
            resolve('Los pedidos fueron Descargados');
        }, 3000);
    })
}

async function app(){
    try {
        // const clientes = await descargarNuevosClientes();
        // const pedidos = await descargarUltimosPedidos();
        // console.log('Este codigo si se bloquea');
        // console.log(clientes);
        // se trabajan en paralelo pero se tarda el tiempo de la funcion que mas se tarda
        const resultado = await Promise.all([descargarNuevosClientes(),descargarUltimosPedidos()]);
        console.log(resultado[0]);
        console.log(resultado[1]);

    } catch (error) {
        console.log(error);
    }
}
app();

// console.log('Este codigo no se bloquea');

// setInterval(() =>{
//     console.log('Set Interval...')
// }, 2000);
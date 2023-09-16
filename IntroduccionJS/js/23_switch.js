// switch
const metodoPago = 'efectivo';

switch (metodoPago) {
    case 'targeta':
        console.log('Pagaste con tarjeta');
        break;
    case 'cheque':
        console.log('El usuario va a pagar con cheque, revisaremos los fondos primero');
        break;
    case 'efectivo':
        console.log('Pagaste con efectivo');
        break;
    default:
        console.log('Aun no as pagado');
        break;
}
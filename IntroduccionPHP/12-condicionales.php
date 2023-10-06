<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if ($autenticado && $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia secion";
}

// If anidados...

$cliente = [
    'nombre' => 'Everardo',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];
echo '<br>';
if (!empty($cliente)) {
    echo "El arreglo de clliente no esta vacio";
    echo '<br>';
    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    } else {
        echo "No hay saldo";
    }
}
echo '<br>';
// else if
if ($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "Es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es Premium";
}
echo '<br>';

// Switch
$tecnologia = "PHP";

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un exelente lenguaje";
        break;
    case 'JavaScript':
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Emmm...";
        break;

    default:
        echo "Algun lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';

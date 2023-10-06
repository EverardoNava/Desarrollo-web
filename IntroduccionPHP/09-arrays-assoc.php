<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Everardo',
    'saldo' => '200',
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['informacion']['disponible'];

$cliente['codigo'] = 1234321;

echo "<pre>";
var_dump($cliente);
echo "</pre>";
echo 
include 'includes/footer.php';
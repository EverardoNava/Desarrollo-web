<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];

// Empty - revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes3));
echo '<br>';
// Isset - Revisa si un aarreglo esta creado o una propiedad esta definida
var_dump(isset($clientes4));
var_dump(isset($clientes));

// Isset - Permite revisar si una propiedad de un arreglo asociativo, existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));

include 'includes/footer.php';
<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Televicion'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

// Ordenar elementos en un arreglo
$numeros = array(1,3,4,5,1,2);
// De menor a mayor
sort($numeros);
// De mayor a menor
rsort($numeros);

echo '<pre>';
var_dump($numeros);
echo '</pre>';

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Everardo'
);

echo '<pre>';
var_dump($cliente);
echo '</pre>';

// Ordena por valores (orden alfabetico)
asort($cliente);
echo '<pre>';
var_dump($cliente);
echo '</pre>';

// Ordena por llaves (orden alfabetico)
ksort($cliente);
echo '<pre>';
var_dump($cliente);
echo '</pre>';

// Ordena por llaves (orden alfabetico inverso)
krsort($cliente);
echo '<pre>';
var_dump($cliente);
echo '</pre>';

// Ordena por vlores (orden alfabetico inverso)
arsort($cliente);
echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';
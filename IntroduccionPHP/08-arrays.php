<?php include 'includes/header.php';

$carrito = ['Tableta', 'Television', 'Computadora'];

// Util para ver los contenidos de u array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = "Nuevo producto";

// Añade un elemento nuevo al final
array_push($carrito, 'Audifonos');

// Añade un elemento nuevo al inicio
array_unshift($carrito, "Smartwacht");

// Util para ver los contenidos de u array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


$clientes = array('Cleinte 1', 'Cliente 2', 'Cliente 3');

echo "<pre>";
var_dump($clientes);
echo "</pre>";


include 'includes/footer.php';
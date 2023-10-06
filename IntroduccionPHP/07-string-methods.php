<?php include 'includes/header.php';

$nombreCliente = 'Everardo Nava';

//Conocer la extencion de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);
echo '<br>';

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo '<br>';

//Convertirlo en mayusculas
echo strtoupper($nombreCliente);
echo '<br>';

//convertirlo en minusculas
echo strtolower($nombreCliente);
echo '<br>';

$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";

var_dump(strtolower($email1) === strtolower($email2));
echo '<br>';

echo str_replace('Everardo', 'E', $nombreCliente);
echo '<br>';

//Revisar si un string existe o no
echo strpos($nombreCliente,'Everardo');
echo '<br>';
$tipoCliente = "Premium";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente;
echo '<br>';
echo "El Cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';
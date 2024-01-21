<?php include 'includes/header.php';

//Incluir las otras clases

// require "clases/Clientes.php";
// require "clases/Detalles.php";
require "vendor/autoload.php";

use App\Clientes;
use App\Detalles;
use \Firebase\JWT\JWK;


$detalles = new Detalles();
$cleintes = new Clientes();

include 'includes/footer.php';

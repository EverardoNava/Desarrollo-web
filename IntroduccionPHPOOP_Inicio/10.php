<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO("mysql:host=localhost; dbname=bienesraices_crud", "root", "root");

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Preparar la sentencia
$stmt = $db->prepare($query);

//Ejecutar la sentencia
$stmt->execute();

//Se la consulta a una variable
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $propiedad){
    echo $propiedad["titulo"];
    echo "<br>";
    echo $propiedad["imagen"];
    echo "<br>";
}

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

include 'includes/footer.php';
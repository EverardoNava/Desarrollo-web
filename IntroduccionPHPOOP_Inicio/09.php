<?php include 'includes/header.php';
//Conectar a la DB con Mysqli

$db = new mysqli("localhost", "root", "root", "bienesraices_crud");

//Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo,$imagen);

//Asignamos el resultado
//Imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';
<?php
require "../../includes/app.php";

use App\Vendedor;

estaAutenticado();

$vendedor = new Vendedor();

// Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

//Ejecutar el codigo despues de que el usuario encia el formulario
if ($_SERVER['REQUEST_METHOD'] === "POST") {
}

if (empty($errores)) {
}

incluirTemplates("header");
?>

<main class="contenedor seccion">
    <h1>Registrar vendedor</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>
    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/admin/vendedores/crear.php">
        <?php include "../../includes/templates/formulario_vendedores.php" ?>
        <input type="submit" value="Registrar Vendedor" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplates("footer");
?>
<?php

declare(strict_types=1);
include 'includes/header.php';

//Encapsulacion

//Definir una classe
class Producto
{
    //public - Se puede acceder y modificar en cualquier lugar (clases y objetos)
    //protected - Se puede acceder/modificar unicamente en la clase
    //pivate - Solo miembros pueden acceder a el 
    //Abstraccion
    public function __construct(protected string $nombre, public  int $precio, public  bool $disponible)
    {
    }
    //Metodos
    public function mostrarProducto() : void
    {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}

$producto = new Producto("Tablet", 200, true);

echo $producto->getNombre();
$producto->setNombre("Nuevo Nombre");

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor curvo", 300, true);

$producto2->mostrarProducto();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';

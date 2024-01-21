<?php

declare(strict_types=1);
include 'includes/header.php';

//Metodos estaticos

//Definir una classe
class Producto
{
    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    public function __construct(protected string $nombre, public  int $precio, public  bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto()
    {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto()
    {
        echo "Obteniendo datos del producto";
    }


    //Metodos
    public function mostrarProducto(): void
    {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
}



$producto = new Producto("Tablet", 200, true,"");

echo $producto-> obtenerImagenProducto();

echo $producto->getNombre();
$producto->setNombre("Nuevo Nombre");

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor curvo", 300, true, "monitorCurvo.jpg");

// $producto2->mostrarProducto();
echo $producto2-> obtenerImagenProducto();   

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';

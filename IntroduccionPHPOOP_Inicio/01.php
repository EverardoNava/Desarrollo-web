<?php 
declare(strict_types =1);
include 'includes/header.php';

//Definir una classe
class Producto
{
    //Definir atributos(propiedades)
    //antigua forma

    // public $nombre;
    // public $precio;
    // public $disponible;

    // public function __construct(string $nombre, int $precio, bool $disponible)
    // {
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    //     $this->disponible = $disponible;
    // }

    //Nueva forma
    //Abstraccion
    public function __construct(public string $nombre, public  int $precio, public  bool $disponible)
    {

    }
    //Metodos
    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }
}

$producto = new Producto("Tablet", 200, true);


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto("Monitor curvo", 300, true);

$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';

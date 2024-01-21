<?php include 'includes/header.php';
//Clases abstractas
//No se pueden instanciar
abstract class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }
    public function getInfo(): string
    {
        return "el transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }
    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte
{
    public function getInfo(): string
    {
        return "el transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y NO GASTA GASOLINA ";
    }
}

class Automovil extends Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }
    public function getTransmicion(): string
    {
        return $this->transmision;
    }
}

$transporte = new Transporte(1,3);

echo $transporte->getInfo();
echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4, 4, "Manual");
echo $auto->getInfo();
echo $auto->getTransmicion();

include 'includes/footer.php';

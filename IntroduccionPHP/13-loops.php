<?php include 'includes/header.php';

//while
//inicializador
$i = 0;

while ($i < 10) {
    echo $i . "<br>";
    // Incremento
    $i++;
}
while ($i < 10) :
    echo $i . "<br>";
    // Incremento
    $i++;
endwhile;

// Do while
$i = 0;
do {
    echo $i . "<br>";
    // Incremento
    $i++;
} while ($i < 10);


// For loop
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir Fizz Buzz
 */
echo '<br>';
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "- Fizz Buzz <br>";
    } else if ($i % 5 === 0) {
        echo $i . " - Buzz <br>";
    } else if ($i % 3 === 0) {
        echo $i . " - Fizz <br>";
    }
}
echo '<br>';
for ($i = 1; $i < 100; $i++) :
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "- Fizz Buzz <br>";
    } else if ($i % 5 === 0) {
        echo $i . " - Buzz <br>";
    } else if ($i % 3 === 0) {
        echo $i . " - Fizz <br>";
    }
endfor;

echo '<br>';
$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];
foreach ($cliente as $valor) {
    echo $valor . '<br>';
}

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . '<br>';
}



include 'includes/footer.php';

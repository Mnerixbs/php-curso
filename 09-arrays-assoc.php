<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]     
];


echo"<pre>";
var_dump($cliente['nombre']);
echo"</pre>";
echo"<br>";

echo$cliente['nombre'];
echo"<br>";
echo"Esta es la informacion del cliente: ".$cliente['informacion']['tipo'];

include 'includes/footer.php';
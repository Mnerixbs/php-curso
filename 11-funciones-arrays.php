<?php include 'includes/header.php';


$carrito = ['Tablet','Computadora' ,' Television'];

//Buscar elemento en un arreglo
var_dump(in_array('Tablet',$carrito));
var_dump(in_array('Audifonos',$carrito));

//Ordenar elementos de un arreglo

$numeros = [1,2,3,2,2,3,1];

sort($numeros);
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente);//ordena por valores
ksort($cliente);//ordena por llaves orden alfabetico
krsort($cliente);//ordena al revez por llaves orden alfabetico

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
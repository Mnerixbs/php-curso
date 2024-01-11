<?php include 'includes/header.php';

 $carrito = ['Tablet','Television','Computadora'];

echo"<pre>";
var_dump($carrito);
echo"</pre>";
echo"<br>";

echo $carrito[1];

//añade un elemento al arreglo en el lugar 3
$carrito[3]="nuevo producto";

//añade al final del arreglo
array_push($carrito,"Producto al final");
//añade al inicio del arreglo
array_unshift($carrito, "SmartWach");

echo"<pre>";
var_dump($carrito);
echo"</pre>";
echo"<br>";




include 'includes/footer.php';
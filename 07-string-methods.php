<?php include 'includes/header.php';

$nombreCliente = "Mario     Rico";

echo strlen($nombreCliente);
echo"<br>";
var_dump($nombreCliente);
echo"<br>";

//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo"<br>";
//convertirlo a mayusculas
echo strtoupper($nombreCliente);
echo"<br>";
$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));


include 'includes/footer.php';
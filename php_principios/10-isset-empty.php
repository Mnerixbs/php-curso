<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('pedro','juan','martin');


//revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

//revisa si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(isset($clientes4));

include 'includes/footer.php';
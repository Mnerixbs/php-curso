<?php include 'includes/header.php';



$productos =  [
    [
        'nombre'=> 'Tablet',
        'precio'=> 200,
        'disponible'=> true
    ],
    [
        'nombre'=> 'Televisión',
        'precio'=> 300,
        'disponible'=> true
    ],
    [
        'nombre'=> 'Monitor curvo',
        'precio'=> 400,
        'disponible'=> false
    ]   
    ];

echo "<pre>";
var_dump($productos);

//convertir a json

$json = json_encode($productos,JSON_UNESCAPED_UNICODE);
var_dump($json);

echo "<pre>";


include 'includes/footer.php';
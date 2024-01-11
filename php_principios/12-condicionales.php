<?php include 'includes/header.php';


$autenticado = true;
$admin = false;
if ($autenticado || $admin) {
    echo "usuario autenticado correctamente";

}else{
    echo"usuario no autenticado";
}
echo"<br>";
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 220,
    'informacion' => [
        'tipo' => 'Premium'
    ]
    ];

    if (!empty($cliente)) {
        echo"El arreglo del cliente no esta vacio";
        echo"<br>";
        if ($cliente['saldo']>0) {
            echo "el saldo del cliente esta disponible";
        }else{
            echo"No hay saldo";
        }
    } 
    

include 'includes/footer.php';
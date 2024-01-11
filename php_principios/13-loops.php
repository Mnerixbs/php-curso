<?php include 'includes/header.php';
//hace la condicion y luego ejecuta el codigo
$a = 0;

while ($a <= 10) {
    echo $a. "<br>";
    $a++;
}

echo"<br>";


//primero ejecuta el codigo y luego hace la condicion
$i = 0;
do {
    echo $i. "<br>";
    $i++;
} while ($i <= 10);
echo"<br>";

/*
 Si es multiplo de 3 imprime fizz
 si es multiplo de 5 imprime buzz
 si es multiplo de 3 y 5 imprime fizz buzz
*/

/* for ($i=1; $i <= 100; $i++) { 
    if ($i % 5 === 0 && $i % 3 === 0) {
        echo $i . "-Fizz Buzz";
        echo "<br>";
    }elseif($i % 3 === 0) {
        echo $i . "-Fizz";
        echo "<br>";
    }elseif($i % 5 === 0) {
        echo $i . "-Buzz";
        echo "<br>";
    }
} */


$clientes = array('Pedro','Juan','Karen');

foreach ($clientes as $cliente) :
    echo $cliente . '<br/>';
endforeach;

for ($i=0; $i < count($clientes) ; $i++) :
    echo $clientes[$i]. '<br/>';
endfor;

include 'includes/footer.php';
<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "40";

var_dump(($numero1 > $numero2));
echo"<br>";

var_dump(($numero1 < $numero2));
echo"<br>";

var_dump(($numero1 >= $numero2));
echo"<br>";

var_dump(($numero1 <= $numero2));
echo"<br>";

var_dump(($numero1 == $numero3));
echo"<br>";

var_dump(($numero2 == $numero4));
echo"<br>";

var_dump(($numero2  === $numero4));
echo"<br>";

include 'includes/footer.php';
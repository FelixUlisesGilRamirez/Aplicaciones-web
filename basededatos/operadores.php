<?php 
$a = 2;
$b = 4;

$result = ($a != $b);
var_dump ($result);

if ($a != $b){
    echo "2 y 4 no son iguales", "</br>";
}
$a = 2;
$b = 2;

$result = ($a == $b);
var_dump ($result);

if ($a == $b) {
    echo "2 y 2 son iguales", "</br>";
}
$a = 1;
$b = 10;

$result = ($a < $b);
var_dump ($result);

if ($a < $b){
    echo "1 es menor que 10", "</br>";
}
$a = 10;
$b = 10;

$result = ($a >= $b);
var_dump ($result);

if ($a >= $b){
    echo "10 es mayor o igual que 10", "</br>";
}
?>

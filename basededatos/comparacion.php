<?php 
$v1 =10;
$v2 =3;

$result = (int) ($v1 * $v2);
var_dump($result);
echo "Multiplicacion";
$v1 =10;
$v2 =3;

$v1 =10;
$v2 =3;

$result = (int) ($v1 / $v2);
var_dump($result);
echo "Division";
$v1 =10;
$v2 =3;

$v1 =10;
$v2 =3;

$result = (int) ($v1 + $v2);
var_dump($result);
echo "suma";
$v1 =10;
$v2 =3;

$v1 =10;
$v2 =3;

$result = (int) ($v1 - $v2);
var_dump($result);
echo "resta";
$v1 =10;
$v2 =3;

?>

<?php 
$v1 = 12;
$v2 = 15;
$v3 = 12;
$result = (int) ($v1 == $v2);
var_dump ($result);

$v1 = 15;
$v2 = 15;

$result = (int) ($v1 === $v2);
var_dump ($result);

$v1 = 12;
$v2 = 15;

$result = (int) ($v1 != $v2);
var_dump ($result);

$v1 = 12;
$v2 = 15;

$result = (int) ( $v1 <=> $v2);
var_dump ($result);

if ($v1 == $v3) {
    echo "somos iguales";
}
if($v1 != $v3){
    echo "somos diferentes";
}
?>

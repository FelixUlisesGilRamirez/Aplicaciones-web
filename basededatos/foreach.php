<?php 
$array = [
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "cuatro" => 4,
    "cinco" => 5,
];

var_dump ($array);

foreach ($array as $key => $value) {
    echo "</br>";
    echo "el valor de $key es: $value";
}

?>


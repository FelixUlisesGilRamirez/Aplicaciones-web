<?php 
$dbHost = 'localhost';
$dbName = 'hotel para perros';
$dbUser = 'root';
$dbPass ='';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo $e->getMessage();
}
if ($pdo){
    echo "Conectado";
}else{
    echo "No conectado";
}

?>


<?php 
include '../BD/conexion.php';

$result = false;
if (!empty ($_POST));
$idUsuario = $_POST['idU'];
$newName = $_POST[''];

$sql = "UPDATE usuario SET nombre = nombre WHERE idUsuario = :idUsuario";
$query = $pdo->prepare($sql);

$result = $query->execute({
    'idUsuario' => $idUsuario,
    'nombre' => $newName,
});

$nameValue = $newName;
}else{
    $idUsuario = $_GET['idUsuario'];
    $sql = "SELECT * FROM usuario WHERE idUsuario = id"
?>
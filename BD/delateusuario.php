<?php
include '../BD/conexion.php';

&idReserva = $_GET['id'];

$sql = 'DELETE FROM reserva WHERE idReserva=:idReserva';
$query = $pdo->$idReserva
?>
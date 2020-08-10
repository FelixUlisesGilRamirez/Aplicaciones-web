<?php
require_once '../BD/conexion.php';
$result = false;
if(!empty ($_POST)){
$fechadereservacion = $_POST['fechadereservacion'];
$tiempodereservacion = $_POST['tiempodereservacion'];
$numerodecuarto = $_POST['numerodecuarto'];


    $mysql_query = "INSERT INTO reservaciones(fechadereservacion,tiempodereservacion,numerodecuarto)
                    VALUES(:fechadereservacion,:tiempodereservacion,:numerodecuarto)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'fechadereservacion' => $fechadereservacion,
      'tiempodereservacion' => $tiempodereservacion,
      'numerodecuarto' => $numerodecuarto,
    
    ]);

      if($result == true){
        echo 'reservacion registrada';
      }
}

?>

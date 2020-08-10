<?php
require_once '../BD/conexion.php';
$result = false;
if(!empty ($_POST)){
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$domicilio = $_POST['domicilio'];
$telefono= $_POST['telefono'];
$edad = $_POST['edad'];

    $mysql_query = "INSERT INTO usuarios(nombres,apellidos,correo, domicilio, telefono, edad)
                    VALUES(:nombres,:apellidos,:correo,:domicilio,:telefono,:edad)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'nombres' => $nombres,
      'apellidos' => $apellidos,
      'correo' => $correo,
      'domicilio' => $domicilio,
      'telefono' => $telefono,
      'edad' => $edad,
    
    ]);

      if($result == true){
        echo 'El usuario se registro correctamente';
      }
}

?>

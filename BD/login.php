<?php
require_once '../BD/conexion.php';
$result = false;
if(!empty ($_POST)){
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrsena = $_POST['contrasena'];

    $mysql_query = "INSERT INTO sesion(usuario,correo,contrasena)
                    VALUES(:usuario,:correo,:contrasena)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'usuario' => $usuario,
      'correo' => $correo,
      'contrasena' => $contrsena,
    
    ]);

      if($result == true){
        echo 'El usuario se registro correctamente';
      }
}

?>
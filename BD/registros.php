<?php
require_once '../BD/conexion.php';
session_register_shutdown ();
$result = false;
if(!empty ($_POST)){
$nombre_usuario = $_POST['nombre_usuario'];
$mail = $_POST['mail'];
$contraseña = $_POST['contraseña'];

    $mysql_query = "INSERT INTO registros(nombre_usuario, mail, contraseña)
                    VALUES(:nombre_usuario,:mail,:contraseña)";
    $query = $pdo->prepare($mysql_query);

    $result = $query->execute([
      'nombre_usuario' => $nombre_usuario,
      'mail' => $mail,
      'contraseña' => $contraseña,
    
    ]);

      if($result == true){
        echo 'usuario registrado correctamente';
      }
}

?>
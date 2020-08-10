<?php
 include '../BD/conexion.php';
 
 $id_Usuarios = $_GET['id_Usuarios'];
 
 $sql = 'DELETE FROM Usuarios  WHERE id_Usuarios=:id_Usuarios';
 $query = $pdo->prepare($sql);
 $query->execute([
   'id_Usuarios' =>$id_Usuarios
 ]);
 
 header("Location:listUsuarios.php");
?>

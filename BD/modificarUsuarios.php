<?php
 // conexion BD
 include '../BD/conexion.php';
 
 $result = false ;
 
 
 if(!empty ($_POST)){
 
  $id_Usuarios = $_POST['id_Usuarios'];
  $newNames = $_POST['nombres'];
  $newSurnames = $_POST['newSurname'];
  $newMail = $_POST['newMail'];
  $newHome = $_POST['newHome'];
  $newTelephone = $_POST['newTelephone'];
  $newAge = $_POST['newAge'];
 
  $sql = "UPDATE usuarios SET nombres = :nombres WHERE id_Usuarios = :id_Usuarios";
  $sql = "UPDATE usuarios SET apellidos = :apellidos WHERE id_Usuarios = :id_Usuarios";
  $sql = "UPDATE usuarios SET correo = :correo WHERE id_Usuarios = :id_Usuarios";
  $sql = "UPDATE usuarios SET domicilio = :domicilio WHERE id_Usuarios = :id_Usuarios";
  $sql = "UPDATE usuarios SET telefono = :telefono WHERE id_Usuarios = :id_Usuarios";
  $sql = "UPDATE usuarios SET edad = :edad WHERE id_Usuarios = :id_Usuarios";
  
  $query = $pdo->prepare($sql);
  
  
  $result = $query->execute([
    'id_Usuarios' => $id_Usuarios,
    'nombres' =>$newNames,
    'newSurnames' =>$newSurnames,
    'newMail' =>$newMail,
    'newHome' =>$newHome,
    'newTelephone' =>$newTelephone,
    'newAge' =>$newAge,
    
  ]);
 
  $namesValue = $newNames;
  $surnamesValue = $newSurnames;
  $mailValue = $newMail;
  $homeValue = $newHome;
  $telephoneValue = $newTelephone;
  $ageValue = $newAge;
}else{
  $id_Usuarios = $_GET['id_Usuarios'];
   $sql = "SELECT * FROM usuarios WHERE id_Usuarios = :id_Usuarios";
   $query = $pdo->prepare($sql);
 
   $query->execute([
     'id_Usuarios' => $id_Usuarios
   ]);
 
   $row = $query->fetch(PDO::FETCH_ASSOC);
   $idValue = $row['id_Usuarios'];
   $namesValue = $row['nombres'];
   $surnamesValue = $row['apellidos'];
   $mailValue = $row['correo'];
   $homeValue = $row['domicilio'];
   $telephoneValue = $row['telefono'];
   $ageValue = $row['edad'];

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/styleFUGR.css">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- NavBar content -->
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="Usuarios.html">usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservaciones.html">Reservaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Registroperro.html">Registro Perros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
    <a href="listUsuarios.php">Regresar</a>
    <?php 
    if($result) {
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> 
                <strong>El Usuario!</strong>Se Actualizo Correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
               </button>
            </div>';
    }
    ?>
    <div class="row col-md-12 col-lg-12 col-xs-12">
      <h3 class="text-left">
        Modifiación de Usuarios
      </h3>
         <Form action= "modificarUsuarios.php" method="post">
         <br>
         <input class="form-control" type="hidden" name="id_Usuarios" value="<?php echo $idValue?>">
          <label for= "name">Usuarios</label>
          <input   class="form-control" type="text" name="nombres" value="<?php echo $namesValue; ?>">
          <input   class="form-control" type="text" name="apellidos" value="<?php echo $surnamesValue; ?>">
          <input   class="form-control" type="text" name="correo" value="<?php echo $mailValue; ?>">
          <input   class="form-control" type="text" name="domicilio" value="<?php echo $homeValue; ?>">
          <input   class="form-control" type="text" name="telefono" value="<?php echo $telephoneValue; ?>">
          <input   class="form-control" type="text" name="edad" value="<?php echo $ageValue; ?>">
         <button class="btn btn-primary" type="submit">Actulizar</button>
         </Form>

    </div>
    </div>
    </div>

     <!-- footer -->
  <footer class="page-footer font-small blue fixed-bottom">
    <div style="background-color: #21d192;">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
         <a href="https://mdbootstrap.com/"> Mi primera pagina web</a>
    </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

<?php
include('config.php');
require('class/usuarios.php');
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$objusuarios = new Usuarios ();
$usuarios = $objusuarios-> mostrar_usuarios();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>LISTA DE USUARIOS</title>
</head>

<body>

    <div class="container"><br>


 <table id="usuario" class = "display table table-bordered table-stripe" cellspacing="0" width ="100%" >
     <tr>
         <th>ID</th>
         <th>USUARIO</th>
         <th>EMAIL</th>
         <th>ESTADO</th>
         <th></th>
     </tr>
     <tbody>
     <?php
     foreach($usuarios as $row){
     ?>
        <tr>
             <td> <?php echo $row['id']?> </td>
             <td> <?php echo $row['username']?> </td>
             <td> <?php echo $row['email']?> </td>
             <td></td>
             <td></td>
         </tr>
         <?php
         }
         ?>
     </tbody>
 </table>

  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
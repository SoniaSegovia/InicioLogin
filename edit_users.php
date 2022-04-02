<?php
include('config.php');
include_once('class/usuarios.php');
$crud = new crud ($conn);
//validacion del boton actualizar  
if (isset($_POST['btn-update']) ){
 $id = $_GET['edit_id'];
 $username = $_POST['usuario'];
 $email = $_POST['email'];
}

$id = $_GET['edit_id'];
$username = $_POST['usuario'];
$email = $_POST['email'];


if ($crud->update($id, $username, $email)) {
    $msg = "<b> WOW, Actualizacion exitosa¡</b>";
}else {
    $msg = "<b> ERROR, Algo anda mal¡</b>";
}
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
    <title>USUARIOS</title>
</head>

<body>

    <div class="container"><br>
        <div class="row justify-content-center">
            <div class="col-6 p-5 bg-white shadow-lg rounded">
            <?php
            if (isset($msg)) {
              echo $msg;
            }
            ?>
                <h3>ACTUALIZAR USUARIO</h3>
                <hr>
                <form method="post" action="registro.php">
                    <div class="form-group">
                        <label for="usuario">Nombre del Usuario</label>
                        <input id="usuario" value ="<?php echo $username; ?>class="form-control" type="text" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" value ="<?php echo $email; ?>class="form-control" type="email" name="email">
                    </div><br>
                    <button class="btn btn-primary" name="btn-Update" type="submit">Actualizar</button>
                </form>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
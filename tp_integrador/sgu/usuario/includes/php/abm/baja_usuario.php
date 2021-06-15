<?php

include_once('../../../../includes/php/conexion.php');

$asistenteDB = new AsistenteSQL('sgu');
$idUsuario = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Borrar usuario</title>
</head>

<body>
    <?php
    include_once('../../../../includes/header.php');
    include_once('../../../../includes/cabecera_usuario.php');
    ?>
    <br>
    <div class="col">
        <div class="row is-center">
            <div class="card">
                <div class="col is-center">
                    <p class="material-icons" style="font-size: 150px;">person</p>
                </div>
                <?php

                if (!$asistenteDB->borrarUsuario($idUsuario)) {
                    echo 'Hubo un error al eliminar el usuario, por favor inténtelo nuevamente';
                } else {
                    echo 'Usuario eliminado correctamente.';
                }

                ?>
            </div>
        </div>
        <br>
        <div class="row is-center">
            <a class="is-center button" href="../../../listado_usuarios.php">Volver</a>
        </div>
    </div>

    </p>
    </div>
</body>

</html>
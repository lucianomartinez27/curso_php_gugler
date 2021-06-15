<?php

include_once('../../../../includes/php/conexion.php');

$asistenteDB;
if (!isset($_GET['id'])) {
    header('Location: ../../../listado_personas.php');
}else {
    $idPersona = $_GET['id'];
}

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

                if (!$asistenteDB->borrarPersona($idPersona)) {
                    echo 'Hubo un error al eliminar la persona.
                    <br>Posiblemente haya usuarios que dependan de ésta persona<br>
                    Soluciónelo e inténtelo nuevamente.';
                } else {
                    echo 'Usuario eliminado correctamente.';
                }

                ?>
            </div>
        </div>
        <br>
        <div class="row is-center">
            <a class="is-center button" href="../../../listado_personas.php">Volver</a>
        </div>
    </div>

    </p>
    </div>
</body>

</html>

<?php
$asistenteDB -> desconectarDB();
?>
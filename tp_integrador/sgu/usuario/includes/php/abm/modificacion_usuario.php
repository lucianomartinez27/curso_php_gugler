<?php
include_once('../../../../includes/php/conexion.php');

$idPersona = $_POST['person'];
$idTipoDeUsuario = $_POST['type_user'];
$habilitado = $_POST['enabled'];
$idUsuario = $_GET['id'];

if (!isset($_GET['id'])) {
    header('Location: ../../../listar_usuarios.php' . $idUsuario);
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

    <title>Modificar usuario</title>
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

                if ($asistenteDB->actualizarUsuario($idUsuario, $idPersona, $idTipoDeUsuario, $habilitado)) {
                    echo "Usuario modificado correctamente";
                } else {
                    echo "Hubo un problema al modificar el usuario. Por favor, intentelo nuevamente.";
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

<?php

$asistenteDB -> desconectarDB();
?>
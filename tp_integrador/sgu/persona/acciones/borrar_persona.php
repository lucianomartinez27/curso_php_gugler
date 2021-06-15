<?php
include_once('../includes/php/generadorHTMLPersonas.php');
if (!isset($_GET['id'])) {
    header('Location: ../../../listar_personas.php');
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
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Borrar Usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    include_once("../../includes/cabecera_usuario.php")
    ?>
    <br>
    <div class="col">
        <div class="row is-center">
            <div class="card">
                <div class="col is-center">
                    <p class="material-icons" style="font-size: 150px;">person</p>
                </div>
                <?php
                $generadorHTMLPersonas->generarTarjetaDeIdentificacionDePersona($_GET['id']);
                ?>
            </div>
        </div>
        <br>
        <div class="row is-center">
            <p>¿Está seguro de que desea borrar la persona?</p><br>
        </div>
        <div class="row is-center">
            <a class="is-center button" href="../listado_personas.php">Volver</a>
            <a class="is-center button bg-error text-white"
            href=<?php echo "../includes/php/abm/baja_persona.php?id=" . $idPersona; ?>>Borrar</a>
        </div>
    </div>
    <div class="bottom">
    <?php
    include_once('../../includes/footer.php');
    ?>
    </div>
</body>

</html>
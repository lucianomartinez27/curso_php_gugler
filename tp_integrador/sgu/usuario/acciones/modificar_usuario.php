<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
// verificamos que se haya pasado un id por GET, sino redirigimos
if (!isset($_GET['id'])) {
    header('Location: ./listado_usuarios.php' . $idUsuario);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- Aquí importo un framework de css muy sencillo -->
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col is-vertical-align">
                <div class="card">
                    <p>Estado actual:</p>
                    <?php
                    // Generador de HTML es una clase que se encarga de generar 
                    // contenido que va a ser utilizado en más de una oportunidad
                    $generadorHTMLUsuarios->generarTarjetaDeIdentificacionDeUsuario($_GET['id']);
                    ?>
                </div>
            </div>
            <div class="col">
                <fieldset id="form__input">
                    <legend>Modificar usuario</legend>
                    <form action=<?php echo "../includes/php/abm/modificacion_usuario.php?id=" . $_GET['id'] . " method='post'" ?>>

                        <label for="person">Identificación de persona:</label>
                        <select name="person" id="">
                            <?php
                            $generadorHTMLUsuarios->generarOpcionesDeSeleccionDePersonas();
                            ?>
                        </select>
                        <label for="type_user">Tipo usuario:</label>
                        <select name="type_user" id="">
                            <?php
                            $generadorHTMLUsuarios->generarOpcionesDeTipoDeUsuario()
                            ?>
                        </select>
                        <label for="enabled">Habilitado: </label>
                        <input type="radio" name="enabled" value="S" id="" required=true> SI
                        <input type="radio" name="enabled" value="N" id="" required=true> NO
                        <br>
                        <input type="reset" value="Limpiar" class="button error">
                        <input class="button success" type="submit" value="Modificar">

                    </form>
            </div>
        </div>
        </fieldset>
        <a class=" is-center button" href="../listado_usuarios.php">Volver</a>
    </div>
    <?php
    include_once("../../includes/footer.php");
    echo new MiFooter;
    ?>
</body>

</html>
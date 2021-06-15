<!DOCTYPE html>
<html lang="es">

<head>

    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>

<body>
    <?php
    include_once("../includes/header.php");
    include_once("../includes/cabecera_usuario.php")

    ?>


    <div class="is-center" id="admin-options">

        <div class="row">
            <div class="col tag">
                <div class="col text-center">
                    <p class="material-icons is-marginless" style="font-size: 150px;">groups</p>
                </div>
                <div class="col text-center">
                    <a href="../usuario/datos_personales.php" class="is-full-width" style="font-size: 20px;">Datos personales</a>
                </div>

            </div>

            <div class="col tag">
                <div class="col text-center">
                    <p class="material-icons is-marginless" style="font-size: 150px;">people_alt</p>
                </div>

                <div class="col text-center">
                    <a href="../usuario/datos_de_usuario.php" class="is-full-width" style="font-size: 20px;">Datos de Usuarios</a>
                </div>
            </div>


        </div>
    </div>


    <?php
    include_once("../includes/footer.php")
    ?>
</body>

</html>
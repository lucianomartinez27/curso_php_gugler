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
    include_once("../includes/header.php")
    ?>
    <div class="card">
        <div class="row">
            <div class="col-11">
                <div class="row tag">
                    Usuario: NombreUsuario
                </div>
            </div>
            <div class="col is-marginless">
                <div class="row">
                    <a href="/to-home">Inicio </a>
                </div>
                <div class="row">
                    <a class="text-error" href="exit">Salir</a>
                </div>
            </div>

        </div>


    </div>


    <div class="screen-center">


        <div class="row">
            <div class="col tag">
                <div class="col">
                    <p class="material-icons is-marginless" style="font-size: 150px;">groups</p>
                </div>
                <div class="col">
                    <a href="./agregar_usuario.php" class="is-center" style="font-size: 20px;">Usuarios</a>
                </div>

            </div>

            <div class="col tag">
                <div class="col">
                    <p class="material-icons is-marginless" style="font-size: 150px;">people_alt</p>
                </div>

                <div class="col">
                    <a href="./agregar_persona.php" class="is-center" style="font-size: 20px;">Personas</a>
                </div>
            </div>


        </div>
    </div>


    <?php
    include_once("../includes/footer.php")
    ?>
</body>

</html>
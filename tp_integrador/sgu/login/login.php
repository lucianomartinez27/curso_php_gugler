<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    include_once("../includes/header.php")
    ?>
    <div class="is-center">

        <fieldset class="is-center" id="form__input">
            <legend> Ingrese sus datos</legend>
                <form action="form_login.php" method="post">
                    
                    <p><label for="user">Usuario</label></p>
                    <input  type="text" name="user" id="user">
                    <p><label for="password ">Clave:</label> </p>
                    <input type="password" name="password" id="password "><br>
                    <input class="button secondary" type="button" value="Ingresar">
                </form>
            </fieldset>
    </div>
        <?php
        include_once("../includes/footer.php")
        ?>
        </body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar usuario</title>
</head>

<body>
    <?php
    include_once("../includes/header.php")
    ?>
    <fieldset class="screen-center" id="form__input">
        <legend>Agregar usuario</legend>
        <form action="form_login.php" method="post">

            <label for="person">Identificación de persona:</label>
            <select name="person" id="">
                <option value="some_person">Persona de ejemplo</option>
            </select>
            <label for="type_user">Tipo usuario:</label>
            <select name="type_user" id="">
                <option value="admin">Admin</option>
                <option value="user">Usuario</option>
            </select>
            <label for="user">Nombre de usuario:</label>
            <input type="text" name="user" id="">

            <label for="password ">Clave:</label>
            <input type="password" name="password" id="password "><br>

            <label for="enabled">Habilitado: </label>
            <input type="radio" name="enabled" value="S" id=""> SI
            <input type="radio" name="enabled" value="N" id=""> NO
            <br>
            <input type="reset" value="Limpiar" class="button error">
                <input class="button success" type="button" value="Agregar">

        </form>
    </fieldset>
    <?php
    include_once("../includes/footer.php")
    ?>
</body>

</html>
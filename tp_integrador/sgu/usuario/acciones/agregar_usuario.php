
<?php
include_once('../includes/php/generadorHTMLUsuarios.php');
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
    <title>Agregar usuario</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php");
    ?>

    <div class="container">
    
            <fieldset class="is-center" id="form__input">
                <legend>Agregar usuario</legend>
                <form action="../includes/php/abm/alta_usuario.php" method="post">
        
                    <label for="person">Identificación de persona:</label>
                    <select name="person" id="">
                        <?php
                        $generadorHTMLUsuarios -> generarOpcionesDeSeleccionDePersonas();
                        ?>
                    </select>
                    <label for="type_user">Tipo usuario:</label>
                    <select name="type_user" id="">
                    <?php
                    $generadorHTMLUsuarios -> generarOpcionesDeTipoDeUsuario()
                    ?>
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
                    <input class="button success" type="submit" value="Agregar">
        
                </form>
            </fieldset>
        <a class=" is-center button" href="../../aplicaciones/administrador.php">Volver</a>
    </div>
    <?php
    include_once("../../includes/footer.php")
    ?>
</body>

</html>


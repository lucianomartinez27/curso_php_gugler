<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar persona</title>
</head>

<body>
    <?php
    include_once("../../includes/header.php")
    ?>
    <div class="container">
        <fieldset class="is-center" id="form__input">
            <legend> Agregar persona</legend>
            <form action="../includes/php/abm/alta_persona.php" method="post">

                <label for="type_doc">Tipo documento</label>
                <select name="type_doc" id="">
                    <option value="1">DNI</option>
                    <option value="2">LIBRETA CIVICA</option>
                    <option value="3">LIBRETA ENROLAMIENTO</option>
                </select>
                <label for="document_number">Numero de documento:</label>
                <input type="text" name="document_number" id="" class="is-marginless" required=true>
                <label for="lastname ">Apellido:</label>
                <input type="text" name="lastname" id="" required=true>
                <label for="firstname ">Nombre:</label>
                <input type="text" name="firstname" id="" required=true>
                <label for="birth_date ">Fecha de nacimiento:</label>
                <input type="date" name="birth_date" id="" required=true>

                <label for="gender">Sexo:</label> <br>
                Femenino: <input type="radio" name="gender" value="F" required=true>
                Masculino: <input type="radio" name="gender" value="M" required=true>
                <br>
                <label for="phone">Teléfono:</label>
                <input type="text" name="phone" id=""required=true>
                <label for="movil">Teléfono móvil:</label>
                <input type="text" name="movil" id="" required=true>
                <label for="email">Correo electrónico:</label>
                <input type="text" name="email" id="" required=true>
                <label for="address">Domicilio:</label>
                <input type="text" name="address" id="" required=true>
                <label for="city">Localidad:</label>
                <input type="text" name="city" id="" required=true>
                <label for="province">Provincia:</label>
                <input type="text" name="province" id="" required=true>
                <label for="country">País:</label>
                <input type="text" name="country" id="" required=true>
                <input type="reset" value="Limpiar" class="button error">
                <input class="button success" type="submit" value="Agregar">
            </form>
        </fieldset>
        <a class="is-center button" href="../listado_personas.php">Volver</a>
    </div>
    <br>
    <div class="bottom">
        <?php
        include_once("../../includes/footer.php")
        ?>

    </div>

</body>


</html>
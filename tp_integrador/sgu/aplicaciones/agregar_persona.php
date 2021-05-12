<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar persona</title>
</head>

<body>
    <?php
    include_once("../includes/header.php")
    ?>
    <fieldset class="is-left " id="form__input">
        <legend> Agregar persona</legend>
            <form action="form_login.php" method="post">
                
                <label for="type_doc" >Tipo documento</label>
                <select name="type_doc" id="">
                    <option value="DNI">DNI</option>
                    <option value="CARNET">CARNET</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                </select>
                <label for="document_number " >Numero de documento:</label> 
                <input type="text" name="document_number" id="" class="is-marginless">
                <label for="lastname ">Apellido:</label> 
                <input type="text" name="lastname" id="">
                <label for="firstname ">Nombre:</label> 
                <input type="text" name="firstname" id="">
                <label for="birth_date ">Fecha de nacimiento:</label> 
                <input type="date" name="birth_date" id="">
                
                <label for="sex">Sexo:</label> <br>
                Femenino: <input type="radio" name="sex" value="F">
                Masculino: <input type="radio" name="sex" value="f">
                <br>
                <label for="phone">Teléfono:</label> 
                <input type="text" name="phone" id="">
                <label for="movil">Teléfono móvil:</label>
                <input type="text" name="movil" id="">
                <label for="email">Correo electrónico:</label> 
                <input type="text" name="email" id="">
                <label for="address">Domicilio:</label> 
                <input type="text" name="address" id="">
                <label for="city">Localidad:</label> 
                <input type="text" name="city" id="">
                <label for="province">Provincia:</label> 
                <input type="text" name="province" id="">
                <label for="country">País:</label> 
                <input type="text" name="country" id="">
                <input type="reset" value="Limpiar" class="button error">
                <input class="button success" type="button" value="Agregar">
            </form>
        </fieldset>
        
        <?php
        include_once("../includes/footer.php")
        
        ?>
    </body>
        

</html>
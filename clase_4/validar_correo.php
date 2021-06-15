<?php


function validarCorreo($correo){
    if (str_contains($correo, "@")){
        return trim($correo);
    }
    throw new Exception("Correo inválido");
}

?>

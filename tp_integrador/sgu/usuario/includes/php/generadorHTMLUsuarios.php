<?php

include_once(dirname(__FILE__).'/../../../includes/php/conexion.php');

// Clase que nos ayuda a reutilizar codigo HTML para la vista de usuarios

class GeneradorHTMLUsuarios
{
    private $asistenteDB;

    public function __construct()
    {
        $this->asistenteDB = new AsistenteSQL('sgu');
    }
    
    public function generarOpcionesDeTipoDeUsuario()
    {
        $tiposUsuarioQuery = $this->asistenteDB->obtenerTiposDeUsuarios();
        foreach ($tiposUsuarioQuery as $tipoUsuario) {
            echo "<option value=" . $tipoUsuario->idTipoUsuario . ">" . $tipoUsuario->descripcion . "</option>\n";
        }
    }

    public function generarOpcionesDeSeleccionDePersonas()
    {
        $query = $this->asistenteDB->obtenerDatosDePersonas();

        foreach ($query as $columna) {
            echo "<option value=" . $columna->idPersona . ">" . $columna->apellido . " " . $columna->nombres . "</option>\n";
        }
    }

    public function generarTarjetaDeIdentificacionDeUsuario($idUsuario)
    {

        $consulta = $this->asistenteDB->obtenerDatosDeUsuarioPorId($idUsuario);

        foreach ($consulta as $usuario) {
            echo "Identificado con: " . $usuario->nombres . " " . $usuario->apellido . "<br>";
            echo "Nombre de usuario: " . $usuario->username . "<br>";
            echo "Tipo: " . $usuario->descripcion . "<br>";
            echo "Habilitado: " . $usuario->habilitado . "<br>";
        }
    }


    public function generarListaDeUsuarios()
    {
        $usuarios = $this -> asistenteDB -> obtenerDatosDeUsuarios();
        foreach ($usuarios as $usuario) {
            echo "
            <hr class='is-marginless is-paddingless'>
            <div class='row is-full-width'>
            <div class='col-10'>
                <div class='row'>
                    <div class='col'>" . $usuario -> username . "</div>
                    <div class='col'>" . $usuario -> descripcion . "</div>
                    <div class='col'>" . $usuario -> habilitado . "</div>
                </div>
                
            </div>
            <div class='col'>
            <div class='row'>
                <div class='col'><a href='./acciones/ver_usuario.php?id=" . $usuario -> idUsuario . "'>Ver</a></div>
                <div class='col'><a href='./acciones/modificar_usuario.php?id=" . $usuario -> idUsuario . "'>Modificar</a></div>
                <div class='col'><a href='./acciones/borrar_usuario.php?id=" . $usuario -> idUsuario . "'>Borrar</a></div>
            </div>
            </div>
            </div>
            
            ";
        }

    }

}


$generadorHTMLUsuarios = new GeneradorHTMLUsuarios();

<?php

include_once(dirname(__FILE__) . '/../../../includes/php/conexion.php');

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
        $opciones = array();
        foreach ($tiposUsuarioQuery as $tipoUsuario) {
            $opciones[] =  new Opcion($tipoUsuario->idTipoUsuario, $tipoUsuario->descripcion);
        }
        return $opciones;
    }

    public function generarOpcionesDeSeleccionDePersonas()
    {
        $query = $this->asistenteDB->obtenerDatosDePersonas();

        $opciones = array();
        foreach ($query as $columna) {
            $opciones[] =  new Opcion($columna->idPersona, $columna->apellido . " " . $columna->nombres);
        }
        return $opciones;
    }

    public function generarTarjetaDeIdentificacionDeUsuario($idUsuario)
    {

        $consulta = $this->asistenteDB->obtenerDatosDeUsuarioPorId($idUsuario);
        $tarjeta = array();
        foreach ($consulta as $usuario) {
            $tarjeta[] =  new Texto("Identificado con: " . $usuario->nombres . " " . $usuario->apellido);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Nombre de usuario: " . $usuario->username);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Tipo: " . $usuario->descripcion);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Habilitado: " . $usuario->habilitado);
            $tarjeta[] = new SaltoLinea();
        }
        return $tarjeta;
    }


    public function generarListaDeUsuarios()
    {
        $usuarios = $this->asistenteDB->obtenerDatosDeUsuarios();
        foreach ($usuarios as $usuario) {

            echo "<hr class='is-marginless is-paddingless'>";
            echo new Fila([
                new ColumnaExpandida([
                    new Fila([
                        new Columna([new Texto($usuario->username)]),
                        new Columna([new Texto($usuario->descripcion)]),
                        new Columna([new Texto($usuario->habilitado)]),

                    ])
                ], 10),
                new Columna([
                    new Fila([
                        new Columna([new Link("./acciones/ver_usuario.php?id=" . $usuario->idUsuario, 'Ver')]),
                        new Columna([new Link("./acciones/modificar_usuario.php?id=" . $usuario->idUsuario, 'Modificar')]),
                        new Columna([new Link("./acciones/borrar_usuario.php?id=" . $usuario->idUsuario, 'Borrar')]),

                    ])
                ])
            ]);
        }
    }
}


$generadorHTMLUsuarios = new GeneradorHTMLUsuarios();

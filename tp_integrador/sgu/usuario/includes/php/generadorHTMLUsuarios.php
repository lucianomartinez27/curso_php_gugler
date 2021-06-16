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
        foreach ($tiposUsuarioQuery as $tipoUsuario) {
            echo new Opcion($tipoUsuario->idTipoUsuario, $tipoUsuario->descripcion);
        }
    }

    public function generarOpcionesDeSeleccionDePersonas()
    {
        $query = $this->asistenteDB->obtenerDatosDePersonas();

        foreach ($query as $columna) {
            echo new Opcion($columna->idPersona, $columna->apellido . " " . $columna->nombres);
        }
    }

    public function generarTarjetaDeIdentificacionDeUsuario($idUsuario)
    {

        $consulta = $this->asistenteDB->obtenerDatosDeUsuarioPorId($idUsuario);

        foreach ($consulta as $usuario) {
            echo "Identificado con: " . $usuario->nombres . " " . $usuario->apellido . new SaltoLinea();
            echo "Nombre de usuario: " . $usuario->username . new SaltoLinea();
            echo "Tipo: " . $usuario->descripcion . new SaltoLinea();
            echo "Habilitado: " . $usuario->habilitado . new SaltoLinea();
        }
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

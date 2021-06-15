<?php
// Aquí utilizo la función dirname ya que tuve problemas con el relative path
include_once(dirname(__FILE__).'/../../../includes/php/conexion.php');

// Clase que nos ayuda a reutilizar codigo HTML para la vista de personas

class GeneradorHTMLPersonas
{
    private $asistenteDB;

    public function __construct()
    {
        $this->asistenteDB = new AsistenteSQL('sgu');
    }


    public function generarOpcionesDeSeleccionDePersonas()
    {
        $query = $this->asistenteDB->obtenerDatosDePersonas();

        foreach ($query as $columna) {
            echo "<option value=" . $columna->idPersona . ">" . $columna->apellido . " " . $columna->nombres . "</option>\n";
        }
    }

    public function generarTarjetaDeIdentificacionDePersona($idPersona)
    {

        $personas = $this->asistenteDB->obtenerDatosDePersonaPorId($idPersona);

        foreach ($personas as $persona) {
            echo "Nombre y apellido: " . $persona->nombres . " " . $persona->apellido . "<br>";
            echo "Sexo: " . $persona->sexo . "<br>";
            echo "Email: " . $persona->email . "<br>";
            echo "Fecha nacimiento: " . $persona->fechaNacimiento . "<br>";
            echo "Telefono: " . $persona->telefono . "<br>";
            echo "Movil: " . $persona->telefonoMovil . "<br>";
            echo "Domicilio: " . $persona->domicilio . "<br>";
            echo "Localidad: " . $persona->localidad . "<br>";
            echo "Provincia: " . $persona->pais . "<br>";
            echo "Pais: " . $persona->email . "<br>";
            
            echo "Documento: " . $persona->numeroDocumento . "<br>";
        }
    }


    public function generarListaDePersonas()
    {
        $personas = $this -> asistenteDB -> obtenerDatosDePersonas();
        foreach ($personas as $persona) {
            echo "
            <hr class='is-marginless is-paddingless'>
            <div class='row is-full-width'>
            <div class='col-10'>
                <div class='row'>
                    <div class='col'>" . $persona -> nombres . "</div>
                    <div class='col'>" . $persona -> apellido . "</div>
                    <div class='col'>" . $persona -> sexo . "</div>
                    <div class='col'>" . $persona -> numeroDocumento . "</div>
                    <div class='col'>" . $persona -> email . "</div>
                </div>
                
            </div>
            <div class='col'>
            <div class='row'>
                <div class='col'><a href='./acciones/ver_persona.php?id=" . $persona -> idPersona . "'>Ver</a></div>
                <div class='col'><a href='./acciones/modificar_persona.php?id=" . $persona -> idPersona . "'>Modificar</a></div>
                <div class='col'><a href='./acciones/borrar_persona.php?id=" . $persona -> idPersona . "'>Borrar</a></div>
            </div>
            </div>
            </div>
            
            ";
        }

    }

}


$generadorHTMLPersonas = new GeneradorHTMLPersonas();

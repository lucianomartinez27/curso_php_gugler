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
        $personas = $this->asistenteDB->obtenerDatosDePersonas();

        foreach ($personas as $persona) {
           echo new Opcion($persona->idPersona, $persona->apellido . " " . $persona->nombres);
        }
    }

    public function generarTarjetaDeIdentificacionDePersona($idPersona)
    {

        $personas = $this->asistenteDB->obtenerDatosDePersonaPorId($idPersona);
        $tarjeta = array();
        foreach ($personas as $persona) {
            $tarjeta[] = new Texto("Nombre y apellido: " . $persona->nombres . " " . $persona->apellido);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Sexo: " . $persona->sexo );
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Email: " . $persona->email);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Fecha nacimiento: " . $persona->fechaNacimiento);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Telefono: " . $persona->telefono);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Movil: " . $persona->telefonoMovil);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Domicilio: " . $persona->domicilio );
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Localidad: " . $persona->localidad );
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Provincia: " . $persona->pais);
            $tarjeta[] = new SaltoLinea();
            $tarjeta[] = new Texto("Pais: " . $persona->email );
            $tarjeta[] = new SaltoLinea();            
            $tarjeta[] = new Texto("Documento: " . $persona->numeroDocumento );
            $tarjeta[]= new SaltoLinea();
        }
        return $tarjeta;
    }


    public function generarListaDePersonas()
    {
        $personas = $this -> asistenteDB -> obtenerDatosDePersonas();
        foreach ($personas as $persona) {
            echo new Fila([
                    new ColumnaExpandida([
                        new Fila([
                            new Columna([new Texto($persona -> nombres)]),
                            new Columna([new Texto($persona -> apellido)]),
                            new Columna([new Texto($persona -> sexo)]),
                            new Columna([new Texto($persona -> numeroDocumento)]),
                            new Columna([new Texto($persona -> email)])]),], 10),
                    new Columna([
                        new Fila([
                            new Columna([new Link("./acciones/ver_persona.php?id=" . $persona -> idPersona . "'", 'Ver')]),
                            new Columna([new Link("./acciones/modificar_persona.php?id=" . $persona -> idPersona . "'", 'Modificar')]),
                            new Columna([new Link("./acciones/borrar_persona.php?id=" . $persona -> idPersona . "'", 'Borrar')])

            ])]) ]);

            
        }

    }

}


$generadorHTMLPersonas = new GeneradorHTMLPersonas();

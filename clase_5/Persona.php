<?php
/*2. - Realice un script de nombre Persona.php que defina y use una clase (Persona) con
los siguientes atributos y métodos:
Atributos
(privado) tipoDocumento
(privado) numeroDocumento
(privado) apellidos
(privado) nombres
(privado) domicilio
(privado) telefono
(privado) telefonoTrabajo
(privado) telefonoMovil
(privado) correoElectronico
Métodos
(público) __construct()
(público) cambiarDomicilio()
(público) cambiarNumeroTelefono()
(público) cambiarNumeroTelefonoMovil()
(público) cambiarNumeroTelefonoTrabajo()
(público) cambiarCorreoElectronico()
Dentro del mismo script cree un objeto que use todos los métodos que se definieron.*/
class Persona {

    private $_tipoDocumento;
    private $_numeroDocumento;
    private $_apellidos;
    private $_nombres;
    private $_domicilio;
    private $_telefono;
    private $_telefonoTrabajo;
    private $_telefonoMovil;
    private $_correoElectronico;
    private $_hermanos = array();

    private function __construct(){
            $_tipoDocumento = 'DNI';
            $_numeroDocumento = 00000000;
            $_apellidos = 'Martínez';
            $_nombres = 'Luciano';
            $_domicilio = 'Calle Falsa 123';
            $_telefono = 3434000000;
            $_telefonoTrabajo = 0000000000;
            $_telefonoMovil = 3434000000;
            $_correoElectronico = 'luciano@gmail.com';
    }


    public function cambiarDomicilio($nuevoDomicilio){
            $_domicilio = $nuevoDomicilio;
    }

    public function cambiarNumeroTelefono($nuevoTelefono){
        $_telefono  = $nuevoTelefono;
    }

    public function cambiarNumeroTelefonoMovil($nuevoTelefonoMovil){
        $_telefonoMovil= $nuevoTelefonoMovil;
        
    }

    public function cambiarNumeroTelefonoTrabajo($nuevoTelefonoTrabajo){
        $_telefonoTrabajo = $nuevoTelefonoTrabajo;
        
    }

    public function cambiarCorreoElectronico($nuevoCorreoElectronico){
        $_correoElectronico = $nuevoCorreoElectronico;
        
    }

    public function agregarHermano(Persona $hermano){
        $_hermanos[] = $hermano;
    }

    public function __toString()
    {
        return $this -> _apellidos." ".$this -> _nombres;
    }

    
        
    
}
$persona = new Persona();

$persona -> cambiarDomicilio("Avenida Siempre Viva");
$persona -> cambiarNumeroTelefono(3434343434);
$persona -> cambiarNumeroTelefonoMovil(343434341);
$persona -> cambiarNumeroTelefonoTrabajo(0303030);
$persona -> cambiarCorreoElectronico('lucianomartinez27@gmail.com');

$hermano = new Persona();

$persona -> agregarHermano($hermano);
?>
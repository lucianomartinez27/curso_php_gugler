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

    private $tipoDocumento;
    private $numeroDocumento;
    private $apellidos;
    private $nombres;
    private $domicilio;
    private $telefono;
    private $telefonoTrabajo;
    private $telefonoMovil;
    private $correoElectronico;

    public function __construct(){
            $tipoDocumento = 'DNI';
            $numeroDocumento = 00000000;
            $apellidos = 'Martínez';
            $nombres = 'Luciano';
            $domicilio = 'Calle Falsa 123';
            $telefono = 3434000000;
            $telefonoTrabajo = 0000000000;
            $telefonoMovil = 3434000000;
            $correoElectronico = 'luciano@gmail.com';
    }


    public function cambiarDomicilio($nuevoDomicilio){
            $domicilio = $nuevoDomicilio;
    }

    public function cambiarNumeroTelefono($nuevoTelefono){
        $telefono  = $nuevoTelefono;
    }

    public function cambiarNumeroTelefonoMovil($nuevoTelefonoMovil){
        $telefonoMovil= $nuevoTelefonoMovil;
        
    }

    public function cambiarNumeroTelefonoTrabajo($nuevoTelefonoTrabajo){
        $telefonoTrabajo = $nuevoTelefonoTrabajo;
        
    }

    public function cambiarCorreoElectronico($nuevoCorreoElectronico){
        $correoElectronico = $nuevoCorreoElectronico;
        
    }

        
    
}
$persona = new Persona;

$persona -> cambiarDomicilio("Avenida Siempre Viva");
$persona -> cambiarNumeroTelefono(3434343434);
$persona -> cambiarNumeroTelefonoMovil(343434341);
$persona -> cambiarNumeroTelefonoTrabajo(0303030);
$persona -> cambiarCorreoElectronico('lucianomartinez27@gmail.com');

?>
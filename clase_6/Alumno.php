<?php

class Alumno {

    private $_codigo;
    private $_apellidos;
    private $_nombres;
    private $_numeroDocumento;
    private $_tipoDocumento;
    private $_tipoAlumno;

    const ALUMNO_LIBRE = "L";
    const ALUMNO_REGULAR = 'R';
    const ALUMNO_PASIVO = 'P';
    const ALUMNO_ACTIVO = 'A';

    public function __construct($codigo, $apellido, $nombres, $numeroDocumento, $tipoDocumento, $tipoAlumno=self::ALUMNO_ACTIVO){
        $this -> _codigo = $codigo;
        $this -> _apellidos = $apellido;
        $this -> _nombres = $nombres;
        $this -> _numeroDocumento = $numeroDocumento;
        $this -> _tipoDocumento = $tipoDocumento;
        $this -> _tipoAlumno = $tipoAlumno;
    }

    public function setCodigo($nuevoCodigo){
        $this -> _codigo = $nuevoCodigo;
    }

    public function getCodigo(){
        return $this -> _codigo;
    }

    public function setApellido($nuevoApellido){
        $this -> _apellidos = $nuevoApellido;
    }

    public function getApellidos(){
        return $this -> _apellidos;
    }

    public function setNombres($nuevosNombres){
        $this -> _nombres = $nuevosNombres;
    }

    public function getNombres(){
        return $this -> _nombres;
    }

    public function setNumeroDocumento($nuevoNumeroDocumento){
        $this -> _numeroDocumento = $nuevoNumeroDocumento;
    }

    public function getNumeroDocumento(){
        return $this -> _numeroDocumento;
    }

    public function setTipoDocumento($nuevoTipoDocumento){
        $this -> _tipoDocumento = $nuevoTipoDocumento;
    }

    public function getTipoDocumento(){
        return $this -> _tipoDocumento;
    }

    public function setTipoAlumno($nuevoTipoAlumno){
        $this -> _tipoAlumno = $nuevoTipoAlumno;
    }

    public function getTipoAlumno(){
        return $this -> _tipoAlumno;
    }

    public function __toString()
    {
        return "Alumno: ".$this -> _nombres." ".$this -> _apellidos;
    }





    
    
        
    
}


?>
<?php

    class Comision{
    
    private $_codigo;
    private $_lugar;
    private $_dia;
    private $_horaInicio;
    private $_horaFin;
    private $_cupo;
    private $_alumnos;

    public function __construct($codigo, $lugar, $dia, $horaInicio, $horaFin, $cupo, $alumnos)
    {
        $this -> _codigo = $codigo;
        $this -> _lugar = $lugar;
        $this -> _dia = $dia;
        $this -> _horaInicio = $horaInicio;
        $this -> _horaFin = $horaFin;
        $this -> _cupo = $cupo;
        $this -> _alumnos = $alumnos;
    }

    public function setCodigo($nuevoCodigo){
        $this -> _codigo = $nuevoCodigo;
    }

    public function getCodigo(){
        return $this -> _codigo;
    }

    public function setLugar($nuevoLugar){
        $this -> _ = $nuevoLugar;
    }

    public function getLugar(){
        return $this -> _lugar;
    }
    public function setDia($nuevoDia){
        $this -> _ = $nuevoDia;
    }

    public function getDia(){
        return $this -> _dia;
    }

    public function setHoraInicio($nuevoHoraInicio){
        $this -> _horaInicio = $nuevoHoraInicio;
    }

    public function getHoraInicio(){
        return $this -> _horaInicio;
    }
    public function setHoraFin($nuevoHoraFin){
        $this -> _horaFin = $nuevoHoraFin;
    }

    public function getHoraFin(){
        return $this -> _horaFin;
    }

    public function setCupo($nuevoCupo){
        $this -> _cupo = $nuevoCupo;
    }

    public function getCupo(){
        return $this -> _cupo;
    }

    public function setAlumnos($nuevoAlumnos){
        $this -> _alumnos = $nuevoAlumnos;
    }

    public function getAlumnos(){
        return $this -> _alumnos;
    }

    }

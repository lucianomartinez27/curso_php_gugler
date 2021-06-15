<?php 

class Mate {
    private $_cebadasRestantes;
    private $_estado = 'vacio';

    public function __construct($cebadas){
        $this -> _cebadasRestantes = $cebadas;
    }
    
    public function cebar(){
        if ($this -> _estado == 'lleno'){
            echo "Cuidado, te quemaste!";
        }else{
            $this -> _estado = "lleno";
        }
    }

    public function beber(){
        if ($this -> _estado == 'vacio'){
            echo "No puedes tomar de un mate vacio";
        }else {
        if ($this -> _cebadasRestantes > 0){
            $this -> _cebadasRestantes--;
            echo "Bebiendo...";
        }else{
            echo "El mate ya está lavado.";
        }
        $this -> _estado = "vacio";
    }
        
    }
    public function __toString()
    {
        if ($this -> _cebadasRestantes > 0){
            return "El mate todavía se puede utilizar";
        }
        return "Deberías acomodar el mate.";
    }

    public function arreglar($cebadasAdicionales){
        $this -> _cebadasRestantes += $cebadasAdicionales;
    }
}

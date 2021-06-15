<?php

class Mascota {

    private $_nombre;
    private $color;

    public function tocar($lugar){
        switch ($lugar) {
            case 'cabeza':
                echo "Me tocaron la cabeza";
                break;
            case 'cola':
                echo  "Me tocaron la cola";
                break;
            default:
                echo "Me tocaron algún lugar x";
                break;
        }
    }

}

?>
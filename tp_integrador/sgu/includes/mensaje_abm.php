<?php
include_once 'GeneradorHTML.php';

class MensajeAbm extends Division
{
    public function __construct($mensaje, $link_volver)
    {
        parent::__construct();
        $this->agregar_hijo(new SaltoLinea());
        $this->agregar_hijo(
            new Centrado([
                new Fila([
                    new Tarjeta([
                        new Columna([new Centrado([new MaterialIcons([new Parrafo([new Texto('person')])])])]),
                        new Fila([
                            new Parrafo([
                                $mensaje
                            ])
                        ])
                    ])
                ])
            ])

        );
        $this -> agregar_hijo(new Padding(1));
        $this->agregar_hijo(
            new Centrado([new Boton($link_volver, 'Volver')])
        );
    }
}

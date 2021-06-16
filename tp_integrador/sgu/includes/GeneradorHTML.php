<?php

class EtiquetaHTML
{
    protected $_hijos = array();
    private $_atributos = array();
    private $_etiqueta;

    public function __construct($etiqueta, $hijos = array())
    {
        $this->_hijos = $hijos;
        $this->_etiqueta = $etiqueta;
    }

    public function agregar_atributo($atributo, $valor)
    {
        empty($this->_atributos[$atributo]) ?   $this->_atributos[$atributo] =  array($valor) :  $this->_atributos[$atributo][] = $valor;
    }
    protected function etiqueta_apertura()
    {
        return '<' . $this->_etiqueta . $this->dibujar_atributos() . '>';
    }
    protected function etiqueta_cierre()
    {
        return  '</' . $this->_etiqueta . '>';
    }
    // Dibuja los atributo, por ejemplo, class, id, value, etc
    protected function dibujar_atributos()
    {
        $dibujo_atributo = ' ';
        foreach ($this->_atributos as $atributo => $valores) {
            $dibujo_atributo .= $atributo . '="';
            if (sizeof($valores) == 1) {
                $dibujo_atributo .= $valores[0];
            } else {
                foreach ($valores as $indice => $valor) {
                    $dibujo_atributo .= $valor . ' ';
                }
            }
            $dibujo_atributo .= '"';
        }

        return $dibujo_atributo;
    }

    // Construye todo el HTML, para lo que llama a construir el html de sus hijos, que a su vez llaman a sus hijos, etc.
    private function construir()
    {
        $contenido = $this->etiqueta_apertura();
        foreach ($this->_hijos as $index => $hijo) {
            $contenido .= $hijo->construir();
        }
        $contenido .= $this->etiqueta_cierre();
        return $contenido;
    }



    public function agregar_clases($clases = array())
    {
        foreach ($clases as $key => $clase) {
            $this->_atributos['class'][] = $clase;
            return $this;
        }
    }
    public function agregar_clase($clase = '')
    {
        $this->_atributos['class'][] = $clase;
        return $this;
    }
    public function agregar_hijo($hijo)
    {
        $this->_hijos[] = $hijo;
    }

    public function agregar_hijos($hijos)
    {
        $this->_hijos = array_merge($this->_hijos, $hijos);
    }

    // directamente haciendo un echo al objeto ya se imprime por pantalla el echo
    public function __toString()
    {
        return $this->construir();
    }
}

class Texto
{
    private $_contenido;
    public function __construct($contenido)
    {
        $this->_contenido = $contenido;
    }

    public function construir()
    {
        return $this->_contenido;
    }

    public function __toString()
    {
        return $this->construir();
    }

    public function agregar_clase($_)
    {
    }
}


class Select extends EtiquetaHTML
{

    public function __construct($nombre = '', $opciones)
    {
        parent::__construct('select', $opciones);
        $this->agregar_atributo('name', $nombre);
    }

    public function agregar_opcion($valor, $texto)
    {
        $this->agregar_hijo(new Opcion($valor, $texto));
    }
}

class Opcion extends EtiquetaHTML
{
    public function __construct($valor, $texto)
    {
        parent::__construct('option');
        $this->agregar_atributo('value', $valor);
        $this->agregar_hijo(new Texto($texto));
    }
}

class Link extends EtiquetaHTML
{
    public function __construct($link, $texto = '')
    {
        parent::__construct('a', [new Texto($texto)]);
        $this->agregar_atributo('href', $link);
    }
}

class Division extends EtiquetaHTML
{
    public function __construct($hijos = array())
    {
        parent::__construct('div', $hijos);
    }
}



class Tarjeta extends Division
{
    public function __construct($hijos = array())
    {
        parent::__construct($hijos);
        $this->agregar_clase('card');
    }
}

class Columna extends Division
{
    public function __construct($hijos = array())
    {
        parent::__construct($hijos);
        $this->agregar_clase('col');
    }
}

class Fila extends Division
{
    public function __construct($hijos = array())
    {
        parent::__construct($hijos);
        $this->agregar_clase('row');
    }
}

class ColumnaExpandida extends Division
{
    public function __construct($hijos = array(), $expansion = 2)
    {
        parent::__construct($hijos);

        $this->agregar_clase('col-' . $expansion);
    }
}

class ExpandirFila extends Division
{
    public function __construct($hijos, $expansion)
    {
        parent::__construct($hijos);

        $this->agregar_clase('row-' . $expansion);
    }
}

class Tag extends Division
{
    public function __construct($hijos = array())
    {
        parent::__construct($hijos);
        $this->agregar_clase('tag');
    }
}

class Footer extends EtiquetaHTML
{
    public function __construct($hijos = array())
    {
        parent::__construct('footer', $hijos);
    }
}

class Parrafo extends EtiquetaHTML
{
    public function __construct($hijos = array())
    {
        parent::__construct('p', $hijos);
    }
}

class Negrita extends EtiquetaHTML
{
    public function __construct($hijos = array())
    {
        parent::__construct('b', $hijos);
    }
}

class Header extends EtiquetaHTML
{
    public function __construct($hijos = array())
    {
        parent::__construct('header', $hijos);
    }
}

class H extends EtiquetaHTML
{
    public function __construct($hijos = array(), $nivel = 1)
    {
        parent::__construct('h' . $nivel, $hijos);
    }
}

class SaltoLinea extends EtiquetaHTML
{
    public function __construct()
    {
        parent::__construct('br');
    }
    protected function etiqueta_cierre()
    {
        return '';
    }
}
class Centrado extends Division
{
    public function __construct($hijos)
    {
        parent::__construct($hijos);
        $this->agregar_clase('is-center');
    }
}

class MaterialIcons extends Division
{
    public function __construct($hijos)
    {
        parent::__construct($hijos);
        $this->agregar_clase('material-icons');
    }
}

class Boton extends Link
{
    public function __construct($link, $texto)
    {
        parent::__construct($link, $texto);
        $this->agregar_clase('button');
    }
}

class Legend extends EtiquetaHTML
{
    public function __construct($texto)
    {
        parent::__construct('legend');
        $this->agregar_hijo(new Texto($texto));
    }
}

class Fieldset extends EtiquetaHTML
{
    public function __construct($hijos)
    {
        parent::__construct('fieldset', $hijos);
    }
}

class Form extends EtiquetaHTML
{
    public function __construct($hijos, $accion, $metodo = 'POST')
    {
        parent::__construct('form', $hijos);
        $this->agregar_atributo('action', $accion);
        $this->agregar_atributo('method', $metodo);
    }
}

class Label extends EtiquetaHTML
{
    public function __construct($for, $texto)
    {
        parent::__construct('label');
        $this->agregar_atributo('for', $for);
        $this->agregar_hijo(new Texto($texto));
    }
}

class Input extends EtiquetaHTML
{
    public function __construct($nombre ='', $id='', $tipo='', $valor='')
    {
        parent::__construct('input');
        empty($nombre) ? : $this->agregar_atributo('name', $nombre);
        empty($id) ? : $this->agregar_atributo('id', $id);
        empty($tipo) ? : $this->agregar_atributo('type', $tipo);
        empty($valor) ? : $this->agregar_atributo('value', $valor);

    }
}

class InputText extends Input
{
    public function __construct($nombre, $id = '')
    {
        parent::__construct($nombre, $id);
        $this->agregar_atributo('type', 'text');
    }
}
class InputPassword extends Input
{
    public function __construct($nombre, $id='')
    {
        parent::__construct($nombre, $id);
        $this->agregar_atributo('type', 'password');
    }
}

class InputBoton extends Input
{
    public function __construct($valor)
    {
        parent::__construct();
        $this->agregar_atributo('type', 'button');
        $this->agregar_atributo('value', $valor);
        $this->agregar_clases(['button', 'secondary']);
    }
}

class InputFecha extends Input
{
    public function __construct()
    {
        parent::__construct();
        $this->agregar_atributo('type', 'date');
    }
}

class InputRadio extends Input
{
    public function __construct($valor, $nombre)
    {
        parent::__construct();
        $this->agregar_atributo('type', 'radio');
        $this->agregar_atributo('value', $valor);
        $this->agregar_atributo('name', $nombre);
    }
}

class Padding extends Division
{
    public function __construct($porcentaje)
    {
        parent::__construct();
        $this->agregar_atributo('style', 'padding:' . $porcentaje . '%;');
    }
}

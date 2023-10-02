<?php
class Calculadora
{
    public $a;
    public $b;
    function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;

    }
    function sumar()
    {
        return $this->a+$this->b;
    }
    function restar()
    {
        return $this->a-$this->b;
    }
    function multiplicar()
    {
        return $this->a*$this->b;
    }
    function dividir()
    {
        return $this->a/$this->b;
    }
}
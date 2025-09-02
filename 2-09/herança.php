<?php
class Quarto{
    private $numero;
    private $preco;

   public function __construct($nun) {
        $this->numero = $nun;
    }

    public function getNumero(){
        return $this->numero;
    }
}
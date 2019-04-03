<?php

class RoupaModels 
{
    private $id;
    private $numero;
    private $tipo;
    private $cor;
    private $vestimenta; //se é calça, shot etc
    private $moda;
    private $marca;
    private $imagem;

    public function __get($atr){
        return $this->$atr;
    }

    public function __set($atr, $value){
        $this->$atr = $value;
    }
}

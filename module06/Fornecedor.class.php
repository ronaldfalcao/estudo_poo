<?php

class Fornecedor {

    //Propriedades públicas acessíveis fora da classe.
    public $valor;    
    public $nome;
    
    //Propriedades privadas acessíveis apenas dentro da classe.
    private $compra;
    private $id;
    
    public function getId() {
        return $this->id;
    }

    public function getCompra() {
        return $this->compra;
    }

    public function setId($Id) {
        $this->id = $Id;
        return $this;
    }

    public function setCompra($Compra) {
        $this->compra = $Compra;
        return $this;
    }

}

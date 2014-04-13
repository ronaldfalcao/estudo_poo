<?php

    require_once 'Fornecedor.class.php';
    
    class Produto{

        public $id;
        public $nome;
        public $valor;
        public $fornecedor;
        
        public function __construct($Id, $Nome, $Valor, $Fornecedor) {
            $this->id = $Id;
            $this->nome = $Nome;
            $this->valor = $Valor;
            $this->fornecedor = $Fornecedor;
        }
        
    }
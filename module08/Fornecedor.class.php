<?php
    
    class Fornecedor{
        
        public $id;
        public $razaoSocial;
        public $endereco;
        public $telefone;
        
        public function __construct($Id, $RazaoSocial, $Endereco, $Telefone) {
            $this->id = $Id;
            $this->razaoSocial = $RazaoSocial;
            $this->endereco = $Endereco;
            $this->telefone = $Telefone;
        }
    }


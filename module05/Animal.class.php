<?php
    abstract class Animal{
        
        public $nome;
        public $idade;
        
        function __construct($Nome, $Idade) {
            $this->nome = $Nome;
            $this->idade = $Idade;
        }
        
        public function descricao(){
            return $this->nome." , ".$this->idade." ano(s) de idade.".'<br>';
        }
        
        abstract public function falar();
        
    }


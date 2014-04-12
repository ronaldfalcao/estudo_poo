<?php

    /* Criando uma classe abstrata, que não poderá ser instanciada
     * diretamente, apenas estendida.
     */
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
        
        //Necessariamente a classe filha tem que possuir esse método.
        abstract public function falar();
        
    }


<?php

    /* Criando uma classe abstrata, que n�o poder� ser instanciada
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
        
        //Necessariamente a classe filha tem que possuir esse m�todo.
        abstract public function falar();
        
    }


<?php
    
    require_once 'Animal.class.php';

    final class Cachorro extends Animal{
            
        public function falar(){
                return "Latido";
        }
        
        final public function descricao(){
            return parent::descricao(). "Eu sou um cachorro";
        }
        
    }


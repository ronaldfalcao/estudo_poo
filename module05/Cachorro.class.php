<?php
    
    require_once 'Animal.class.php';

    /* Como a classe foi definida como Final, nenhuma outra pode estender
     * essa classe.
     */
    final class Cachorro extends Animal{
            
        public function falar(){
                return "Latido";
        }
        
        //O método não pode ser estendido. Usado apenas de exemplo,
        //pois a classe também é final.
        final public function descricao(){
            return parent::descricao(). "Eu sou um cachorro";
        }
        
    }


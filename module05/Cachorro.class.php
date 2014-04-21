<?php
    
    require_once 'Animal.class.php';

    /* Como a classe foi definida como Final, nenhuma outra pode estender
     * essa classe.
     */
    final class Cachorro extends Animal{
            
        public function falar(){
                return "Latido";
        }
        
        //O m�todo n�o pode ser estendido. Usado apenas de exemplo,
        //pois a classe tamb�m � final.
        final public function descricao(){
            return parent::descricao(). "Eu sou um cachorro";
        }
        
    }


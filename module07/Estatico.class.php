<?php
    
    class Estatico{
        
        public static $propriedadeEstatica;
        
        //Notar que não foi utilizado o $this-> porque ele é usado para objetos
        //por isso o uso do self::
        public static function mensagemEstatico(){
            echo "Valor estático: ".self::$propriedadeEstatica.'<br>';
        }
    }
    
    


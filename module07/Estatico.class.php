<?php
    
    class Estatico{
        
        public static $propriedadeEstatica;
        
        //Notar que n�o foi utilizado o $this-> porque ele � usado para objetos
        //por isso o uso do self::
        public static function mensagemEstatico(){
            echo "Valor est�tico: ".self::$propriedadeEstatica.'<br>';
        }
    }
    
    


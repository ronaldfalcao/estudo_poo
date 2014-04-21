<?php
    
    require_once 'Estatico.class.php';

    class EstaticoEstendido extends Estatico{
        
        static function mensagemFilhaEstatico(){
            echo "Essa é a mensagem da classe filha".'<br>';
            echo "A seguir a mensagem da classe pai...";
            parent::mensagemEstatico();
            
        }
        
        
    }

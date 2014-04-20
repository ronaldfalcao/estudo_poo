<?php
    
    require_once 'Contato.class.php';

    class Cliente{
        
        public $codigo;
        public $endereco;
        public $contato;
        
        public function __construct() {
            $this->contato = new Contato();
        }
        
        public function setContato($Nome, $Email, $Telefone){
            $this->contato->setContato($Nome, $Email, $Telefone);
        }
        
        public function escreveContato(){
            $this->contato->escreverContato();
        }
    }


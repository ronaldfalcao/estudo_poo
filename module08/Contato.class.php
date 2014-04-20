<?php
    class Contato{
        
        public $nome;
        public $email;
        public $telefone;
        
        public function setContato($Nome, $Email, $Telefone){
            $this->nome = $Nome;
            $this->email = $Email;
            $this->telefone = $Telefone;
        }
        
        public function escreverContato(){
            echo "Nome: ".$this->nome.'<br>';
            echo "E-Mail: ".$this->email.'<br>';
            echo "Telefone: ".$this->telefone.'<br>';
        }
    }


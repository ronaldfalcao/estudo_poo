<?php

    class Pessoa{
        
        private $dataNascimento;
        private $nome;
        
        
        
        //Usado para acessar a propriedade $idade por um método...
        public function setDataNascimento($DataNascimento) {
            $this->dataNascimento = $DataNascimento;
            return $this;
        }
        
        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        
        //Vai interceptar a tentativa fora da classe te atribuir um valor para a
        //propriedade $idade...
        public function __set($name, $value) {
            if ( $name == "dataNascimento"){
                if (is_integer($value) && strlen($value) > 1){
                    $this->setDataNascimento($value);
                    echo "Valor __set: ".$value." atribuído à propriedade ".$name.'<br>';
                }
                else{
                    echo "Valor __set: ".$value." não atribuído à propriedade ".$name.'<br>';
                }
            }
            
        }
        
        public function __get($name) {
            if( $name == "dataNascimento" || $name == "nome"){
                echo "Você está tentando acessar propriedades privadas.".'<br>';
            }
        }
        
        public function __call($name, $arguments) {
            echo 'O seguinte método foi executado: '.$name.'<br>';
            
            if (count($arguments) != 0){
                echo "Foram utilizados os seguintes argumento: ".'<br>';
                foreach ($arguments as $key => $value) {
                    echo "Argumento: ".$value.'<br>';
                    
                }
            }
            else{
                echo "Não foram fornecidos arqgumentos.".'<br>';
            }
        }
        
        
        
    }


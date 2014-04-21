<?php

    class Pessoa{
        
        private $dataNascimento;
        private $nome;
        
        //Usado para acessar a propriedade $idade por um m�todo...
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
                    echo "Valor __set: ".$value." atribu�do � propriedade ".$name.'<br>';
                }
                else{
                    echo "Valor __set: ".$value." n�o atribu�do � propriedade ".$name.'<br>';
                }
            }
            
        }
        
        public function __get($name) {
            if( $name == "dataNascimento" || $name == "nome"){
                echo "Voc� est� tentando acessar propriedades privadas.".'<br>';
            }
        }
        
        public function __call($name, $arguments) {
            echo 'O seguinte m�todo foi executado: '.$name.'<br>';
            
            if (count($arguments) != 0){
                echo "Foram utilizados os seguintes argumentos: ".'<br>';
                foreach ($arguments as $key => $value) {
                    echo "Argumentos: ".$value.'<br>';
                    
                }
            }
            else{
                echo "N�o foram fornecidos arqgumentos.".'<br>';
            }
        }
        
    }


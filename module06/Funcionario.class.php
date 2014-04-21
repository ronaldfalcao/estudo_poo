<?php
    
    class Funcionario{
        
        //Propriedades privadas que não são acessadas fora da classe...
        private $id;
        private $nome;
        private $nascimento;
        
        //Propriedades protegidas que são acessadas de fora pelas classes filhas...
        protected $salario;
        
        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($Salario) {
            
            if (is_numeric($Salario) && $Salario > 0){
                $this->salario = $Salario;
                return $this;
            }

        }
    }


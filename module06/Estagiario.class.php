<?php
    
    require_once 'Funcionario.class.php';

    //Estende a classe Funcionario...
    class Estagiario extends Funcionario{
        
        //Sobrescreve a fun��o da classe pai com uma regra de neg�cio diferente...
        function getSalario() {
            return $this->salario * 1.10;
        }
        
    }


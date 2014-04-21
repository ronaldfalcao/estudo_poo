<?php
    
    require_once 'Funcionario.class.php';

    //Estende a classe Funcionario...
    class Estagiario extends Funcionario{
        
        //Sobrescreve a função da classe pai com uma regra de negócio diferente...
        function getSalario() {
            return $this->salario * 1.10;
        }
        
    }


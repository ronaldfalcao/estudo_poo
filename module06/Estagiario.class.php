<?php
    
    require_once 'Funcionario.class.php';

    class Estagiario extends Funcionario{
        
        function getSalario() {
            return $this->salario * 1.10;
        }
        
    }


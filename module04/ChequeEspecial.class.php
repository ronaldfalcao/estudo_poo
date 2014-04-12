<?php
    
    require_once 'Cheque.class.php';

    class ChequeEspecial extends Cheque{
        
        function calcularJuros() {
            return $this->valor * 0.5;
        }
        
        function tipoCheque() {
            return "Especial";
        }
        
    }


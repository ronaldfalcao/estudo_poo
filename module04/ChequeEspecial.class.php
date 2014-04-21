<?php

    /* Classe ChequeEspecial que estender� a classe pai Cheque,
     * sobrescrevendo fun��es que se tornam especializadas.
     */
    
    require_once 'Cheque.class.php';

    class ChequeEspecial extends Cheque{
        
        //Sobrescreve com o mesmo nome a fun��o da classe pai.
        function calcularJuros() {
            return $this->valor * 0.5;
        }
        
        //Sobrescreve com o mesmo nome a fun��o da classe pai.
        function tipoCheque() {
            return "Especial";
        }
        
    }


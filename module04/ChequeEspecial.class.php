<?php

    /* Classe ChequeEspecial que estenderá a classe pai Cheque,
     * sobrescrevendo funções que se tornam especializadas.
     */
    
    require_once 'Cheque.class.php';

    class ChequeEspecial extends Cheque{
        
        //Sobrescreve com o mesmo nome a função da classe pai.
        function calcularJuros() {
            return $this->valor * 0.5;
        }
        
        //Sobrescreve com o mesmo nome a função da classe pai.
        function tipoCheque() {
            return "Especial";
        }
        
    }


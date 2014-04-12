<?php
    class Cheque{
        
        public $valor;
        
        function __construct($Valor) {
            $this->valor = $Valor;
        }
        
        function calcularJuros(){
            return $this->valor * 1.20;
        }
        
        function tipoCheque() {
            return "Comum";
        }
    }


<?php

    /*Classe base para entender o conceito de polimorfismo
     * dela ser� estendida a classe Cheque Especial      
     */
    class Cheque{
        
        public $valor;
        
        function __construct($Valor) {
            $this->valor = $Valor;
        }
        
        //Fun��o calcularJuros() que ser� sobrescrita na classe filha.
        function calcularJuros(){
            return $this->valor * 1.20;
        }
        
        //Fun��o tipoCheque() que ser� sobrescrita na classe filha.
        function tipoCheque() {
            return "Comum";
        }
    }


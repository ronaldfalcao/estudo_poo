<?php

    /*Classe base para entender o conceito de polimorfismo
     * dela será estendida a classe Cheque Especial      
     */
    class Cheque{
        
        public $valor;
        
        function __construct($Valor) {
            $this->valor = $Valor;
        }
        
        //Função calcularJuros() que será sobrescrita na classe filha.
        function calcularJuros(){
            return $this->valor * 1.20;
        }
        
        //Função tipoCheque() que será sobrescrita na classe filha.
        function tipoCheque() {
            return "Comum";
        }
    }


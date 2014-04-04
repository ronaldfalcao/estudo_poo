<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author ronaldbf
 */
class Conta {
    public $cliente;
    public $agencia;
    public $conta;
    public $saldo;
    public $status;
    
    function __construct($Cliente, $Agencia, $Conta, $Saldo, $Status) {
        $this->cliente = $Cliente;
        $this->agencia = $Agencia;
        $this->conta = $Conta;
        $this->saldo = $Saldo;
        $this->status = $Status;
    }
    
    function __destruct() {
        echo 'O objeto foi destruído'.'<br>';
        
    }
    
    //Método para saque...
    function SacarValor($QuantiaDebitada){
        if( $QuantiaDebitada > 0 ){
            $this->saldo -= $QuantiaDebitada;
        }
    }
    
    //Método para depósito
    function DepositarValor($QuantiaDepositada) {
        if ( $QuantiaDepositada > 0){
            $this->saldo += $QuantiaDepositada;
        }
        
    }
    
    //Método para verificar o saldo...
    function ObterSaldo() {
        if ($this->status == "ATIVA"){
            return $this->saldo;
        }
        else{
            return "A conta está desativada. Procure o seu gerente.".'<br>';
        }
    }
    
}

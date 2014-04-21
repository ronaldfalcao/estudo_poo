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
    
    //Declarando um mÈtodo construtor com a passagem das propriedades por par‚metros...
    function __construct($Cliente, $Agencia, $Conta, $Saldo, $Status) {
        $this->cliente = $Cliente;
        $this->agencia = $Agencia;
        $this->conta = $Conta;
        $this->saldo = $Saldo;
        $this->status = $Status;
    }
    
    //MÈtodo destrutor da classe...
    function __destruct() {
        echo 'O objeto foi destru√≠do'.'<br>';
        
    }
    
    //MÈtodo para saque...
    function SacarValor($QuantiaDebitada){
        if( $QuantiaDebitada > 0 ){
            $this->saldo -= $QuantiaDebitada;
        }
    }
    
    //MÈtodo para depÛsito
    function DepositarValor($QuantiaDepositada) {
        if ( $QuantiaDepositada > 0){
            $this->saldo += $QuantiaDepositada;
        }
        
    }
    
    //MÈtodo para verificar o saldo...
    function ObterSaldo() {
        if ($this->status == "ATIVA"){
            return $this->saldo;
        }
        else{
            return "A conta est· desativada. Procure o seu gerente.".'<br>';
        }
    }
    
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author ronaldbf
 */
class Pessoa {
    
    public $nome;
    public $nascimento;
    public $altura;
    public $salario;
    
    public function mostraPessoa() {
        
        echo "Nome: ".$this->nome.'<br>';
        echo 'Nascimento: '.$this->nascimento.'<br>';
        echo "Altura: ".$this->altura.'<br>';
        echo 'Salário: '.$this->salario.'<br>';
        
    }
}

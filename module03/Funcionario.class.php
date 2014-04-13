<?php
	require_once 'Pessoa.class.php';
	
	class Funcionario extends Pessoa{
		
		public $salario;
		public $cargo;
		public $diaPagamento;
		
		function __construct($Nome, $AnoNascimento, $Endereco, $Telefone, $Salario, $Cargo, $DiaPagamento){
			
			parent::__construct($Nome, $AnoNascimento, $Endereco, $Telefone);
			
			$this->salario = $Salario;
			$this->cargo = $Cargo;
			$this->diaPagamento = $DiaPagamento;
			
		}
		
		function escreverSalario(){
			echo "Salário: ".$this->salario.'<br>';
		}
		
		function escreverDados(){
			parent::escreverDados();
			
			echo "Salário: ".$this->salario.'<br>';
			echo "Cargo: ".$this->cargo.'<br>';
			echo "Dia do Pagamento: ".$this->diaPagamento.'<br>';
		}
	}
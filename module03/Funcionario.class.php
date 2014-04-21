<?php
	//Necessário pegar a entidade base para estender a classe base para uma mais específica (funcionario)...
	require_once 'Pessoa.class.php';
	
	
	//Estende a classe base Pessoa para uma mais especializada...
	class Funcionario extends Pessoa{
		
		public $salario;
		public $cargo;
		public $diaPagamento;
		
		function __construct($Nome, $AnoNascimento, $Endereco, $Telefone, $Salario, $Cargo, $DiaPagamento){
			
			//Utiliza o construtor da classe pai e apenas complementa com os dados faltantes...
			parent::__construct($Nome, $AnoNascimento, $Endereco, $Telefone);
			
			$this->salario = $Salario;
			$this->cargo = $Cargo;
			$this->diaPagamento = $DiaPagamento;
			
		}
		
		//Função que retorna o salário do funcionário...
		function escreverSalario(){
			echo "Salário: ".$this->salario.'<br>';
		}
		
		//Função que retorna os dados da classe, estende a classe Pessoa e só completa com os dados faltantes...
		function escreverDados(){
			parent::escreverDados();
			
			echo "Salário: ".$this->salario.'<br>';
			echo "Cargo: ".$this->cargo.'<br>';
			echo "Dia do Pagamento: ".$this->diaPagamento.'<br>';
		}
	}
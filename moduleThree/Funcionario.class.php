<?php
	//Necess�rio pegar a entidade base para estender a classe base para uma mais espec�fica (funcionario)...
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
		
		//Fun��o que retorna o sal�rio do funcion�rio...
		function escreverSalario(){
			echo "Sal�rio: ".$this->salario.'<br>';
		}
		
		//Fun��o que retorna os dados da classe, estende a classe Pessoa e s� completa com os dados faltantes...
		function escreverDados(){
			parent::escreverDados();
			
			echo "Sal�rio: ".$this->salario.'<br>';
			echo "Cargo: ".$this->cargo.'<br>';
			echo "Dia do Pagamento: ".$this->diaPagamento.'<br>';
		}
	}
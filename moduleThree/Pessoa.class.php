<?php
	//Classe base para a entidade pessoa...
	class Pessoa{
		
		//Dados da entidade base...
		public $nome;
		public $anoNascimento;
		public $endereco;
		public $telefone;
		
		function __construct($Nome, $AnoNascimento, $Endereco, $Telefone){
			$this->nome = $Nome;
			$this->anoNascimento = $AnoNascimento;
			$this->endereco = $Endereco;
			$this->telefone = $Telefone;
		}
		
		//Função que retorna os valores da entidade base...
		function escreverDados(){
			echo "Nome: ".$this->nome.'<br>';
			echo "Ano de Nascimento: ".$this->anoNascimento.'<br>';
			echo "Endereço: ".$this->endereco.'<br>';
			echo "Telefone: ".$this->telefone.'<br>';
		}
		
		//Função que retorna a idade baseada no ano de nascimento da entidade base...
		function obterIdade(){
			$ano_atual = date("Y", time());
			return $ano_atual - $this->anoNascimento;
		}
	}
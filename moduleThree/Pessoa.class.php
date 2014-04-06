<?php
	class Pessoa{
		
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
		
		function escreverDados(){
			echo "Nome: ".$this->nome.'<br>';
			echo "Ano de Nascimento: ".$this->anoNascimento.'<br>';
			echo "Endereço: ".$this->endereco.'<br>';
			echo "Telefone: ".$this->telefone.'<br>';
		}
		
		function obterIdade(){
			$ano_atual = date("Y", time());
			return $ano_atual - $this->anoNascimento;
		}
	}
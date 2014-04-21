<?php
	/*Parâmentros utilizados para conexão com o banco de dados*/
	$host = 'mysql:host=localhost;port=3306;dbname=testepdo';
	$user = 'ronald';
	$pass = '123456';
	
	/*Opções para o PDO*/
	$optionsPDO = array( PDO::ATTR_PERSISTENT => true, PDO::ATTR_CASE => PDO::CASE_LOWER);
	
	/*Criando o tratamento para falha na conexão*/
	try {
		$conecta = new PDO($host, $user, $pass, $optionsPDO);
		
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage().'<br>';
	}
	
	//Prepara a consulta com o id a ser verificado (?)...
	//Note que a consulta é pré-compilada e fica disponível para inserção de outros valores.
	$estudante = $conecta->prepare('SELECT * FROM alunos WHERE id=?');
	
	//Prepara a variável com o valor 2...
	$dados = array(2);
	
	//Executa a consulta com execute() tendo como parêmetros $dado...
	$result = $estudante->execute($dados);
	
	//Carrega o resultado da consulta...
	$saida = $estudante->fetchObject();
	
	//Exibe o resultado na tela.
	echo "Dados do estudante de id=2".'<br>';
	echo "==========================".'<br>';
	echo "Nome: ".$saida->nome.'<br>';
	echo "Idade: ".$saida->idade.'<br>';
	echo '<br>';
	
	//Prepara a variável com o valor 1...
	$dados = array(1);
	
	//Executa a consulta com execute() tendo como parêmetros $dado...
	$result = $estudante->execute($dados);
	
	//Carrega o resultado da consulta...
	$saida = $estudante->fetchObject();
	
	//Exibe o resultado na tela.
	echo "Dados do estudante de id=1".'<br>';
	echo "==========================".'<br>';
	echo "Nome: ".$saida->nome.'<br>';
	echo "Idade: ".$saida->idade.'<br>';
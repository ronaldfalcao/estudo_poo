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
	
	/*Faz a consulta no banco de dados*/
	$consulta = $conecta->query('SELECT nome, idade FROM alunos');
	
	/*Mostra o resultado na página...*/
	while ($estudante = $consulta->fetchObject()){
		echo "Aluno: ".$estudante->nome.'<br>';
		echo "Idade: ".$estudante->idade.'<br>';
		echo "===============================".'<br>';
	}
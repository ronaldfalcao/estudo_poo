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
	
	//Prepara a consulta com os parâmetros a serem passados depois...
	$consulta = $conecta->prepare('SELECT * FROM alunos WHERE nome=:nome AND sexo=:sexo');
	
	//Parâmetros...
	$dados = array(':nome'=>'Flavia','sexo'=>'F');
	
	//Executa a consulta com os parâmetros passados..
	$resultado = $consulta->execute($dados);
	
	//Monta a saída...
	$saida = $consulta->fetchObject();
	
	//Saída na página...
	echo "Nome: ".$saida->nome.'<br>';
	echo "Idade: ".$saida->idade.'<br>';
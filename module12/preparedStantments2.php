<?php
	/*Par�mentros utilizados para conex�o com o banco de dados*/
	$host = 'mysql:host=localhost;port=3306;dbname=testepdo';
	$user = 'ronald';
	$pass = '123456';
	
	/*Op��es para o PDO*/
	$optionsPDO = array( PDO::ATTR_PERSISTENT => true, PDO::ATTR_CASE => PDO::CASE_LOWER);
	
	/*Criando o tratamento para falha na conex�o*/
	try {
		$conecta = new PDO($host, $user, $pass, $optionsPDO);
		
	} catch (PDOException $e){
		echo "Erro: ".$e->getMessage().'<br>';
	}
	
	//Prepara a consulta com os par�metros a serem passados depois...
	$consulta = $conecta->prepare('SELECT * FROM alunos WHERE nome=:nome AND sexo=:sexo');
	
	//Par�metros...
	$dados = array(':nome'=>'Flavia','sexo'=>'F');
	
	//Executa a consulta com os par�metros passados..
	$resultado = $consulta->execute($dados);
	
	//Monta a sa�da...
	$saida = $consulta->fetchObject();
	
	//Sa�da na p�gina...
	echo "Nome: ".$saida->nome.'<br>';
	echo "Idade: ".$saida->idade.'<br>';
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
	
	$consulta = $conecta->query('SELECT * FROM alunos');
	
	echo "<h2>Retorno dos tipos de PDO::FETCH_</h2>";
	
	echo "O array retornado tem os nomes das colunas como índice".'<br>';
	$coluna = $consulta->fetch(PDO::FETCH_ASSOC);
	var_dump($coluna);
	
	echo "O array retornado tem os valores númericos da coluna como índice".'<br>';
	$coluna = $consulta->fetch(PDO::FETCH_NUM);
	var_dump($coluna);
	
	echo "O array retornado tem os nomes das colunas e os valores numéricos como índice".'<br>';
	$coluna = $consulta->fetch(PDO::FETCH_BOTH);
	var_dump($coluna);
	
	echo "Retorna como um objeto (stdClass)".'<br>';
	$coluna = $consulta->fetch(PDO::FETCH_OBJ);
	var_dump($coluna);
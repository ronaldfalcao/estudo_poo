<?php

    //Fun��o para abrir um arquivo...
	function abrirArquivo($arquivo = NULL){
		if (!$arquivo){
		    //Caso n�o tenha passado par�metro para o m�todo...
			throw new Exception("Par�metro com o nome do arquivo n�o especificado");
		}
		
		if (!$data = @file_get_contents($arquivo)){
		    //Caso n�o seja poss�vel abrir o arquivo (permiss�o ou n�o existe)...
			throw new Exception("N�o foi poss�vel ler o arquivo.");
		}
		
		return $data;
	}
	
	//Lan�a a exce��o no caso da falta de par�metro...
	try {
		
		$arquivo = abrirArquivo();
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	//Lan�a a exce��o no caso do arquivo n�o acess�vel...
	try {
	
		$arquivo = abrirArquivo("arquivo.txt");
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	
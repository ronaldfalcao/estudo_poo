<?php

    //Função para abrir um arquivo...
	function abrirArquivo($arquivo = NULL){
		if (!$arquivo){
		    //Caso não tenha passado parâmetro para o método...
			throw new Exception("Parâmetro com o nome do arquivo não especificado");
		}
		
		if (!$data = @file_get_contents($arquivo)){
		    //Caso não seja possível abrir o arquivo (permissão ou não existe)...
			throw new Exception("Não foi possível ler o arquivo.");
		}
		
		return $data;
	}
	
	//Lança a exceção no caso da falta de parâmetro...
	try {
		
		$arquivo = abrirArquivo();
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	//Lança a exceção no caso do arquivo não acessível...
	try {
	
		$arquivo = abrirArquivo("arquivo.txt");
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	
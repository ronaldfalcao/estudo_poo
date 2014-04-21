<?php
	function abrirArquivo($arquivo = NULL){
		if (!$arquivo){
			throw new Exception("Parâmetro com o nome do arquivo não especificado");
		}
		
		if (!$data = @file_get_contents($arquivo)){
			throw new Exception("Não foi possível ler o arquivo.");
		}
		
		return $data;
	}
	
	try {
		
		$arquivo = abrirArquivo();
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	
	try {
	
		$arquivo = abrirArquivo("arquivo.txt");
		echo $arquivo;
	}
	catch ( Exception $exec){
		echo "ERRO: ".$exec->getFile()." - na linha #".$exec->getLine()." - ".$exec->getMessage().'<br>';
	}
	
	
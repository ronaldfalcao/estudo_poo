<?php
	//Testando a função die().
	
	echo "<h5>Testando a função die() no PHP</h5>".'<br>';
	
	if (function_exists('Teste')){
		teste();
	}
	else{
		die ("Ocorreu um erro durante a execução da função Teste().");
	}
	
	echo "Se o script foi interrompido não exibirá essa mensagem.";
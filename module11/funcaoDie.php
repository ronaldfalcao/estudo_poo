<?php
	//Testando a fun��o die().
	
	echo "<h5>Testando a fun��o die() no PHP</h5>".'<br>';
	
	if (function_exists('Teste')){
		teste();
	}
	else{
	    //Interrompe a execu��o do script...
		die ("Ocorreu um erro durante a execu��o da fun��o Teste().");
	}
	
	echo "Se o script foi interrompido n�o exibir� essa mensagem.";
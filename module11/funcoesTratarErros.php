<?php
	
	function erroMensagem($erro, $erro_str){
		echo "Ocorreu um erro: ".$erro." - ".$erro_str.'<br>';
	}
	
	//Seta o a mensagem e tipo de erro...
	set_error_handler("Erro ao chamar a fun��o", E_USER_WARNING);
	
	$teste = TRUE;
	
	if (!$teste){
	    //Lan�a o erro...
		trigger_error();
	}
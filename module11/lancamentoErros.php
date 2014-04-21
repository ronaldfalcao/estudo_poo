<?php
	
	//É esperado receber um valor na variável nome ($_GET)...
	if (!(isset($_GET['nome']))){
		//Lança a mensagem de WARNING...
		trigger_error("O campo usuário não foi preenchido.",E_USER_WARNING);
	}
	else{
		echo "Nome do usuário: ".$_GET['nome'].'<br>';
	}
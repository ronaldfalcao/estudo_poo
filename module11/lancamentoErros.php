<?php
	
	//� esperado receber um valor na vari�vel nome ($_GET)...
	if (!(isset($_GET['nome']))){
		//Lan�a a mensagem de WARNING...
		trigger_error("O campo usu�rio n�o foi preenchido.",E_USER_WARNING);
	}
	else{
		echo "Nome do usu�rio: ".$_GET['nome'].'<br>';
	}
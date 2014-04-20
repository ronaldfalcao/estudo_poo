<?php
	require_once("Funcionario.class.php");
	
	//Instancia um objeto...
	$funcionario = new Funcionario("Carl Friedrich Gauss", 1777, "Rua da Sabedoria 314 - Alemanha","(11) 3601-3571", 6000, "Matemático e outros", 5);
	
	echo "Idade: ".$funcionario->obterIdade().'<br>';
	
	//Traz todas as informações sobre o funcionário...
	$funcionario->escreverDados();

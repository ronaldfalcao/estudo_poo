<?php

<<<<<<< HEAD:moduleThree/index.php
	require_once("Funcionario.class.php");
	
	//Instancia um objeto...
	$funcionario = new Funcionario("Carl Friedrich Gauss", 1777, "Rua da Sabedoria 314 - Alemanha","(11) 3601-3571", 6000, "Matemático e outros", 5);
	
	echo "Idade: ".$funcionario->obterIdade().'<br>';
	
	//Traz todas as informações sobre o funcionário...
	$funcionario->escreverDados();
=======
require_once("Funcionario.class.php");

$funcionario = new Funcionario("Carl Friedrich Gauss", 1777, "Rua da Sabedoria 314 - Alemanha","(11) 3601-3571", 6000, "MatemÃ¡tico e outros", 5);

echo "Idade: ".$funcionario->obterIdade().'<br>';

$funcionario->escreverDados();
>>>>>>> 594b723c3404e2f7a4ce27f02e9c74f1b54e50a9:module03/index.php

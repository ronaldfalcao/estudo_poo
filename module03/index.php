<?php

require_once("Funcionario.class.php");

$funcionario = new Funcionario("Carl Friedrich Gauss", 1777, "Rua da Sabedoria 314 - Alemanha","(11) 3601-3571", 6000, "Matemático e outros", 5);

echo "Idade: ".$funcionario->obterIdade().'<br>';

$funcionario->escreverDados();
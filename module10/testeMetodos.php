<?php
	
	require_once 'Classe1.class.php';
	require_once 'ClasseA.class.php';

	echo "<h4>Retorno do método get_class_methods()</h4>";
	print_r(get_class_methods('Classe1'));
	
	$objeto1 = new Classe1();
	
	echo "<h4>Retorno do método is_a()</h4>";
	
	//Verifica se o objeto pertence à uma classe...
	if (is_a($objeto1, 'Classe1')){
		echo "O objeto pertence à Classe1.".'<br>';
	}
	else{
		echo "O objeto não pertence à Classe1".'<br>';
	}
	
	echo '<br>';
	
	//Verifica se o objeto pertence à uma classe...
	if (is_a($objeto1, 'Classe2')){
		echo "O objeto pertence à Classe2.".'<br>';
	}
	else{
		echo "O objeto não pertence à Classe2".'<br>';
	}
	
	$objeto2 = new ClasseA();
	
	echo "<h4>Retorno do método get_parent_class()</h4>";
	
	print_r(get_parent_class($objeto2));
	
	echo "<h4>Retorno do método get_class_vars()</h4>";
	
	var_dump(get_class_vars('Classe1'));
	
	$objeto3 = new Classe1();
	
	$objeto3->propriedade1 = 1;
	$objeto3->propriedade2 = 2;
	$objeto3->propriedade3 = 3;
	$objeto3->propriedade4 = 4;
	$objeto3->propriedade5 = 5;
	
	echo "<h4>Retorno do método get_object_vars()</h4>";
	
	var_dump(get_object_vars($objeto3));
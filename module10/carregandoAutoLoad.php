<?php
	
    /* Criando a fun��o __autoload() para que as classes da pasta raiz sejam carregadas...
     * 
     */
	function __autoload($classe){
		
		$dir = $classe.".class.php";
 
	   	//confirmando se o arquivo existe	 
	   	if (file_exists($dir)){
	   	    //se exister, faz a inclus�o
	    	require_once($dir);
	   	}
	} 
	
	$objeto1 = new Classe1();
	$objeto2 = new Classe2();
	$objeto3 = new Classe3();
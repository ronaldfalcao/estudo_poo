<?php
	
	require_once 'Classe1.class.php';
	
	class ClasseA extends Classe1{
		
		public $propriedadeA;
		
		public function metodoA(){
			echo "M�todo A".'<br>';
		}
		
	}
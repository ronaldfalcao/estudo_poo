<?php
    
    require_once 'Funcoes.class.php';

    /*A classe n�o pode ser estendida (final) e estende a classe Funcoes*/
    final class Aplicacao extends Funcoes{
        
        const VERSAO = 1.0;
        
        function __construct($NomeAplicacao) {
            
            echo "Nome da aplica��o: ".$NomeAplicacao.'<br>';
            echo "Vers�o: ".self::VERSAO.'<br>';
            echo 'Valor do Pi (parent::): '.number_format(parent::PI,31).'<br>';
            echo "Valor do Pi (NomeClasse::): ".number_format(Funcoes::PI,31).'<br>';
            
        }        
        
    }

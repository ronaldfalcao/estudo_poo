<?php
    
    require_once 'Funcoes.class.php';

    /*A classe não pode ser estendida (final) e estende a classe Funcoes*/
    final class Aplicacao extends Funcoes{
        
        const VERSAO = 1.0;
        
        function __construct($NomeAplicacao) {
            
            echo "Nome da aplicação: ".$NomeAplicacao.'<br>';
            echo "Versão: ".self::VERSAO.'<br>';
            echo 'Valor do Pi (parent::): '.number_format(parent::PI,31).'<br>';
            echo "Valor do Pi (NomeClasse::): ".number_format(Funcoes::PI,31).'<br>';
            
        }        
        
    }

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Constantes e propriedades/métodos estáticos</title>
    </head>
    <body>
        <?php
            
            require_once 'Aplicacao.class.php';
            require_once 'Estatico.class.php';
            require_once 'EstaticoEstendido.class.php';
            
            $aplicacaoMath = new Aplicacao("MAS - Math Application System");
            
            echo '<br>'.'Testando propriedades e métodos estáticos'.'<br>';
            echo '==========================================='.'<br>';
            
            Estatico::$propriedadeEstatica = 20;
            Estatico::mensagemEstatico();
            
            echo '<br>';
            
            EstaticoEstendido::mensagemFilhaEstatico();
            
            
        ?>
    </body>
</html>

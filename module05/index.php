<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Classes/Métodos abstrados e finais</title>
    </head>
    <body>
        <?php
        
            require_once 'Cachorro.class.php';
        
            $animal = new Cachorro("Rex",2);
            echo $animal->descricao();
            echo '<br>'."Som emitido: ".$animal->falar();
        ?>
    </body>
</html>

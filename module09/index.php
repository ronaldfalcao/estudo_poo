<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando métodos interceptores (Mágicos)</title>
    </head>
    <body>
        <?php
            
            require_once 'Pessoa.class.php';
            
            echo '<h2>'."Testando métodos interceptores".'</h2>';
            
            $pessoa = new Pessoa();
            
            //Acessando a variável pelo método set()...
            $pessoa->setDataNascimento(34);
            echo "<br>"."Valor atribuído pelo get(): ".$pessoa->getDataNascimento().'<br>';
            
            //Acessando a variável diretamente, será interceptada pelo método __set()...
            $pessoa->dataNascimento = 40;
            $pessoa->dataNascimento = 0;
            $pessoa->dataNascimento = "AA";
            
            echo '<br>';
            
            //Tentando exibir variáveis diretamente, será interceptada pelo método __get()..
            echo $pessoa->nome;
            echo $pessoa->dataNascimento;
            
            echo '<br>';
           
            //Tentando acessar um método que não existe...
            $pessoa->calculaIdade();
            
             echo '<br>';
            
            //Tentando acessar um método que não existe...
            $pessoa->calculaIdade(1,2,3,4,5);
        ?>
    </body>
</html>

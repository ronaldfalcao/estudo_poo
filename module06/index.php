<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando encapsulamento</title>
    </head>
    <body>
        <?php
        
            require_once 'Fornecedor.class.php';
            require_once 'Estagiario.class.php';
            
            $fornecedor = new Fornecedor();
            
            //Atribuindo valor �s propriedades p�blicas.
            $fornecedor->nome = "Nome do fornecedor";
            $fornecedor->valor = 10000.00;
            
            echo 'Exibindo as propriedades das classes<br>';
            echo "==========================================".'<br>';
            echo "Propriedades P�blicas".'<br>';
            echo "=====================".'<br>';
            echo "Nome: ".$fornecedor->nome.'<br>';
            echo "Valor da compra: R$ ".$fornecedor->valor.'<br>';
            
            //Atribuindo valores às propriedades privadas com as funções set.
            $fornecedor->setCompra(10);
            $fornecedor->setId(1);
             
            //Exibindo as vari�veis privadas com as fun��es get.
            echo "==========================================".'<br>';
            echo "Propriedades Privadas".'<br>';
            echo "=====================".'<br>';
            echo "Id da compra ".$fornecedor->getCompra().'<br>';         
            echo "Id do fornecedor: ".$fornecedor->getId().'<br>';
            
            echo '<br>';
            echo "Testando a classe funcionario".'<br>';
            
            $junior = new Estagiario();
            
            $junior->setSalario(300);
            
            echo "O sal�rio do estagi�rio é: ".$junior->getSalario();
        ?>
    </body>
</html>

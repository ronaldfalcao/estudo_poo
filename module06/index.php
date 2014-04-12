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
            
            //Atribuindo valor às propriedades públicas.
            $fornecedor->nome = "Nome do fornecedor";
            $fornecedor->valor = 10000.00;
            
            echo 'Exibindo as propriedades das classes<br>';
            echo "==========================================".'<br>';
            echo "Propriedades Públicas".'<br>';
            echo "=====================".'<br>';
            echo "Nome: ".$fornecedor->nome.'<br>';
            echo "Valor da compra: R$ ".$fornecedor->valor.'<br>';
            
            //Atribuindo valores às propriedades privadas com as funções set.
            $fornecedor->setCompra(10);
            $fornecedor->setId(1);
             
            //Exibindo as variáveis privadas com as funções get.
            echo "==========================================".'<br>';
            echo "Propriedades Privadas".'<br>';
            echo "=====================".'<br>';
            echo "Id da compra ".$fornecedor->getCompra().'<br>';         
            echo "Id do fornecedor: ".$fornecedor->getId().'<br>';
            
            echo '<br>';
            echo "Testando a classe funcionario".'<br>';
            
            $junior = new Estagiario();
            
            $junior->setSalario(300);
            
            echo "O salário do estagiário é: ".$junior->getSalario();
        ?>
    </body>
</html>

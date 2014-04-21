<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando relações entre classes: Associação, Agregação e Composição</title>
    </head>
    <body>
        <?php
            
            require_once 'Produto.class.php';
            require_once 'Fornecedor.class.php';
            require_once 'Carrinho.class.php';
            require_once 'Cliente.class.php';
            
            echo '<h2>'."Exemplo usando Associação".'</h2>';
            
            $fornecedor = new Fornecedor(1, "Fornecedor SA", "Rua do Fornecedor, 33232", "+55 21 7463-9875");
            $produto = new Produto(1, "Produtis", 1.25, $fornecedor);
            
            echo "Descrição do Produto".'<br>';
            echo "Nome do produto: ".$produto->nome.'<br>';
            echo "Valor unitário: ".$produto->valor.'<br>';
            echo "Nome do produto: ".$produto->fornecedor->razaoSocial.'<br>';
            
            echo '<h2>'."Exemplo usando Agregação".'</h2>';
            
            $produto01 = new Produto(2, "Alface", 0.85, $fornecedor);
            $produto02 = new Produto(3, "Repolho", 3.75, $fornecedor);
            $produto03 = new Produto(4, "Tomate", 2.55, $fornecedor);
            $produto04 = new Produto(5, "Batata", 1.85, $fornecedor);
            $produto05 = new Produto(6, "Cebolinha", 1.25, $fornecedor);
            $produto06 = new Produto(7, "Cheiro Verde", 1.35, $fornecedor);
            $produto07 = new Produto(8, "Cenoura", 1.95, $fornecedor);
            
            $carrinhoCompra = new Carrinho();
            
            $carrinhoCompra->insereProduto($produto01);
            $carrinhoCompra->insereProduto($produto02);
            $carrinhoCompra->insereProduto($produto03);
            $carrinhoCompra->insereProduto($produto04);
            $carrinhoCompra->insereProduto($produto04);
            $carrinhoCompra->insereProduto($produto05);
            $carrinhoCompra->insereProduto($produto06);
            $carrinhoCompra->insereProduto($produto07);
            
            $carrinhoCompra->exibeLista();
            echo "--------------------------------------".'<br>';
            $carrinhoCompra->calculaTotal();
            
            echo '<h2>'."Exemplo usando Composição".'</h2>';
            $ronald = new Cliente();
            $ronald->codigo = 1;
            $ronald->setContato("Ronald B. Falcão", "contato@ronaldfalcao.com.br", "+55 11 6546-0098");
            $ronald->endereco = "Rua dos Desenvolvedores PHP, 003";
            
            $ronald->escreveContato();
            echo 'Endereço: '.$ronald->endereco;
        ?>
    </body>
</html>

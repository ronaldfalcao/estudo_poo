<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando Classe Pessoa</title>
    </head>
    <body>
        <?php
        
            include 'Pessoa.class.php';
            include 'Conta.class.php';
            
            $pessoaNova = new Pessoa();
            
            //instanciando o objeto...
            $pessoaNova->nome = "Jean-Louis Lebris de Kerouac ";
            $pessoaNova->altura = "1,85m";
            $pessoaNova->nascimento = "12/03/1922";
            $pessoaNova->salario = "U$1890,00";
            
            //Para mostrar os dados da nova pessoa ($pessoaNova) chamamos o método...
            $pessoaNova->mostraPessoa();
                                
            //Instanciando o objeto com o uso de construtor...
            $novaConta = new Conta($pessoaNova, "3232", "32343-0", 20000, "ATIVA");
            $novaConta->ObterSaldo();

            //mostrar saldo atual da conta...
            echo "Saldo atual é (R$): ".$novaConta->ObterSaldo().'<br>';
            echo "Depositando R$ 500,00 em sua conta...".'<br>';
            $novaConta->DepositarValor(500);
            echo "Saldo atual é (R$): ".$novaConta->ObterSaldo().'<br>';
            echo "Sacando R$ 1200,00 de sua conta...".'<br>';
            $novaConta->SacarValor(1200);
            echo "Saldo atual é (R$): ".$novaConta->ObterSaldo().'<br>';
            
            
        ?>
    </body>
</html>

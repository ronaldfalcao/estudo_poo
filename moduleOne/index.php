<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Testando a classe carro</title>
    </head>
    <body>
        <?php
            //incluindo a classe carro...
            include 'Carro.class.php';
            
            //instanciando um objeto da classe Carro...
            $carroNovo = new Carro();
            
            $carroNovo->ano = 2014;
            $carroNovo->cor = "Prata M335";
            $carroNovo->fabricante = "Volkswagen";
            $carroNovo->modelo = "Gol";
            
            echo "Novo carro no sistema".'<br>';
            echo "Ano: ".$carroNovo->ano.'<br>';
            echo "Fabricante: ".$carroNovo->fabricante.'<br>';
            echo "Modelo: ".$carroNovo->modelo.'<br>';
            echo "Cor: ".$carroNovo->cor.'<br>';
        ?>
    </body>
</html>

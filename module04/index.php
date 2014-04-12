<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste de Polimorfismo</title>
    </head>
    <body>
        <?php
            require_once 'Cheque.class.php';
            require_once 'ChequeEspecial.class.php';
            
            $cheque[1] = new Cheque(300.00);
            $cheque[2] = new Cheque(450.00);
            $cheque[3] = new ChequeEspecial(1200.00);
            $cheque[4] = new ChequeEspecial(3000.30);
            $cheque[5] = new Cheque(789.00);
            
            foreach ($cheque as $key => $value) {
                echo "Cheque $key ( {$value->tipoCheque()} ) com juros: R$ {$value->calcularJuros()}".'<br>';
            }
        ?>
    </body>
</html>

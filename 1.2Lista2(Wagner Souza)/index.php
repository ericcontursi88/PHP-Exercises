<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
               include_once 'Cliente.php';
        include_once 'Doc.php';
        
        $c1 = new Cliente("Wagner",3000, 5000);
        $c2 = new Cliente("Souza", 2000, 8000);
        $c1->Depositar(500);
        $c2->sacar(250);
        $d1 = new Doc();
        $d1->Transferir($c1,$c2,500);
        
        echo "Saldos ".$c1->getSaldo()." e ".$c2->getSaldo(); 
        ?>
    </body>
</html>

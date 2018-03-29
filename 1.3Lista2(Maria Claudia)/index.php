<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>1.1 Lista 2 PHP</title>
    </head>
    <body>
        <?php
        // put your code here

        require_once 'Partido.php';

$a1 = new Partido("Partido dos Trabalhadores", "esquerda", "PT", 13);

$a1->mostrarDados();

require_once 'Candidato.php';
$b1 = new Candidato("Lula","Partido dos Trabalhadores");

print_r($a1);
print_r($b1);

$b1->mostrarDados();

        ?>
    </body>
</html>

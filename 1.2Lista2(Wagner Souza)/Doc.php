<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Doc
 *
 * @author ericc
 */
class Doc {
    //put your code here
     public function Transferir (Cliente $c1, Cliente $c2, $quantia){
        if ($c1->ChecarSaldo()>=$quantia){
            $c1->sacar($quantia);
            $c2->depositar($quantia);
        }else{
            echo "Saldo do: ".$c1->getNome()." insulficiente!";
        }
    }
}


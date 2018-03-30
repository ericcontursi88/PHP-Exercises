<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author ericc
 */
class Cliente {
    //put your code here
    private $nome,$saldo,$limite;
    
    public function sacar($val) {
      
        if ($this->ValidarSaque($val))
        {
            $this->saldo -=$val;
        }else{
            echo "Saque indisponivel";
        }
    }
    public function Cliente ($nome,$saldo,$limite){
       $this->nome =$nome;
       $this->saldo =$saldo;
       $this->limite=$limite;
        
    }
    public function Depositar($val){
        $this->saldo+=$val;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
   public function getSaldo(){
       return $this->saldo;
   }
   public function getLimite(){
       return $this->limite;
   }
   
   private function ValidarSaque($valor){
       return $this->saldo+$this->limite> $valor;
   }
   
   public function ChecarSaldo(){
       return $this->saldo+$this->limite;
   }

}

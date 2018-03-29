<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Partido
 *
 * @author ericc
 */
class Partido {
    //put your code here
    
        private $nome;
    private $ideologia;
    private $sigla;
    private $numero;
    
    
    
   public function __construct($nome, $ideologia, $sigla, $numero){
        $this->nome= $nome;
        $this->ideologia= $ideologia;
        $this->sigla= $sigla;
        $this->numero= $numero;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function getIdeologia(){
        return $this->ideologia;
    }
    public function getSigla(){
        return $this->sigla;
    }
    public function getNumero(){
        return $this->numero;
    }
    
    public function mostrarDados(){
        echo "Nome do Partido: ".$this->nome."";
        echo "Ideologia: ".$this->ideologia."";
        echo "Sigla: ".$this->sigla."";
        echo "Numero: ".$this->numero."";
    }
    
}

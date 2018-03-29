<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidato
 *
 * @author ericc
 */
class Candidato {
    //put your code here
    
        private $nome;
    private $partido;

    public function __construct($nome, $partido) {
        $this->nome= $nome;
        $this->partido= $partido;
    }
    
    public function getNome(){
        return $this->nome;
        
    }
    
    public function getPartido(){
        return $this->partido;
    }
    
    public function mostrarDados(){
        echo "Nome do candidato: ".$this->nome."";
        echo "Partido: ".$partido."";
    }
}

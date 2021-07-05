<?php

class Pessoa{
    private $nome;
    private $DataNascimento;
    private $CPF;
    private $RG;
    
    public function setPessoa($nome,$DataNascimento,$CPF,$RG){
        $this->nome=$nome;
        $this->DataNascimento=$DataNascimento;
        $this->CPF=$CPF;
        $this->RG=$RG;
    }

    public function getNome(){
        return $this->nome; 
    }
    public function getDataNascimento(){
        return $this->DataNascimento; 
    }
    public function getCPF(){
        return $this->CPF; 
    }
    public function getRG(){
        return $this->RG; 
    }
     
}

<?php

class Engenheiro{
    private $nome;
    private $DataNascimento;
    private $CPF;
    private $RG;
    private $CREA;
    
    public function setEngenheiro($nome,$DataNascimento,$CPF,$RG,$CREA){
        $this->nome=$nome;
        $this->DataNascimento=$DataNascimento;
        $this->CPF=$CPF;
        $this->RG=$RG;
        $this->CREA=$CREA;
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
    public function getCREA(){
        return $this->CREA; 
    }
     
}
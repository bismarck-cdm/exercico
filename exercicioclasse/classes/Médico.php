<?php

class Médico{
    private $nome;
    private $DataNascimento;
    private $CPF;
    private $RG;
    private $CRM;
    
    public function setMédico($nome,$DataNascimento,$CPF,$RG,$CRM){
        $this->nome=$nome;
        $this->DataNascimento=$DataNascimento;
        $this->CPF=$CPF;
        $this->RG=$RG;
        $this->CRM=$CRM;
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
    public function getCRM(){
        return $this->CRM; 
    }
     
}
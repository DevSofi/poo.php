<?php

namespace aula9b;

class pessoa
{
private $nome;
private $idade;
private $sexo;


    public function __construct($idade , $nome, $sexo)
    {
        $this->idade = $idade;
        $this->nome = $nome;
        $this->sexo = $sexo;
    }

    public function fazerAniver() {
 $this-> idade ++;
 }


    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

}
<?php

namespace aula10;

class pessoas
{
private $nome;
private $idade;
private $sexo;

public function fazerAniv() {
    $this->idade ++;
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

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;
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
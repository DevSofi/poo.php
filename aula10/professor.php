<?php

namespace aula10;
require_once 'pessoas.php';
class professor extends pessoas
{
private $especialidade;
private $salario;

public function receberAum($aum){
$this->salario += $aum;
}

    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }

}
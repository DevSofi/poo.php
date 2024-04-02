<?php

namespace aula10;
require_once 'pessoas.php';
class funcionario extends pessoas
{
private $setor;
private $trabalhando;

public function mudarTrabalho() {
    $this->trabalhando = ! $this->trabalhando;
}

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor)
    {
        $this->setor = $setor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
        return $this;
    }

}
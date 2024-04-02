<?php

namespace aula10;
require_once 'pessoas.php';
class aluno extends pessoas
{
private $mat;
private $curso;

public function cancelarmat() {
    echo "<p>Matrícula será cancelada</p>";
}

    public function getMat()
    {
        return $this->mat;
    }


    public function setMat($mat)
    {
        $this->mat = $mat;
        return $this;
    }

    public function getCurso()
    {
        return $this->curso;
    }


    public function setCurso($curso)
    {
        $this->curso = $curso;
        return $this;
    }

}
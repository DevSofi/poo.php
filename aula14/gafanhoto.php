<?php

namespace aula14;
require_once 'pessoa.php';

class gafanhoto extends pessoa
{
    private $login;
    private $totAssistindo;


    public function __construct($nome,$idade,$sexo,$login)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->login= $login;
        $this->totAssistindo=2;
    }


    public function getLogin()
    {
        return $this->login;
    }


    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    public function getTotAssistindo()
    {
        return $this->totAssistindo;
    }

    public function setTotAssistindo($totAssistindo)
    {
        $this->totAssistindo = $totAssistindo;
        return $this;
    }

    public function viuMaisUm()
    {
  $this->totAssistindo ++;
    }
}
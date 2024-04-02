<?php

namespace aula11;
require_once 'aluno.php';
class bolsista extends aluno
{
private $bolsa;
public function renovarBolsa(){
    echo"<p> Bolsa renovada</p>";
}
    public function  pagarMensalidade(){
    echo "<P> $this->nome é bolsista! Então paga com desconto</p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
        return $this;
    }

}
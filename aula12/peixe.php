<?php

namespace aula12;
require_once 'animal.php';
class peixe extends animal
{
private $corEscama;

    function locomover()
    {
        echo"<p>nadando</p>";
    }

    function alimentar()
    {
        echo"<p>comendo substancias</p>";
    }

    function emitirSom()
    {
        echo"<p>peixe não faz som</p>";
    }
function soltarBolha(){
    echo"<p>soltou uma bolha</p>";
}

    public function getCorEscama()
    {
        return $this->corEscama;
    }


    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
        return $this;
    }

}
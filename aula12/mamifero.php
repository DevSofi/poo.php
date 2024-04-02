<?php

namespace aula12;
require_once 'animal.php';
class mamifero extends animal
{
private $corPelo;
function locomover()
{
echo"<p>correndo</p>";
}
function alimentar()
{
    echo"<p>mamando</p>";
}
function emitirSom()
{
    echo"<p>Som de Mamífero</p>";
}

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
        return $this;
    }
}
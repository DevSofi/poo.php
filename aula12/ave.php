<?php

namespace aula12;
require_once 'animal.php';
class ave extends animal
{
    private $corDaPena;

    function locomover()
    {
        echo"<p>voando</p>";
    }

    function alimentar()
    {
        echo"<p>comendo frutas</p>";
    }

    function emitirSom()
    {
        echo"<p>Som de Ave</p>";
    }
public function fazerNinho(){
    echo"<p>Construindo um ninho</p>";
}
    public function getCorDaPena()
    {
        return $this->corDaPena;
    }


    public function setCorDaPena($corDaPena)
    {
        $this->corDaPena = $corDaPena;
        return $this;
    }

}
<?php

namespace aula12;
require_once 'animal.php';
class reptil extends animal
{
private $corEscama;

    function locomover()
    {
        echo"<p>rastejando</p>";
    }

    function alimentar()
    {
        echo"<p>comendo vegetais</p>";
    }

    function emitirSom()
    {
        echo"<p>Som de Réptil</p>";
    }
}
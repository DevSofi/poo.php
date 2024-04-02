<?php

namespace aula12;
require_once 'mamifero.php';
class canguru extends mamifero
{
    function locomover()
    {
        echo"<p>pulando</p>";
    }
}
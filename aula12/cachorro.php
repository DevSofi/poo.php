<?php

namespace aula12;
require_once 'lobo.php';
class cachorro extends lobo
{
    public function emitirSom()
    {
        echo "<p>auuuuuuuuuu</p>";
    }
    function reagirfrase($frase){
if($frase== "toma comida" || $frase=="olá"){
    echo"<p>Abanar e latir</p>";
}
else{
    echo"<p>Rosnar</p>";
}

    }
    function reagirHora($hora, $min){
if($hora<12){
    echo"<p>Abanar </p>";
}
elseif ($hora>=18){
    echo"<p>ignorar</p>";
}
else{
    echo"<p>Abanar e latir</p>";
}
    }
    function reagirDono ($dono){
if($dono){
    echo"<p>Abanar </p>";
}
        else{
            echo"<p>Rosnar e latir</p>";
        }
    }
}
function reagirIdadePeso($idade, $peso){
    if ($idade<5){
        if($peso <10) {
            echo"<p>abanar</p>";
        }
    } elseif ($peso < 10){
        echo "rosnar";
    } else{
        echo"<p>ignorar</p>";
    }
}

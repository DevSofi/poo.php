<?php
require_once 'Controlador.php';

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->ligado = false;
        $this->volume = 50;
        $this->tocando = false;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
        return $this;
    }

    public function getTocando()
    {
        return $this->tocando;
    }

    public function setTocando($tocando)
    {
        $this->tocando = $tocando;
        return $this;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }


    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        echo "<br>está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>está tocando? :" . ($this->getTocando() ? "SIM" : "NÃO");
        echo "<br>Volume: " . ($this->getVolume());
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "fechando menu...";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        } else {
            echo "<p> ERRO! não posso aumentar o volume</p>";
        }
    }

    public function menosVolume()
    {
        if ($this->getVolume()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() === 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}
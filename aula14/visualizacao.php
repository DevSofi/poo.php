<?php
require_once 'video.php';
require_once 'gafanhoto.php';

class visualizacao
{
    private $espectador;
    private $filme;


    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
    }

    public function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    public function avaliarPorc($porc)
    {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;

        } elseif ($porc<=50){
            $nova=5;
        } elseif ($porc<=90){
            $nova = 8;
        } else {
            $nota=10;
        }
        $this->filme->setAvaliacao($nova);
    }

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
        return $this;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
        return $this;
    }


}
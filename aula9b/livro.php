<?php

namespace aula9b;
require_once 'pessoa.php';
require_once 'publicacao.php';

class livro implements publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }


    public function detalhes()
    {
        echo "<hr> livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br> páginas: " . $this->totPaginas . " atual ". $this->pagAtual ;
        echo "<br> Sendo lido por " . $this->leitor-> getNome();

    }


    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
        return $this;
    }


    public function getAberto()
    {
        return $this->aberto;
    }


    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
        return $this;
    }


    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
        return $this;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }


    public function getTotPaginas()
    {
        return $this->totPaginas;
    }


    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
        return $this;
    }

//__________________________________________________


    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($p)
    {
        if ($p > $this->totPaginas) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag()
    {
        $this->pagAtual++;
    }

    public function voltarpag()
    {
        $this->pagAtual--;
    }
}
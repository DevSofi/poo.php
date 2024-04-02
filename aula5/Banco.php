<?php

class Banco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->saldo = 50;
        $this->status = false;
        echo "<p>conta criada com sucesso!</p>";
    }

    public function abrirConta($t)
    {
        $this->settipo($t);
        $this->setstatus(true);

        if ($t === "cc") {
            $this->setsaldo(50);
        } elseif ($t === "cp") {
            $this->setSaldo(150);
        }


    }

    public function fecharConta()
    {
        if ($this->getsaldo() > 0) {
            echo "<p>conta com dinheiro</p>";
        } else if ($this->getsaldo < 0) {
            echo "<P>conta em débito</p>";
        } else {
            $this->setstatus(false);
        }
    }

    public function depositar($v)
    {
        if ($this->getstatus()) {
            /*    $this->saldo=$this->saldo + $v;*/
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "<p>impossível digitar</p>";
        }
    }

    public function sacar($v)
    {
        if ($this->getstatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>saldo insuficiente para saque</p>";
            }
        } else {
            echo "<p>não posso sacar de uma conta fechada</p>";
        }

    }

    public function pagarMensal()
    {
        if ($this->getTipo()  == "CC") {
            $v = 12;
        }
        else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
        }
        else {
            echo "<p>problemas com a conta. Não posso testar </p>";
        }

    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function getStatus()
    {
        return $this->status = true;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }


}


?>


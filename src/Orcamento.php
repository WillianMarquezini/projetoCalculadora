<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\EstadosOrcamento\EmAprovacao;
use Alura\DesignPatterns\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    private function calculaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }
    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }
    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }

}

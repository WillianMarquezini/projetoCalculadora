<?php

namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;

class Aprovado extends Orcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
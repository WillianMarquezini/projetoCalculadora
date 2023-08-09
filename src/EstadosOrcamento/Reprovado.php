<?php

namespace Alura\DesignPatterns\EstadosOrcamento;

use Alura\DesignPatterns\Orcamento;

class Reprovado extends Orcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento)
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
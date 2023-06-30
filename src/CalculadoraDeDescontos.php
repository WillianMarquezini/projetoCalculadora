<?php

namespace Alura\DesignPatterns;

use Alura\DesignPatterns\Descontos\Desconto;
use Alura\DesignPatterns\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPatterns\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPatterns\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDesconto(Orcamento $orcamento): float
    {

        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );
        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
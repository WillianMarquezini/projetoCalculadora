<?php

namespace Alura\DesignPatterns\Impostos;

class Icms implements Imposto
{
    public function calculaImposto($orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
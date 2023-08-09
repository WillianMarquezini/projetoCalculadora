<?php

namespace Alura\DesignPatterns;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeImmutable  $dataFinalizacao;
    public Orcamento $orcamento;
}
<?php

namespace Alura\DesignPattern\Pedido;

class TemplatePedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    public function __construct(string $nomeCliente, \DateTimeImmutable $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFinalizacao(): \DateTimeImmutable
    {
        return  $this->dataFinalizacao;
    }


}
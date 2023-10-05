<?php

namespace Src;

class GerarPedido {
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente) {
        $this->valorOrcamento   = $valorOrcamento;
        $this->numeroItens      = $numeroItens;
        $this->nomeCliente      = $nomeCliente;
    }

    public function getValorOrcamento(): Float {
        return $this->valorOrcamento;
    }

    public function getNumeroItens(): Int {
        return $this->numeroItens;
    }

    public function getNomeCliente(): String {
        return $this->nomeCliente;
    }
}
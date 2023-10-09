<?php

namespace Src;

class DadosExternosPedido {
    private String $nomeCliente;
    private \DateTimeImmutable $dataFinalizacao;

    public function __construct(String $nomeCliente, \DateTimeInterface $dataFinalizacao) {
        $this->nomeCliente      = $nomeCliente;
        $this->dataFinalizacao  = $dataFinalizacao; 
    }

    public function getNome(): String {
        return $this->nomeCliente;
    }

    public function getData() {
        return $this->dataFinalizacao;
    }
}
<?php

namespace Src;

class ListaOrcamentos implements \IteratorAggregate {
    private Array $orcamentos;

    public function __construct() {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento) {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator() {
        return new \ArrayIterator($this->orcamentos);
    }
}
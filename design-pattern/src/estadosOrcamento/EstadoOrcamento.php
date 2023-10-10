<?php

namespace Src\EstadosOrcamento;

use Src\Orcamento;

abstract class EstadoOrcamento {
    abstract public function calculaDescontoExtra(Orcamento $orcamento): Float;

    public function aprova(Orcamento $orcamento) {
        throw new \Exception("Este orçamento não pode ser aprovado.");
    }

    public function reprova(Orcamento $orcamento) {
        throw new \Exception("Este orçamento não pode ser reprovado.");
    }

    public function finaliza(Orcamento $orcamento) {
        throw new \Exception("Este orçamento não pode ser finalizado.");
    }
    
}
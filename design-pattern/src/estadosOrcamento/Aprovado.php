<?php

namespace Src\EstadosOrcamento;

use Src\Orcamento;

class Aprovado extends EstadoOrcamento {
    public function calculaDescontoExtra(Orcamento $orcamento): Float {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento) {
        $orcamento->estadoAtual = new Finalizado();
    }
}
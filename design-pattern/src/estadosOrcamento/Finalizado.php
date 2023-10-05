<?php

namespace Src\EstadosOrcamento;

use Src\Orcamento;

class Finalizado extends EstadoOrcamento  {
    public function calculaDescontoExtra(Orcamento $orcamento): Float {
        throw new \Exception("Um orçamento finalizado não pode receber desconto.");
    }
}
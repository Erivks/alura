<?php

namespace Src\EstadosOrcamento;

use Src\Orcamento;

class Reprovado extends EstadoOrcamento {
    public function calculaDescontoExtra(Orcamento $orcamento): Float {
        throw new \Exception("Um orçamento reprovado não pode receber desconto.");
    }
}
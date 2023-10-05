<?php

namespace Src\Impostos;

use Src\Orcamento;

class Ikcv extends Imposto2Aliquotas {

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): Bool {
        return $orcamento->valor > 300 && $orcamento->quantidade > 3;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): Float {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): Float {
        return $orcamento->valor * 0.025;
    }
}
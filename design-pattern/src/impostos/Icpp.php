<?php

namespace Src\Impostos;

use Src\Orcamento;

class Icms extends Imposto2Aliquotas {
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): Bool {
        return $orcamento->valor > 300;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): Float {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): Float {
        return $orcamento->valor * 0.02;
    }
}
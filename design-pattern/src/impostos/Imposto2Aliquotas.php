<?php

namespace Src\Impostos;

use Src\Orcamento;

abstract class Imposto2Aliquotas implements Imposto {
    public function realizaCalculoEspecifico(\Src\Orcamento $orcamento): Float {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->calculaTaxaMaxima($orcamento);
        }

        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): Bool;
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento): Float;
    abstract protected function calculaTaxaMinima(Orcamento $orcamento): Float;
}
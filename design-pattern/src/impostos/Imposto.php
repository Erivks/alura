<?php

namespace Src\Impostos;

use Src\Orcamento;

abstract class Imposto {
    private ?Imposto $outroImposto;
    
    public function __construct(Imposto $outroImposto) {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): Float;

    public function calculaImposto(Orcamento $orcamento) {
        return $this->realizaCalculoEspecifico($orcamento) + $this->realizaCalculoDeOutroImposto($this->outroImposto);
    }

    private function realizaCalculoDeOutroImposto(Orcamento $orcamento) {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto();
    }
}
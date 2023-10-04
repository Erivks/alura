<?php

namespace Src;

class CalculadoraDeImpostos {
    public function calcula(Orcamento $orcamento, Impostos\Imposto $imposto): Float {
        return $imposto->calcula($orcamento);
    }
}
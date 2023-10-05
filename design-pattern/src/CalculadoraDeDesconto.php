<?php

namespace Src;

use Src\Descontos\{DescontoMaisCincoItens, DescontoMaisQuinhentosReais, SemDesconto};

class CalculadoraDeDesconto {
    public function calcula(\Src\Orcamento $orcamento): Float {
        $cadeiaDescontos = new DescontoMaisCincoItens(
            new DescontoMaisQuinhentosReais(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}
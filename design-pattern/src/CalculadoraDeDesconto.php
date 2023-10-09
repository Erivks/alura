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

        $desconto = $cadeiaDescontos->calculaDesconto($orcamento);
        
        $log = new LogDesconto();
        $log->informar($desconto);

        return $desconto;
    }
}
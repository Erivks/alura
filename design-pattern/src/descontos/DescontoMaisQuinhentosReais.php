<?php

namespace Src\Descontos;

class DescontoMaisQuinhentosReais extends Desconto {
    public function calculaDesconto(\Src\Orcamento $orcamento): Float {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
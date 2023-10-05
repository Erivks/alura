<?php

namespace Src\Descontos;

class DescontoMaisCincoItens extends Desconto {
    public function calculaDesconto(\Src\Orcamento $orcamento): Float {
        if ($orcamento->quantidade > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
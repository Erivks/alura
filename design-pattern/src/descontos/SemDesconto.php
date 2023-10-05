<?php

namespace Src\Descontos;

class SemDesconto extends Desconto {
    public function __construct() {
        parent::__construct(null);
    }

    public function calculaDesconto(\Src\Orcamento $orcamento): Float {
        return 0;
    }
}
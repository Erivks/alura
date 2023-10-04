<?php

namespace Src\Impostos;

class Iss implements Imposto {
    public function calcula(\Src\Orcamento $orcamento): Float {
        return $orcamento->valor * 0.06;
    }
}
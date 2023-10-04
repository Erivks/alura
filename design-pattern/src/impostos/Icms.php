<?php

namespace Src\Impostos;

class Icms implements Imposto {
    public function calcula(\Src\Orcamento $orcamento): Float {
        return $orcamento->valor * 0.1;
    }
}
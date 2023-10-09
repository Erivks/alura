<?php

namespace Src\Impostos;

class Icms extends Imposto {
    public function realizaCalculoEspecifico(\Src\Orcamento $orcamento): Float {
        return $orcamento->valor * 0.1;
    }
}
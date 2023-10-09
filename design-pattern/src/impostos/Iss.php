<?php

namespace Src\Impostos;

class Iss implements Imposto {
    public function realizaCalculoEspecifico(\Src\Orcamento $orcamento): Float {
        return $orcamento->valor * 0.06;
    }
}
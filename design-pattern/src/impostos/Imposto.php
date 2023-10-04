<?php

namespace Src\Impostos;

interface Imposto {
    public function calcula(\Src\Orcamento $orcamento): Float; 
}
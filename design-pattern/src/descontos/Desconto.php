<?php

namespace Src\Descontos;

abstract class Desconto {

    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $desconto) {
        $this->proximoDesconto = $desconto;
    }

    abstract public function calculaDesconto(\Src\Orcamento $orcamento): Float;
}
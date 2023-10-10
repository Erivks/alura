<?php

namespace Src\Venda;

use Src\Impostos\Icms;
use Src\Impostos\Imposto;

class VendaProdutoFactory implements VendaFactory {

    public int $pesoProduto;

    public function __construct(Int $pesoProduto)
    {   
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}
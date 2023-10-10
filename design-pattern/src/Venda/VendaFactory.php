<?php

namespace Src\Venda;

use Src\Impostos\Imposto;

interface VendaFactory {
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
<?php

namespace Src\Venda;

use Src\Impostos\Iss;
use Src\Impostos\Imposto;

class VendaServicoFactory implements VendaFactory {

    public string $nomePrestador;

    public function __construct(Int $nomePrestador)
    {   
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}
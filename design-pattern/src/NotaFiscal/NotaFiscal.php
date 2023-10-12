<?php

namespace Src\NotaFiscal;

use Src\ItemOrcamento;

class NotaFiscal {
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImposto;

    public function valor(): float {
        return array_reduce(
            $this->itens,
            fn ($valorAcumulado, ItemOrcamento $itemAtual) => $valorAcumulado + $itemAtual->valor,
            0
        );
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();   
    }
}
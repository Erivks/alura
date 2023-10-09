<?php

namespace Src\Relatorio;

use Src\Orcamento;

class OrcamentoRelatorio implements Conteudo {
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): Array {
        return [
            "valor"             => $this->orcamento->valor,
            "quantidade_itens"  => $this->orcamento->quantidadeItens
        ];
    }
}
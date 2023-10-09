<?php

namespace Src\Relatorio;

use Src\Pedido;

class PedidoRelatorio implements Conteudo {
    private Pedido $pedido;

    public function __construct(Pedido $pedido) {
        $this->pedido = $pedido;
    }

    public function conteudo(): Array {
        return [
            "data_finalizacao" => $this->pedido->dataFinalizacao->format("d/m/Y")
        ];
    }
}
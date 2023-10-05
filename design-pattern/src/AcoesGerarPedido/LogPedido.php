<?php

namespace Src\AcoesGerarPedido;

use Src\Pedido;

class LogPedido implements AcaoGerarPedido {
    public function executaAcao(Pedido $pedido): Void {
        echo("Log de pedido.");
    }
}
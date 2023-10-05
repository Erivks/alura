<?php

namespace Src\AcoesGerarPedido;

use Src\Pedido;

class EnviarEmailPedido implements AcaoGerarPedido {
    public function executaAcao(Pedido $pedido): Void {
        echo("Email de pedido.");
    }
}
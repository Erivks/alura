<?php

namespace Src\AcoesGerarPedido;

use Src\Pedido;

class CriarPedidoBanco implements AcaoGerarPedido {
    public function executaAcao(Pedido $pedido): Void {
        echo("Registro de pedido no banco.");
    }
}
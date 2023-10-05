<?php

namespace Src\AcoesGerarPedido;

use Src\Pedido;

interface AcaoGerarPedido {
    public function executaAcao(Pedido $pedido): Void;
}
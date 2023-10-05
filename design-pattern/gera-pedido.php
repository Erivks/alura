<?php

use Src\{Orcamento, GerarPedido, GerarPedidoHandler};
use Src\AcoesGerarPedido\{LogPedido};

require_once("vendor/autoload.php");

$valorOrcamento = $argv[1];
$numeroItens    = $argv[2];
$nomeCliente    = $argv[3];

$gerarPedido        = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->addAcao(new LogPedido());
$gerarPedidoHandler->execute($gerarPedido);

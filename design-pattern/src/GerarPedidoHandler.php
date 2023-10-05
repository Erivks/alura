<?php

namespace Src;

use Src\AcoesGerarPedido\{LogPedido, EnviarEmailPedido, CriarPedidoBanco, AcaoGerarPedido};

class GerarPedidoHandler {

    private array $acoesAposGerarPedido = [];

    public function __construct() {}

    public function addAcao(AcaoGerarPedido $acao) {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido) {
        $orcamento                  = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor           = $gerarPedido->getValorOrcamento();

        $pedido                     = new Pedido();
        $pedido->dataFinalizacao    = new \DateTimeImmutable();
        $pedido->nomeCliente        = $gerarPedido->getNomeCliente();
        $pedido->orcamento          = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
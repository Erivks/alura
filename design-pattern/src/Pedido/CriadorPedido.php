<?php

namespace Src\Pedido;

use Src\Orcamento;

class CriadorPedido {
    private Array $templates = [];

    public function criaPedido(String $nomeCliente, String $dataFormatada, Orcamento $orcamento): Pedido {
        $template = $this->gerarTemplate($nomeCliente, $dataFormatada);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    public function gerarTemplate($nomeCliente, $dataFormatada) {
        $hash = md5($nomeCliente . $dataFormatada);
        
        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}
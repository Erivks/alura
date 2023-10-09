<?php

namespace Src;

use Src\EstadosOrcamento\{EstadoOrcamento, EmAprovacao};

class Orcamento implements Orcavel {

    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function aplicaDescontoExtra(): Void {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova(): Void {
        $this->estadoAtual->aprova($this);
    }

    public function reprova(): Void {
        $this->estadoAtual->reprova($this);
    }
    
    public function finaliza(): Void {
        $this->estadoAtual->finaliza($this);
    }

    public function addItens(Orcavel $item): Void {
        $this->itens[] = $item;
    }

    public function valor(): Float {
        return array_reduce(
            $this->itens,
            fn (Float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }
}
<?php

namespace Src;

use Src\EstadosOrcamento\{EstadoOrcamento, EmAprovacao};

class Orcamento {
    public int $quantidade;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
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
}
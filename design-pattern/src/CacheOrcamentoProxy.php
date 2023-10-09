<?php

namespace Src;

class CacheOrcamentoProxy extends Orcamento {
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item) {
        throw new Exception("Orcamento já foi cacheado");
    }

    public function valor(): Float {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
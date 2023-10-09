<?php

namespace Src;

class ItemOrcamento implements Orcavel {
    public float $valor;

    public function valor(): Float {
        return $this->valor;
    }
}
<?php

namespace Src\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal {
    public function constroi(): NotaFiscal {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.02;

        return $this->notaFiscal;
    }
}
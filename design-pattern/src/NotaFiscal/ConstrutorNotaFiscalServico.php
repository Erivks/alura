<?php

namespace Src\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal {
    public function constroi(): NotaFiscal {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImposto = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }
}
<?php

namespace Src\NotaFiscal;

use Src\ItemOrcamento;

abstract class ConstrutorNotaFiscal {
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
    }

    public function paraEmpresa(String $cnpj, String $razaoSocial): ConstrutorNotaFiscal {
        $this->notaFiscal->cnpjEmpresa = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item): ConstrutorNotaFiscal {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(String $observacoes): ConstrutorNotaFiscal {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(\DateTimeInterface $dataEmissao): ConstrutorNotaFiscal {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function constroi(): NotaFiscal;
}
<?php

namespace Src\Indicacao;

use Src\Aluno\Aluno;

class Indicacao {
    private Aluno $indicador;
    private Aluno $indicado;
    private \DateTimeImmutable $data;

    public function __construct(Aluno $indicador, Aluno $indicado)
    {
        $this->indicador    = $indicador;
        $this->indicado     = $indicado;
        $this->data         = new \DateTimeImmutable();
    }
}